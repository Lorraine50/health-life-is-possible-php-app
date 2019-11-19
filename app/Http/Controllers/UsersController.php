<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Support\Facades\DB;
use App\Consultation;
use App\Hcp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store;

class UsersController extends Controller
{
    
    public function postSignUp(Request $request){
        $this->validate($request, [
            // get all the form data 
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:40|unique:users',
            'password' => 'required|min:6|max:20|',
            'confirm_password' => 'required|min:6|max:20|same:password',
            'tel_h' => 'required|numeric|min:10',
            'tel_w' => 'required|numeric|min:10',
            'tel_c' => 'required|numeric|min:10',
            'reference' => 'required|string|min:2',
            'dob' => 'required|date',
            'addr' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
        ]);

        $user = new User([
            'name' => $request->input('name'), 
            'email' => $request->input('email'), 
            'password' => bcrypt($request->input('password')), 
            'tel_h' => $request->input('tel_h'), 
            'tel_w' => $request->input('tel_w'), 
            'tel_c' => $request->input('tel_c'), 
            'reference' => $request->input('reference'), 
            'dob' => $request->input('dob'), 
            'addr' => $request->input('addr'), 
            'gender' => $request->input('gender'), 
        ]);
        $user->save();
        // login in the user 
        Auth::login($user);
        // create session id
        $request->session()->put('s_id', mt_rand(1, 1000));
        // get all the data for the view to add a booking
        $services = Consultation::all();
        $hcps = Hcp::all();
        return view('booking', ['services' => $services, 'hcps' => $hcps])->with('success', 'User registration successful. You may place a booking');
    }

    public function getSignUp(){
        return view('auth.register');
    }

    public function postSignIn(Request $request){
        // validate the login request
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        // login the user 
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            // create session id
            $request->session()->put('s_id', mt_rand(1, 1000));
            return redirect()->route('userProfile');
        }
        return redirect()->back()->with('error', 'Email/password combination does match');
    }

    public function postBooking(Request $request){
        // for unregistered user 
        if(!$request->session()->has('s_id')){
            return redirect()->route('registerUser')->with('error', 'Please register to place booking');
        }

        // for user who do not have a booking session (exists - present and null or has - present and not null)
        if(!$request->session()->has('booking')){ // login 
            // get all booking data andd store it in booking session
            $booking = $request->session()->put('booking', $request->all()); 

            $bookingDoctor = DB::table('hcps')->where('id', Session::get('booking')["hcp"])->value('hcp_name');
            $request->session()->put('doctor', $bookingDoctor);

            $bookingDate = new DateTime('tomorrow'); $bookingDate = $bookingDate->format('Y-m-d'); 
            $request->session()->put('date', $bookingDate); 

            $bookingName  = DB::table('consultations')->where('id', Session::get('booking')["service"])->value('c_name'); 
            $request->session()->put('name', $bookingName); 

            $bookingPrice = DB::table('consultations')->where('id', Session::get('booking')["service"])->value('c_price'); 
            $request->session()->put('price', $bookingPrice); 

            return view('view', ['booking' => $booking]);

        }else if($request->session()->has('booking')){
            return redirect()->back()->with('error', 'A booking has been placed earlier');
        }
    }

    public function deleteBooking(Request $request){
        $request->session()->flush();
        return redirect()->back()->with('success', 'Booking deleted');
    }

    public function insertBooking(Request $request){
        // insert the booking to the database 
        $count = DB::table('bookings')
            ->where('session_id', Session::get('s_id'))
            ->where('user_id', Auth::id())
            ->count();
        //dd($count);
        
        if($count > 0){
            return redirect()->back()->with('error', 'Booking already placed and confirmed.');
        }

        $booking = new Booking([
            'booking_date' => Session::get('date'), 
            'booking_time' => Session::get('booking')["time"],
            'user_id' => Auth::id(), // $email = Auth::user()->email;
            'hcp_id' => Session::get('booking')["hcp"],
            'consultation_id' => Session::get('booking')["service"],
            'session_id' => Session::get('s_id'),
            'status' => 'pending',
            'booking_total' => Session::get('price')
        ]);
        $booking->save();
        /*
        DB::table('bookings')->insert([
            'booking_date' => Session::get('date'), 
            'booking_time' => Session::get('booking')["time"],
            'user_id' => Auth::id(), // $email = Auth::user()->email;
            'hcp_id' => Session::get('booking')["hcp"],
            'consultation_id' => Session::get('booking')["service"],
            'session_id' => Session::get('s_id'),
            'status' => 'pending',
            'booking_total' => Session::get('price')
            ]); */
        return redirect()->route('userProfile')->with('success', 'Booking successfully placed.');
        
    }

    public function getBooking(Request $request){
        // for unregistered user 
        if(!$request->session()->has('s_id')){
            return redirect()->route('registerUser')->with('error', 'Please register to place booking');
        }

        $services = Consultation::all();
        $hcps = Hcp::all();
        return view('booking', ['services' => $services, 'hcps' => $hcps]);
    }

    public function getAppointment(){
        return view('view');
    }

    public function getUserProfile(){
        $bookings = Auth::user()->bookings;

        //$bookings = DB::table('bookings')->where('id', Auth::id());
        return view('profile', ['bookings' => $bookings]);
    }

    public function getUpdate(){
        $user = Auth::user();
        return view('update', ['user' => $user]);
    }

    public function postUpdate(Request $request){
        $this->validate($request, [
            // get all the form data 
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|max:40|unique:users',
            'password' => 'required|min:6|max:20|',
            'confirm_password' => 'required|min:6|max:20|same:password',
            'tel_h' => 'required|numeric|min:10',
            'tel_w' => 'required|numeric|min:10',
            'tel_c' => 'required|numeric|min:10',
            'reference' => 'required|string|min:2',
            'dob' => 'required|date',
            'addr' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
        ]);

        $user = new User([
            'name' => $request->input('name'), 
            'email' => $request->input('email'), 
            'password' => bcrypt($request->input('password')), 
            'tel_h' => $request->input('tel_h'), 
            'tel_w' => $request->input('tel_w'), 
            'tel_c' => $request->input('tel_c'), 
            'reference' => $request->input('reference'), 
            'dob' => $request->input('dob'), 
            'addr' => $request->input('addr'), 
            'gender' => $request->input('gender'), 
        ]);
        $user->save();

        return redirect()->back()->with('success', 'Update successful');
    }

    public function getLogout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect()->route("home");
    }
}

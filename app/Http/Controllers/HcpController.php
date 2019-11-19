<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Consultation;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HcpController extends Controller
{
    protected $guard = 'hcp';

    public function __construct()
    {
       $this->middleware('auth:hcp'); // auth:admin
    }
    // dashboard
    public function index(){
        // get data from the interface
        $day_bookings = DB::table('bookings')
                ->selectRaw('SUM(booking_total) as total_sales')
                ->whereRaw("date_format(created_at, '%Y-%m-%d') = CURRENT_DATE")
                ->value('total_sales');
        $week_bookings = DB::table('bookings')
                ->selectRaw('SUM(booking_total) as total_sales')
                ->whereRaw("WEEK(date_format(created_at, '%Y-%m-%d')) = WEEK(CURRENT_DATE)")
                ->value('total_sales');
        $month_bookings = DB::table('bookings')
                ->selectRaw('SUM(booking_total) as total_sales')
                ->whereRaw("MONTH(date_format(created_at, '%Y-%m-%d')) = MONTH(CURRENT_DATE)")
                ->value('total_sales');

        return view('admin.home', ['day_bookings' => $day_bookings, 'week_bookings' => $week_bookings, 'month_bookings' => $month_bookings]);
    }

    public function getChart(){
        return view('admin.chart');
    }

    public function getCalendar(){
        return view('admin.calendar');
    }

    public function getBookings(){
        $bookings = Booking::orderBy('status', 'desc')->get();
        return view('admin.booking', ['bookings' => $bookings]);
    }

    public function getUser(){
        $users = User::all();
        return view('admin.user', ['users' => $users]);
    }

    public function getCompleted(Request $request, $id){
        $booking = Booking::find($id);
        $booking->status = 'Completed';
        $booking->save();

        return redirect()->back()->with('success', 'Booking updated');
    }

    public function getDelete(Request $request, $id){
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back()->with('success', 'Booking deleted');;
    }

}
<?php

namespace App\Http\Controllers;
use App\Consultation;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getHome(){

        $consultations = Consultation::all();
        return view('welcome', ['consultations' => $consultations]
    );

    }

    public function getAbout(){
        $consultations = Consultation::all();
        return view('about', ['consultations' => $consultations]);
    }

    public function getConsultation($id){

        $consultation = Consultation::find($id);
        $consultations = Consultation::all();
        return view('consultation-details', ['consultation' => $consultation, 'consultations' => $consultations]);
    }

    public function getFees(){
        $consultations = Consultation::all();
        return view('fees', ['consultations' => $consultations]);
    }

}

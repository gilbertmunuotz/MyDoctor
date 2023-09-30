<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\doctors;
use App\View\Components\AppLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function view_mypatients() 
     {
     
        if (Auth::id()) {
            $userid = Auth::user()->id;

        $patients = Appointment::where('doctor', $userid)->get();
        //dd($patients);
        return view('doctor.mypatients', ['patients' => $patients]);
        }

       else {
        return redirect()->back()->with('message', 'You Have No Patients Today');
       }

    }

}

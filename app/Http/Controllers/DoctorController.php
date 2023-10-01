<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\doctors;
use App\View\Components\AppLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function view_mypatients(Request $id)
    {

        if (Auth::id()) {
            $userid = Auth::user()->id;

            $docid = doctors::find($id);
            $patients = $docid = Appointment::where('doctor', $id)->get();

            return view('doctor.mypatients', compact('patients'));
        } else {
            return redirect()->back()->with('message', 'You Have No Patients Today');
        }
    }
}

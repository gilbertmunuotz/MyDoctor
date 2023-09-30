<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use App\Models\doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Builder\Identity;

class HomeController extends Controller
{
    public function checkuser()
    {

        if (auth::id()) {

            if (Auth::user()->usertype == '0') {
                $doctor = doctors::all();
                return view('patient.index', ['doctor' => $doctor]);
            } elseif (Auth::user()->usertype == '1') {
                return view('doctor.index');
            } else {
                $data = Appointment::all();
                return view('admin.index', ['data' => $data]);
            }
        } else {
            return redirect()->back();
        }
    }


    public function index()
    {
        $doctor = doctors::all();
        return view('patient.index', ['doctor' => $doctor]);
    }

    public function book_appointment(Request $request)
    {

        $data = new appointment;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->doctor = $request->doctor;

        $data->date = $request->date;

        $data->message = $request->message;

        $data->status = 'Pending';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message', 'Appoitment Booked Succesful');
    }

    public function view_appointments()
    {

        if (Auth::id()) {
            $userid = Auth::user()->id;

            $identity = Appointment::where('user_id', $userid)->get();

            return view('patient.myappointments', ['identity' => $identity]);
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {

        $data = Appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function edit_myappoints(Request $request, $id)
     {
        $identity = Appointment::find($id);

        return view('patient.editmyappoints', compact('identity'));        

    }

    public function updatemyappoints( Request $request, $id)
    {
       $myinfo = Appointment::find($id);


       $myinfo->name = $request->name;

       $myinfo->email = $request->email;

       $myinfo->phone = $request->phone;

       $myinfo->doctor = $request->doctor;

       $myinfo->date = $request->date;

       $myinfo->message = $request->message;

       $myinfo->save();

       return redirect()->back()->with('message', 'Appointment Updated Succesfully');

    }
}

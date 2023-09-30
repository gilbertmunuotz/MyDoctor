<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\doctors;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor()
    {
        $doctor = User::all();
        // dd($doctor); 
        return view('admin.addoc', ['doctors' => $doctor]);
    }
    public function viewdoctor()
    {

        $data = doctors::all();
       
        return view('admin.viewdoctor', compact('data'));
    }

    public function adding_doctor(Request $request)
    {

        $user = User::find($request->id);
        
        $doctor = new doctors;
        $doctor->name = $user->name;
        $doctor->phone = $request->phone;
        $doctor->number = $request->number;
        $doctor->faculty = $request->faculty;
        $doctor->user_id = $user->id;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Succesfully');
    }

    public function admin_appointments()
    {

        $data = Appointment::all();

        return view('admin.showappointment', ['data' => $data]);
    }

    // public function delete_appointmets($id)
    // {

    //     $data = Appointment::find($id);

    //     $data->delete();

    //     return redirect()->back();
    // }

    public function delete_doctors($id)
     {
    
        $data = doctors::find($id);

        $data->delete();

        return redirect()->back(); 

    }

    public function edit_doctor(Request $request, $id)
     {

        $doctor = doctors::find($id);
    
        return view('admin.editdoc', ['doctor' => $doctor]);

    }

    public function updatemydoctors(Request $request, $id) 
     {
    
        $mydoctors = doctors::find($id);

        $mydoctors->name = $request->name;

        $mydoctors->phone = $request->phone;

        $mydoctors->number = $request->number;

        $mydoctors->faculty = $request->faculty;

        $mydoctors->save();

        return redirect()->back();

    }

}

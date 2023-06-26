<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 'mahasiswa') {
                $dosen = Dosen::all();
                return view('user.home')->with("dataDosen", $dosen);
            } elseif (Auth::user()->usertype == 'admin') {
                return view('admin.home');
            } elseif (Auth::user()->usertype == 'dosen') {
                return view('dosen.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {

            $dosen = Dosen::all();

            return view('user.home')->with("dataDosen", $dosen);
        }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->dosen = $request->dosen;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if (Auth::id()) {

            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Sent | We Will Contact You Soon');
    }

    public function myAppointment()
    {
        if (Auth::id()) {
            $user_id = Auth::user()->id;

            $appointments = Appointment::where('user_id', $user_id)->get();

            return view('user.my-appointment')->with("dataAppointment", $appointments);
        } else {
            return redirect()->back();
        }
    }

    public function cancelAppointment($id)
    {
        $appointment = Appointment::find($id);

        $appointment->delete();

        return redirect()->back()->with('message', 'Appointment Request Canceled');
    }

    public function showDosen()
    {
        $dosen = Dosen::all();

        return view('user.show-dosen')->with("dataDosen", $dosen);
    }

    public function dosenSchedule($nama)
    {
        $dosen = Dosen::find($nama);
        $appointmentData = Appointment::where('dosen', $nama)->get();

        return view('user.dosen-schedule', [
            'dataDosen' => $dosen,
            'appointmentData' => $appointmentData
        ]);
    }
}

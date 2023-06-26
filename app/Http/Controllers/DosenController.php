<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function showAppointment()
    {
        $data = Appointment::where('dosen', auth()->user()->name)->get();
        return view('dosen.show-appointment')->with('appointmentData', $data);
    }
    public function approve($id)
    {
        $data = Appointment::find($id);
        $data->status = "Approved";
        $data->save();

        return redirect()->back()->with('message', 'Appointment berhasil diapprove');
    }
    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = "Canceled";
        $data->save();

        return redirect()->back()->with('message', 'Appointment berhasil dicancel');
    }

}

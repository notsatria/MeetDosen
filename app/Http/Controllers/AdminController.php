<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Dosen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.add-dosen');
    }

    public function upload(Request $request)
    {
        $dosen = new Dosen;

        $image = $request->foto;
        $imageName = time() . '.' . $image->extension();
        $request->foto->move(public_path('foto-dosen'), $imageName);

        $dosen->photo = $imageName;

        $dosen->nama = $request->nama;
        $dosen->telepon = $request->nomor;
        $dosen->nidn = $request->nidn;
        $dosen->jurusan = $request->jurusan;

        $dosen->save();

        return redirect()->back()->with('message', 'Data dosen berhasil ditambahkan');
    }



    public function showDosen()
    {
        $data = Dosen::all();
        return view('admin.show-dosen')->with('dosenData', $data);
    }

    public function deleteDosen($id)
    {
        $data = Dosen::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Data dosen berhasil dihapus');
    }

    public function editDosen($id)
    {
        $data = Dosen::find($id);
        return view('admin.edit-dosen')->with('dosenData', $data);
    }

    public function updateDosen(Request $request, $id)
    {
        $data = Dosen::find($id);

        $data->nama = $request->nama;
        $data->telepon = $request->nomor;
        $data->nidn = $request->nidn;
        $data->jurusan = $request->jurusan;

        $photo = $request->foto;

        if ($photo) {
            $photoName = time() . '.' . $photo->getClientOriginalExtension();

            $request->foto->move(public_path('foto-dosen'), $photoName);

            $data->photo = $photoName;
        }

        $data->save();

        return redirect()->back()->with('message', 'Data dosen berhasil diupdate');
    }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik_saran;
use App\Models\Pelanggan;

class Kritik_saranController extends Controller
{
    public function index(){
        $data = Kritik_saran::all();
        return view('menu.Kritik_saran', compact('data'));
    }

    public function iKritik_saran(){
        $pelanggan = Pelanggan::all();
        return view('menu.input.iKritik_saran', compact('pelanggan'));
    }

    public function instKritik_saran(Request $request){
        //dd($request->all());
        Kritik_saran::create($request->all());
        return redirect()->route('Kritik_saran')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editKritik_saran($id){
        $pelanggan = Pelanggan::all();
        $data = Kritik_saran::find($id);
        return view('menu.edit.eKritik_saran', compact('data', 'pelanggan'));
    }

    public function updateKritik_saran(Request $request, $id ){
        $data = Kritik_saran::find($id);
        $data->update($request->all());
        return redirect()->route('Kritik_saran')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delKritik_saran($id){
        $data = Kritik_saran::find($id);
        $data->delete();
        return redirect()->route('Kritik_saran')->with('Success', 'Data Berhasil Dihapus');
    }
}
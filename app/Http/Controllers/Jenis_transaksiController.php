<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_transaksi;

class Jenis_transaksiController extends Controller
{
    public function index(){
        $data = Jenis_transaksi::all();
        return view('menu.Jenis_transaksi', compact('data'));
    }

    public function iJenis_transaksi(){
        return view('menu.input.iJenis_transaksi');
    }

    public function instJenis_transaksi(Request $request){
        //dd($request->all());
        Jenis_transaksi::create($request->all());
        return redirect()->route('Jenis_transaksi')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editJenis_transaksi($id){
        $data = Jenis_transaksi::find($id);
        return view('menu.edit.eJenis_transaksi', compact('data'));
    }

    public function updateJenis_transaksi(Request $request, $id ){
        $data = Jenis_transaksi::find($id);
        $data->update($request->all());
        return redirect()->route('Jenis_transaksi')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delJenis_transaksi($id){
        $data = Jenis_transaksi::find($id);
        $data->delete();
        return redirect()->route('Jenis_transaksi')->with('Success', 'Data Berhasil Dihapus');
    }
}
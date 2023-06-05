<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;

class KonsumenController extends Controller
{
    public function index(){
        $data = Konsumen::all();
        return view('menu.Konsumen', compact('data'));
    }

    public function iKonsumen(){
        return view('menu.input.iKonsumen');
    }

    public function instKonsumen(Request $request){
        //dd($request->all());
        Konsumen::create($request->all());
        return redirect()->route('Konsumen')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editKonsumen($id){
        $data = Konsumen::find($id);
        return view('menu.edit.eKonsumen', compact('data'));
    }

    public function updateKonsumen(Request $request, $id ){
        $data = Konsumen::find($id);
        $data->update($request->all());
        return redirect()->route('Konsumen')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delKonsumen($id){
        $data = Konsumen::find($id);
        $data->delete();
        return redirect()->route('Konsumen')->with('Success', 'Data Berhasil Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Distributor;
use PDF;

Class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('menu.Barang', compact('data'));
    }

    public function iBarang(){
        $distributor = Distributor::all();
        return view('menu.input.iBarang', compact('distributor'));
    }

    public function instBarang(Request $request){
        //dd($request->all());
        Barang::create($request->all());
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editBarang($id){
        $distributor = Distributor::all();
        $data = Barang::find($id);
        return view('menu.edit.eBarang', compact('data','distributor'));
    }

    public function updateBarang(Request $request, $id ){
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delBarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('Barang')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportBarang(){
        $data = Barang::all();
        $pdf = PDF::loadView('menu.pdf.barang-export', compact('data'));
        return $pdf->download('DataBarang.pdf');
    }
}
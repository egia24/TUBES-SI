<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_poin;
use App\Models\Poin;
use App\Models\Pelanggan;
use PDF;


class Transaksi_poinController extends Controller
{
    public function index(){
        $data = Transaksi_poin::all();
        return view('menu.Transaksi_poin', compact('data'));
    }

    public function iTransaksi_poin(){
        $pelanggan = Pelanggan::all();
        $poin = Poin::all();
        return view('menu.input.iTransaksi_poin', compact('poin','pelanggan'));
    }

    public function instTransaksi_poin(Request $request){
        //dd($request->all());
        Transaksi_poin::create($request->all());
        return redirect()->route('Transaksi_poin')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTransaksi_poin($id){
        $pelanggan = Pelanggan::all();
        $poin = Poin::all();
        $data = Transaksi_poin::find($id);
        return view('menu.edit.eTransaksi_poin', compact('data','poin','pelanggan'));
    }

    public function updateTransaksi_poin(Request $request, $id ){
        $data = Transaksi_poin::find($id);
        $data->update($request->all());
        return redirect()->route('Transaksi_poin')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTransaksi_poin($id){
        $data = Transaksi_poin::find($id);
        $data->delete();
        return redirect()->route('Transaksi_poin')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportTransaksi_poin(){
        $data = Transaksi_poin::all();
        $pdf = PDF::loadView('menu.pdf.transaksi_poin-export', compact('data'));
        return $pdf->download('DataTransaksi_poin.pdf');
    }
}

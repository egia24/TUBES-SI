<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_konsumen;
use App\Models\konsumen;
use App\Models\Barang;
use App\Models\Jenis_transaksi;
use PDF;

class Transaksi_konsumenController extends Controller
{
    public function index(){
        $data = Transaksi_konsumen::all();
        return view('menu.Transaksi_konsumen', compact('data'));
    }

    public function iTransaksi_konsumen(){
        $konsumen = Konsumen::all();
        $barang = Barang::all();
        $jenis_transaksi = Jenis_transaksi::all();
        return view('menu.input.iTransaksi_konsumen', compact('konsumen','barang','jenis_transaksi'));
    }

    public function instTransaksi_konsumen(Request $request){
        //dd($request->all());
        Transaksi_konsumen::create($request->all());
        return redirect()->route('Transaksi_konsumen')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTransaksi_konsumen($id){
        $konsumen = Konsumen::all();
        $barang = Barang::all();
        $jenis_transaksi = Jenis_transaksi::all();
        $data = Transaksi_konsumen::find($id);
        return view('menu.edit.eTransaksi_konsumen', compact('data','konsumen','barang','jenis_transaksi'));
    }

    public function updateTransaksi_konsumen(Request $request, $id ){
        $data = Transaksi_konsumen::find($id);
        $data->update($request->all());
        return redirect()->route('Transaksi_konsumen')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTransaksi_konsumen($id){
        $data = Transaksi_konsumen::find($id);
        $data->delete();
        return redirect()->route('Transaksi_konsumen')->with('Success', 'Data Berhasil Dihapus');
    }
    public function exportTransaksi_konsumen(){
        $data = Transaksi_konsumen::all();
        $pdf = PDF::loadView('menu.pdf.transaksi_konsumen-export', compact('data'));
        return $pdf->download('DataTransaksi_konsumen.pdf');
    }
}

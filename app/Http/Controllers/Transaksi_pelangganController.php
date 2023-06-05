<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_pelanggan;
use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\Jenis_transaksi;
use PDF;

class Transaksi_pelangganController extends Controller
{
    public function index(){
        $data = Transaksi_pelanggan::all();
        return view('menu.Transaksi_pelanggan', compact('data'));
    }

    public function iTransaksi_pelanggan(){
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        $jenis_transaksi = Jenis_transaksi::all();
        return view('menu.input.iTransaksi_pelanggan', compact('pelanggan','barang','jenis_transaksi'));
    }

    public function instTransaksi_pelanggan(Request $request){
        //dd($request->all());
        Transaksi_pelanggan::create($request->all());
        return redirect()->route('Transaksi_pelanggan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editTransaksi_pelanggan($id){
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        $jenis_transaksi = Jenis_transaksi::all();
        $data = Transaksi_pelanggan::find($id);
        return view('menu.edit.eTransaksi_pelanggan', compact('data','pelanggan','barang','jenis_transaksi'));
    }

    public function updateTransaksi_pelanggan(Request $request, $id ){
        $data = Transaksi_pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('Transaksi_pelanggan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delTransaksi_pelanggan($id){
        $data = Transaksi_pelanggan::find($id);
        $data->delete();
        return redirect()->route('Transaksi_pelanggan')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportTransaksi_pelanggan(){
        $data = Transaksi_pelanggan::all();
        $pdf = PDF::loadView('menu.pdf.transaksi_pelanggan-export', compact('data'));
        return $pdf->download('DataTransaksi_pelanggan.pdf');
    }
}

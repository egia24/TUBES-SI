<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function index(){
        $data = Distributor::all();
        return view('menu.Distributor', compact('data'));
    }

    public function iDistributor(){
        return view('menu.input.iDistributor');
    }

    public function instDistributor(Request $request){
        //dd($request->all());
        Distributor::create($request->all());
        return redirect()->route('Distributor')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editDistributor($id){
        $data = Distributor::find($id);
        return view('menu.edit.eDistributor', compact('data'));
    }

    public function updateDistributor(Request $request, $id ){
        $data = Distributor::find($id);
        $data->update($request->all());
        return redirect()->route('Distributor')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delDistributor($id){
        $data = Distributor::find($id);
        $data->delete();
        return redirect()->route('Distributor')->with('Success', 'Data Berhasil Dihapus');
    }
}
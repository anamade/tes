<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    public function index(){
     $coa = Coa::get();

     return view('coa.index',['data'=>$coa]);
    }
    public function edit ($id_coa){
        $coa = Coa::findOrFail($id_coa);
        return view('coa.edit',compact('coa'));
    }
    public function update(){
        return view('coa.edit.update');
    }
    public function tambah_perkiraan(){

        $coa = Coa::get();
        return view('coa.tambah_perkiraan',['perkiraan'=>$coa]);
    }
    public function simpan(Request $request){
        $data =[
            'perkiraan' =>$request->perkiraan,
            'deskripsi'=>$request->deskripsi,
            'link'=>$request->link,
            'group'=>$request->group,
            'group2'=>$request->group2
        ];
        Coa::create($data);
        return redirect()->route('coa');
     }

    public function dft_perkiraan(){
        return view('coa.dft_perkiraan');
    }
    public function setup_grub(){
        return view('coa.setup_grub');
    }
    
}

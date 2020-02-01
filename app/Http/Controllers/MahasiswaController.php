<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {

    	$mahasiswa = DB::table('user')->get();
    	//mengambil data dari table USER

    	return view('index',['mahasiswa'=>$mahasiswa]);
    	//mengirim data ke view index
    }

    public function tambah()
    {

    	return view('tambah');
    }

    public function info(Request $request)
    {
    	DB::table('user')->insert([
    		'id' => $request->id,
    		'nama'=> $request->nama,
    		'nim' => $request->nim,
    		'jurusan' => $request->jurusan,
    		'fakultas' => $request->fakultas
    	]);

    	return redirect('/mahasiswa');
    }

    public function edit($id)
    {
    	$mahasiswa = DB::table('user')->where('id',$id)->get();

    	return view('edit',['mahasiswa'=>$mahasiswa]);
    }

    public function update(Request $request)
    {
    	DB::table('user')->where('id',$request->id)->update([
    		'nama'=> $request->nama,
    		'nim' => $request->nim,
    		'jurusan' => $request->jurusan,
    		'fakultas' => $request->fakultas
    	]);

    	return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
    	DB::table('user')->where('id',$id)->delete();

    	return redirect('/mahasiswa');
    }
}


<?php 

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Kategori;


 class KontenController extends Controller{

 	function index(){
 		$data['list_blog'] = Konten::all();
 		return view('admin.konten.index', $data);
 	}
 	function create(){
 		$data['list_kategori'] = Kategori::all();
 		return view('admin.konten.create',$data);
 	}
 	function store(){
 		$konten = new Konten;
 		$konten->kategori = request('kategori');
 		$konten->judul = request('judul');
 		$konten->deskripsi = request('deskripsi');
 		$konten->konten = request('konten');
 		$konten->save();
 		return redirect('admin/konten');
 	}

 	function show($blog){
 		$data['blog'] = Konten::find($blog);
 		return view('admin.konten.show', $data);
 	}
 	function edit(Konten $blog){
		$data['blog'] = $blog;
		return view('admin.konten.edit',$data);
	}
 	function update(Konten $blog){
 		$konten->judul = request('judul');
 		$konten->deskripsi = request('deskripsi');
 		$konten->konten = request('konten');
 		$konten->save();
 		return redirect('admin/konten');
 	}
 	function destroy(Konten $blog){
		$blog->delete();
		return redirect('admin/konten')->with('danger', 'Data Berhasil Dihapus');
	}


 }
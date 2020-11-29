<?php 


 namespace App\Http\Controllers;

 class HomeController extends Controller{
 	
 	function showBeranda(){
 		return view('admin.beranda');
 	} 

 	function showBlog(){
 		return view('admin.konten.index');
 	}

 	function showBuat(){
 		return view('admin.konten.create');
 	} 
 	function showKategori(){
 		return view('admin.kategori');
 	} 
 }
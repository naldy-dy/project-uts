<?php 
namespace App\Http\Controllers;
use App\Models\Konten;



 class IndexController extends Controller{
 	
 	function show(){
 		$data['list_blog'] = Konten::all();
 		return view('index', $data);
 	} 
 	function showIndex(){
 		$data['list_blog'] = Konten::all();
 		return view('index', $data);
 	} 

 		function showDetail($blog){
 		$data['blog'] = Konten::find($blog);
 		return view('detail', $data);
 	}

 }
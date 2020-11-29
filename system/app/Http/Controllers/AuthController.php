<?php 


 namespace App\Http\Controllers;
use App\Models\User;
use Auth;

 class AuthController extends Controller{
 	
 	function showLogin(){
 		return view('auth.login');
 	} 

 	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil, Selamat Datang Admin');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}
 	function logOut(){
 		return view('auth.login');
 	} 

 	function register(){
 		return view('auth.register');
 	} 

 	function registerProsess(){
 		$user = new User;
 		$user->nama = request('nama');
 		$user->username = request('username');
 		$user->email = request('email');
 		$user->password = bcrypt(request('password'));
 		$user->save();
 		return redirect('login');

 	} 

 	function forgotPassword(){
 		
 	} 
 }
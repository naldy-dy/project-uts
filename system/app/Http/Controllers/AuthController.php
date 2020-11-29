<?php 


 namespace App\Http\Controllers;

 class AuthController extends Controller{
 	
 	function showLogin(){
 		return view('auth.login');
 	} 

 	function processLogin(){
 		
 	} 

 	function logOut(){
 		return view('auth.login');
 	} 

 	function register(){
 		return view('auth.register');
 	} 

 	function forgotPassword(){
 		
 	} 
 }
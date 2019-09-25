<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered;

class RegistrationController extends Controller
{
     
     public function registration(){

     	$alldatas=Registered::where('status',false)->get();
         
         return view('admin.registration.registration-list',compact('alldatas'));



     }






    
}

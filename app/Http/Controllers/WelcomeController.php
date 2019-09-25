<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
use App\Registered;
use App\User;
use App\SelectedCourse;

class WelcomeController extends Controller
{
    

     public function index(){

     $fecourses=Course::orderby('id','asc')->get();

     	return view('frontend.home.home',compact('fecourses'));
     }

      public function courses(){
    

      $fecourses=Course::orderby('id','asc')->get();

        return view('frontend.pages.courses',compact('fecourses'));

      }







     public function contact(){
     	return view('frontend.pages.contact');
     }

     public function register_course($id){


        if(Auth::check()){
 

             $details=Course::where('id',$id)->first();

            $selectedcourse= new SelectedCourse();
            $selectedcourse->uid=Auth::user()->id;
            $selectedcourse->cid=$details->id;
            $selectedcourse->save();

            $fecourses=Course::orderby('id','asc')->get();
            return view('frontend.pages.register-course',compact('details','fecourses'));


        }else{

                 $details=Course::where('id',$id)->first();
                 $fecourses=Course::orderby('id','asc')->get();
            return view('frontend.pages.register-course',compact('details','fecourses'));

        }
            

     }

     public function checkout()
     {
     	if (Auth::check()) {

     		if(Auth::user()->type=="user"){

                  return view('frontend.pages.payment');
     		}
     		
          
     	}
     	else{

     		return redirect('/login');
     	}
     	
     }


      public function payment(Request $request)
     {
     



			      $hashSecretWord = 'techtrix'; //2Checkout Secret Word
			$hashSid = 901413831; //2Checkout account number
			$hashTotal = $request->total; //Sale total to validate against
			$hashOrder = $request->order_number; //2Checkout Order Number
			$StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));
			if ($StringToHash != $_REQUEST['key']) {
			  $result = 'Fail - Hash Mismatch';
			} else {




             $registerstu=new Registered();

             $registerstu->uid=Auth::user()->id;
             $registerstu->uname=Auth::user()->name;
             $registerstu->email=Auth::user()->email;
             
             
             $find=SelectedCourse::where('uid',$registerstu->uid)->first();
             
             $registerstu->cid=$find->cid;

             
             $findtwo=Course::where('id',$registerstu->cid)->first();

             $registerstu->cname=$findtwo->name;
             $registerstu->total=$findtwo->registerfee;
             $registerstu->save();
             



              /*return redirect('/');*/
              return redirect('/')->with('success','Ragistration successfull!!');
			}
			echo $result;



     	
     }


     public function search(Request $request){

                $search=Course::where('name','like','%'.$request->search.'%')->orwhere('trainer','like','%'.$request->search.'%')->get();

                return view('frontend.pages.search',compact('search'));

     }


}

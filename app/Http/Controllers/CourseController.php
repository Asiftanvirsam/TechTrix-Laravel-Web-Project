<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){


     	$alldatas=Course::orderby('id','desc')->get();

    	return view('admin.course.course-list',compact('alldatas'));
    }


    public function add_course(){
            
            return view('admin.course.add-course');
          
    }

    public function save_course(Request $request){

    	 request()->validate([
          
          'name'=> 'required|string',







    	 ]);

    $save_course= new Course();

     $save_course->name= $request->name;
     $save_course->trainer= $request->trainer;
     $save_course->category= $request->category;
     $save_course->students= $request->students;
     $save_course->registerfee= $request->registerfee;

     $image=$request->file('thum_image');
     $imge_name=$image->getClientOriginalName();
     $image->move('./upload',$imge_name);

    



     $save_course->thum_image= $imge_name;
     $save_course->description= $request->description;
    

     $save_course->save();
     return back()->with('success','data saved successfully');

    }


    public function delete_course($id){
          
          $del_co=Course::where('id',$id)->first();
          $del_co->delete();
          return back()->with('success','Course deleted successfully');

    }
}

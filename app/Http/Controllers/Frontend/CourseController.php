<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Course;
use Auth;


class CourseController extends Controller
{
    private $user;
    private $course;


    public function __construct(User $user,Course $course) {
        $this->user = $user;
        $this->course = $course;
    }
    public function index(){
        $userId=Auth::user()->id;
        $courseOfUser = DB::table('courses')->join('course_user','courses.id','course_id')->where('user_id','=',$userId)->orderBy('courses.id', 'desc')->first();
        $id = $courseOfUser->id;
        $trainer = DB::table('users')->select('username','users.id')->join('course_user','users.id','=','course_user.user_id')->join('role_user','users.id','=','role_user.user_id')->where('role_user.role_id','=','2')->where('course_user.course_id','=',$id)->distinct()->first();

         return view('frontend.course.index',compact('courseOfUser','trainer'));
}
  public function showCourse($id){
    // $users = $this->course->find($id)->users;

    $users = DB::table('users')->select('username','users.id')->join('course_user','users.id','=','course_user.user_id')->join('role_user','users.id','=','role_user.user_id')->where('role_user.role_id','=','1')->where('course_user.course_id','=',$id)->distinct()->get();
    return view('frontend.course.show',compact('users'));
  }
}

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
        $courseOfUser = DB::table('courses')->join('course_user','courses.id','course_id')->where('user_id','=',$userId)->get();
        // $courseId = $courseOfUser[0]->course_id;

        // $data = DB::table('course_user')->where('coure_id','=',$courseId)->join('user')->where('user.id','user_id')->get();

  //       $courseOfUserDetail = $this->course->find($courseOfUser[0]->course_id);
  //       $superOfCourse = $courseOfUserDetail->users()->pluck('username');
  // //
  //
  //
//Danh sách supervisor
        // $supervisors = DB::table('users')->join('role_user','users.id','=','user_id')->pluck('username');
        //     dd($superOfCourse);


  //       $data = array();
  //       $result = array();
  //       foreach ($supervisors as $value) {
  //          $data = $value;
  //      }

  //      foreach ($superOfCourse as $key) {
  //         if($superOfCourse->contains($data)){
  //             $result = $data;
  //         }
  // }
  // dd($result);





        // $nameSupperOfCourse = DB::table('courses')->join('course_user','courses.id','course_id')->join('users')
        // ->where('users.id','=','user_id')->get();
        // dd($nameSupperOfCourse );
        // $supperOfCourse =
        // // dd($courseOfUser);
         return view('frontend.course.index',compact('courseOfUser'));
}
  public function showCourse($id){
    // $users = $this->course->find($id)->users;

    $users = DB::table('users')->join('course_user','users.id','=','course_user.user_id')->join('role_user','users.id','=','role_user.user_id')->where('role_user.role_id','=','1')->distinct()->pluck('username');
    dd($users);
    return view('frontend.course.show');
  }
}

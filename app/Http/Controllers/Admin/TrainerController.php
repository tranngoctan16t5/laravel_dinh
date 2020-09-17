<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Models\Course;


class TrainerController extends Controller
{

    private $user;
    private $course;

    public function __construct(User $user,Course $course) {
        $this->user = $user;
        $this->course = $course;
    }

    public function index()
    {
        $courses = $this->course->all();

        $course_user = DB::table('course_user')->get();
        $trainers = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=','1')->get();
         // $courseOfuser =$this->user->find($id)->courses()->pluck('name');
        return view('admin.trainer.index',compact('trainers','courses','course_user'));
    }

    public function show($id)
    {
        $courses = $this->course->all();
        $courseOfuser =$this->user->find($id)->courses()->pluck('name');

        $user = $this->user->findOrFail($id);

        return view('admin.trainer.show',compact('user','courses','courseOfuser'));
    }

    public function choose(Request $request){
        $userId = $request->user_id;
        try{

          DB::beginTransaction();
          DB::table('course_user')->where('user_id',$userId)->update([
            'status' => 0,
        ]);
          DB::table('course_user')->insert([
            'user_id' => $userId,
            'course_id' => $request->course_id,
            'status' => 1,

        ]);
          return route('trainer.show',$request->user_id);
      }catch (Exception $e) {
        DB::rollBack();
    }


}
}


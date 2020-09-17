<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use DB;
use Carbon\Carbon;


class SupervisorController extends Controller
{
    private $user;
    private $course;

    public function __construct(User $user,Course $course) {
        $this->user = $user;
        $this->course = $course;
    }

    public function index(){
        $courses = $this->course->all();

        $course_user = DB::table('course_user')->get();
        $supervisors = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=','2')->get();
         // $courseOfuser =$this->user->find($id)->courses()->pluck('name');
        return view('admin.supervisor.index',compact('supervisors','courses','course_user'));
    }

    public function show($id){
        $courses = $this->course->all();
        $courseOfSuper =$this->user->find($id)->courses()->where('status','=',1)->pluck('name');
        // $courseActiveSuper = $this->user->find($id)->courses()->pluck('status');


        $user = $this->user->findOrFail($id);

        return view('admin.supervisor.show',compact('user','courses','courseOfSuper','courseActiveSuper'));
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
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
            DB::commit();
            return redirect()->route('supervisor.show',$userId)->with('success', 'Course created');
        }catch (Exception $e) {
            DB::rollBack();
        }


    }


}

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

        $course_user = DB::table('users')->get();
        $trainers = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=','1')->get();
        return view('admin.trainer.index',compact('trainers','courses','course_user'));
    }
}

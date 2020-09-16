<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;


class TrainerController extends Controller
{

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index()
    {

        $trainer = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=','1')->get();
        dd($trainer);
        return view('admin.trainer.index');
    }
}

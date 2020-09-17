<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AdminProfileRequest;

class AdminController extends Controller
{
    private $user;

    public function __construct(User $user) {
        $this->user = $user;

    }
    public function index(){
        return view('admin.index');
    }

    public function permissionDenied(){
        return view('errors.nopermission');
    }
    public function logout(){
        return redirect()->route('home');
    }
    public function profile(){
        return view('admin.profile');
    }
    public function edit($id){
        $user = $this->user->findOrFail($id);
        return view('admin.edit',compact('user'));
    }
    public function store(AdminProfileRequest $request,$id){
        echo "string";

    }
}

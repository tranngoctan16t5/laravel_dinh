<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Auth;
use DB;
use Hash;

class ProfileController extends Controller
{
    private $user;
    private $course;

    public function __construct(User $user,Course $course) {
        $this->user = $user;
        $this->course = $course;
    }
    public function index(){
        $userId = Auth::user()->id;
        $user = $this->user->find($userId);
        $courseOfUser = $user->courses()->where('status','=',1)->orderBy('id','desc')->first();
        return view('frontend.profile.index',compact('user','courseOfUser'));
    }

    public function editAvatarUser(Request $request,$id){
        try{
            DB::beginTransaction();
            $data = array();
            $image = $request->file('avatar');
            $old_avatar = $request->old_avatar;

            if($image){
                unlink($old_avatar);
                $data['avatar'] =  uploadImage($image);
            }
            $user = $this->user->where('id',$id)->update($data);
            DB::commit();
            return redirect()->route('frontend_profile.index');

        }catch (Exception $e){
            return redirect()->back();
        }
    }

    public function formEditUser($id){
        $user = $this->user->find($id);
        return view('frontend.profile.edit',compact('user'));
    }

    public function updateUser(Request $request,$id){
         try {
        DB::beginTransaction();
        $data = array();
        $data['username'] = $request->username;
        $data['phone'] = $request->phone;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['university'] = $request->university;
        $data['birthday'] = $request->birthday;
        $data['password'] = Hash::make($request->password);
        $image = $request->file('avatar');
        $old_avatar = $request->old_avatar;
        if ($image) {
            unlink($old_avatar);
            $data['avatar'] =  uploadImage($image);

        }
        $this->user->where('id',$id)->update($data);
        DB::commit();

        return redirect()->route('frontend_profile.index');
      } catch (Exception $e) {
        DB::rollBack();
      }
    }






}

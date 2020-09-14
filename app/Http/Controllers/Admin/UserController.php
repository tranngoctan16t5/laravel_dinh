<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Hash;
use DB;
use Carbon\Carbon;

class UserController extends Controller
{
    private $user;
    private $role;

    public function __construct(User $user,Role $role) {
        $this->user = $user;
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate(5);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

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
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_patch = 'public/media/';
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
            $data['avatar'] =  $image_url;
        }
        $user = $this->user->create($data);
        $user->roles()->attach($request->role);
        DB::commit();

        return redirect()->route('users.index')->with('success', 'User created');
      } catch (Exception $e) {
        DB::rollBack();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->findOrFail($id);
        $roleOfUser = DB::table('role_user')->where('user_id',$id)->pluck('role_id');

        return view('admin.user.show', compact('user', 'roleOfUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);
        $roles = $this->role->all();
        $roleOfUser = DB::table('role_user')->where('user_id',$id)->pluck('role_id');

        return view('admin.user.edit', compact('user', 'roles', 'roleOfUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_patch = 'public/media/';
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
            $data['avatar'] =  $image_url;
        }
        $this->user->where('id',$id)->update($data);
        $user = $this->user->find($id);
        $user->roles()->sync($request->role);
        DB::commit();

        return redirect()->route('users.index')->with('success', 'User edited');
      } catch (Exception $e) {
        DB::rollBack();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->findOrFail($id);
            $user->delete($id);
            $user->roles()->detach();
            DB::commit();

            return redirect()->route('users.index')->with('success', 'User deleted');
        } catch (Exception $e) {
             DB::rollBack();
        }
    }
}

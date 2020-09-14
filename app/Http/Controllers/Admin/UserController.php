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
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // dd($request->id);
        $image = $request->avatar;
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $upload_patch = 'public/media/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
        }
        $id = $this->user->create([
            'username' => $request->username,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'email' => $request->email,
            'address' => $request->address,
            'university' => $request->university,
            'birthday' => $request->birthday,
            'password' => Hash::make($request->password),
            'avatar' => $image_url,
        ])->id;
        DB::table('role_user')->insert([
            'user_id' => $id,
            'role_id' => $request->role_id,
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
         ]);


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roleSelected = DB::table('role_user')->where('user_id',$id)->pluck('role_id');
        $roles = $this->role->all();
        $user = $this->user->find($id);
        return view('admin.user.edit',compact('user','roles','roleSelected'));

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
        // dd($request->avatar);
        $userUpdate = $this->user->findOrFail($id);
        $image = $request->avatar;
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $upload_patch = 'public/media/';
            $image_full_name = $image_name . '.' . $ext;
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);

             $userUpdate->update([
            'username' => $request->username,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'email' => $request->email,
            'address' => $request->address,
            'university' => $request->university,
            'birthday' => $request->birthday,
            'password' => Hash::make($request->password),
            'avatar' => $image_url,
        ]);
        DB::table('role_user')->where('user_id',$id)->update([
            'role_id' => $request->role_id,
         ]);


        return redirect()->route('users.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user = $this->user->findOrFail($user);
        $user->delete();
        return redirect()->back();

    }
}

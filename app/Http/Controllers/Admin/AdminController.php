<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AdminProfileRequest;
use DB;
use Hash;
use App\Models\Subject;
use App\Models\Course;
class AdminController extends Controller
{
    private $user;
    private $subject;
    private $course;
    public function __construct(User $user,Subject $subject,Course $course) {
        $this->user = $user;
        $this->subject = $subject;
        $this->course = $course;
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
            DB::commit();
            return redirect()->route('users.index');
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
    public function formSubmitCourseOfUser(){
        $trainees = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=',1)->get();
        $subjects = $this->subject->all();
        $supervisors = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=',2)->get();
        $courses = $this->course->all();
        return view('admin.select_info',compact('trainees','subjects','supervisors','courses'));
    }
    public function chooseCourseSubjectForUser(Request $request){
        try {
            DB::beginTransaction();
            $traineeId = $request->trainee;
            $trainerId = $request->supervisor;
            $courseId  = $request->course;
            $subjectId  = $request->subject;
            foreach ($traineeId as $id) {
                $trainee = $this->user->find($id);
                foreach ($subjectId as $subId) {
                    if (!$trainee->subjects->contains($subId)) {
                        $trainee->subjects()->attach($subId,['status' => 1]);
                    }
                }
                if (!$trainee->courses->contains($courseId)) {
                    $trainee->courses()->attach($courseId,['status' => 1]);
                }
            }
            $trainer = $this->user->find($trainerId);
            foreach ($subjectId as $subId) {
                if (!$trainer->subjects->contains($subId)) {
                    $trainer->subjects()->attach($subId,['status' => 0]);
                }
            }
            $course = $this->course->find($courseId);
            foreach ($subjectId as $subId) {
                if (!$course->subjects->contains($subId)) {
                    $course->subjects()->attach($subId);
                }
            }
            DB::commit();
            return redirect()->route('chooseforuser')->with('success','Created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    public function reportForm(){
        $trainees = DB::table('users')->join('role_user','users.id','=','user_id')->where('role_user.role_id','=',1)->get();
        return view('admin.report',compact('trainees'));
    }

    public function reportShow($id){
        $tasks = $this->user->find($id)->tasks;
        return view('admin.showreport',compact('tasks'));
    }
}

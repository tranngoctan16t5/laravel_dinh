<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use DB;
use Carbon\Carbon;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseEditRequest;
use Illuminate\Support\Facades\Config;



class CourseController extends Controller
{
    private $course;

    public function __construct(Course $course) {
        $this->course = $course;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->course->paginate(Config::get('app.paginate'));

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        try {
        DB::beginTransaction();
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['duration'] = $request->duration;
        $data['start_day'] = $request->start_day;
        $data['end_day'] = $request->end_day;
        $image = $request->file('image');
        if ($image) {
            $data['image'] =  uploadImage($image);
        }
        $course = $this->course->create($data);
        DB::commit();

        return redirect()->route('courses.index')->with('success','Add new course success');
      } catch (Exception $e) {
        DB::rollBack();

        return redirect()->back()->with('error','Add new course error');
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
        $course = $this->course->findOrFail($id);
        return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseEditRequest $request, $id)
    {
        try {
        DB::beginTransaction();
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['duration'] = $request->duration;
        $data['start_day'] = $request->start_day;
        $data['end_day'] = $request->end_day;
        $image = $request->file('image');
        $old_avatar = $request->old_avatar;
        if ($image) {
            unlink($old_avatar);
            $data['image'] =  uploadImage($image);
        }
        $course = $this->course->where('id',$id)->update($data);
        DB::commit();

        return redirect()->route('courses.index')->with('success',trans('message.course.editsuccess'));
      } catch (Exception $e) {
        DB::rollBack();

        return redirect()->back()->with('error','Edit course error');
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
            $course = $this->course->findOrFail($id);
            $course->delete($id);
            DB::commit();

            return redirect()->route('courses.index')->with('success', 'Course deleted');
        } catch (Exception $e) {
             DB::rollBack();
        }
    }
}

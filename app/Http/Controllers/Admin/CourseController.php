<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use DB;
use Carbon\Carbon;
use App\Http\Requests\CourseRequest;



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
        $courses = $this->course->paginate(5);

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
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_patch = 'public/media/';
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
            $data['image'] =  $image_url;
        }
        $course = $this->course->create($data);
        DB::commit();

        return redirect()->route('courses.index')->with('success', 'Courses created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

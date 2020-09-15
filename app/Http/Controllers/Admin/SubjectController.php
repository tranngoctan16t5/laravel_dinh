<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use App\Http\Requests\SubjectEditRequest;
use App\Models\Subject;
use Illuminate\Support\Facades\Config;
use Session;
use DB;

class SubjectController extends Controller
{
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = $this->subject->paginate(Config::get('app.paginate'));
        return view('admin.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        $image = $request->image;
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_patch = 'public/media/';
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
        }
        $this->subject->create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image_url,
        ]);
        Session::put('message','Create Subject Successfullly !!');
        return redirect()->route('subject.index');
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
        $subject = $this->subject->findOrFail($id);
        return view('admin.subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectEditRequest $request, $id)
    {
        try {
        DB::beginTransaction();
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $image = $request->file('image');
        $old_image = $request->old_image;
        if ($image) {
            unlink($old_image);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_patch = 'public/media/';
            $image_url = $upload_patch . $image_full_name;
            $success = $image->move($upload_patch, $image_full_name);
            $data['image'] =  $image_url;
        }
        $this->subject->findOrFail($id)->update($data);
        DB::commit();
        Session::put('message','Updated successfully!!');

        return redirect()->route('subject.index');
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
        $subject =$this->subject->findOrFail($id);
        $subject->delete();
        return redirect()->back();
    }
}

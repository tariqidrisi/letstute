<?php

namespace App\Http\Controllers;

use Redirect;
use App\Course;
use App\Category;
use App\Division;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::get();
        // dd($data);   
        return view("admin.index_course", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::get();
        $data['classes'] = Division::get();
        $msg['msg'] = "";
        $msg['msg_content'] = "";

        return view("admin.course", compact('data', 'msg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->name = request('course');
        $course->price = request('price');
        $course->description = request('description');
        $course->duration = request('duration');
        $course->likes = request('likes');
        $course->category_id = request('category_id');
        $course->class_id = request('class_id');
        $course->save();
        
        if($course) {
            $msg['msg'] = "added";
            $msg['msg_content'] = "Class Added Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::Where('id', $id)->first();
        $categories = Category::get();
        $classes = Division::get();

        return view('admin.edit_course', compact('data', 'categories', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->get('course');
        $course->price = $request->get('price');
        $course->description = $request->get('description');
        $course->duration = $request->get('duration');
        $course->likes = $request->get('likes');
        $course->category_id = $request->get('category_id');
        $course->class_id = $request->get('class_id');
        $course->save();

        if($course) {
            $msg['msg'] = "updated";
            $msg['msg_content'] = "Course Updated Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        if($course) {
            $msg['msg'] = "delete";
            $msg['msg_content'] = "Class Deleted Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);
    }

    public function allCourses()
    {
        // dd("sdfsdfsdf");
        return view('courses-grid-sidebar');
    }

    public function filterCategory($category_id){
        $courses = Course::where('category_id', $category_id)->get();
        // dd($categories);
        return view('courses-grid-sidebar', compact('courses'));
    }

    public function filterClass($class_id){
        $courses = Course::where('class_id', $class_id)->get();
        // dd($courses);
        return view('courses-grid-sidebar', compact('courses'));
    }
}

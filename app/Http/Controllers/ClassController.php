<?php

namespace App\Http\Controllers;

use Redirect;
use App\Division;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Division::get();
        // dd($data);   
        return view("admin.index_class", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $msg['msg'] = "";
        $msg['msg_content'] = "";
        return view("admin.class", compact('msg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $class = new Division;
        $class->name = request('class');
        $class->save();
        
        if($class) {
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
     * @param  \App\Division  $class
     * @return \Illuminate\Http\Response
     */
    public function show(Division $class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Division  $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $class)
    {
        $data = Division::where('id', $class->id)->first();

        $msg['msg'] = "";
        $msg['msg_content'] = "";
        
        return view("admin.edit_class", compact('data', 'msg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Division  $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $class = Division::find($id);
        $class->name = $request->get('class');
        $class->save();

        if($class) {
            $msg['msg'] = "updated";
            $msg['msg_content'] = "Class Updated Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Division  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $class = Division::find($id);
        $class->delete();

        if($class) {
            $msg['msg'] = "delete";
            $msg['msg_content'] = "Class Deleted Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);

    }
}

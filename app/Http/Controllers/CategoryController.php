<?php

namespace App\Http\Controllers;

use Redirect;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::get();
        // dd($data);   
        return view("admin.index_category", compact("data"));
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
        return view("admin.category", compact('msg'));
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
        $category = new Category;
        $category->name = request('category');
        $category->save();
        // dd($category);

        if($category) {
            $msg['msg'] = "added";
            $msg['msg_content'] = "Category Added Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = Category::where('id', $category->id)->first();

        $msg['msg'] = "";
        $msg['msg_content'] = "";
        
        return view("admin.edit_category", compact('data', 'msg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $category = Category::find($id);
        $category->name = $request->get('category');
        $category->save();

        if($category) {
            $msg['msg'] = "updated";
            $msg['msg_content'] = "Category Updated Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $category = Category::find($id);
        $category->delete();

        if($category) {
            $msg['msg'] = "delete";
            $msg['msg_content'] = "Category Deleted Successfully.";
        } else {
            $msg['msg'] = "error";
            $msg['msg_content'] = "Something went wrong. Please contact your administrator";
        }

        return Redirect::back()->with($msg);

    }
}

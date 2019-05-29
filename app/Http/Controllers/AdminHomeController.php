<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
    	
    	return view("admin.index");
    }

    public function courses() {

    	return view("admin.courses");
    }

    public function addListing() {

    	return view("admin.addListing");
    }

    public function messages() {

    	return view("admin.messages");
    }

    public function reviews() {

    	return view("admin.reviews");
    }

    public function bookmarks() {

    	return view("admin.bookmarks");
    }

    public function userProfile() {

    	return view("admin.user-profile");
    }

    public function teacherProfile() {

    	return view("admin.teacher-profile");
    }

    public function charts() {

    	return view("admin.charts");
    }

    public function tables() {

    	return view("admin.tables");
    }
}

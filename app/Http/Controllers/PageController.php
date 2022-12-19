<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function view_home(){
        return view('page.home');
    }
    public function view_scan(){
        return view('page.scan');
    }
    public function view_profile(){
        return view('page.profile');
    }
    public function view_forum(){
        return view('page.forum');
    }
    public function view_forum_detail(){
        return view('page.forum-detail');
    }
}

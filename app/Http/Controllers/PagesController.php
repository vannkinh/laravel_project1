<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //passing value to a blade template
        $title = 'Hi vann welcome XD';
        // return view('Page.index', compact('title'));//1
        // 1 & 2 exactly the same
        return view('Page.index')->with('title', $title);//2
    } 
    public function about(){
        $title = 'Hi Vann How are you?';
        return view('Page.about')->with('title', $title);
    } 
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web Design', 'Programming', 'SEO']
        );

        return view('Page.services')->with($data);
    } 
    public function welcome(){
        return view('welcome');
    }
    public function posts(){
        return view('posts.index');
    }
}

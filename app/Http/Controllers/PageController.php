<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about() {
        return view('pages.about');
    }
    public function choseUs() {
        return view('pages.choos_us');
    } 
    public function services() {
        return view('pages.contact_us');
    } 
    public function ourBlogs() {
        return view('pages.our_blog');
    }
    public function contactUS() {
        return view('pages.contact_us');
    }
        
}

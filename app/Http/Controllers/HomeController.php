<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $courses = Courses::with(['gallery'])->get();
        return view('pages.home', ['courses' => $courses]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;
class DetailsController extends Controller
{
    public function index(Request $request, $id)
    {
        $details = Courses::with(['gallery'])->find($id);
        return view('pages.details', ['details' => $details]);
    }
}

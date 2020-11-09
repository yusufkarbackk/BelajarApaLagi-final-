<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gallery;
use Carbon\Carbon;
class DetailsController extends Controller
{
    public function index(Request $request, $id)
    {
        $details = Courses::with(['gallery'])->find($id);
        $mydate = getdate(date("U"));
        return view('pages.details', ['details' => $details, 'mydate' => $mydate]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Gallery;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::all();

        return view('pages.admin.courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'duration' => 'required',
            'price' => 'required',
            'location' => 'required',
            'about' => 'required',
            'date' => 'required',
            'mentor' => 'required',
        ]);

            //$course = new Courses;

            //$course -> title = $request->title;
            //$course -> duration = $request->duration;
            //$course -> price = $request->price;
            //$course -> location = $request->location;
            //$course -> about = $request->about;
            //$course -> date = $request->date;
            //$course -> mentor = $request->mentor;
            //$course->save();
            $course = new Courses;

            $course::create($request->all());


        return redirect('/admin/courses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::find($id);
        return view('pages.admin.courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Courses::find($id);

        $course->title = $request->title;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->location = $request->location;
        $course->about = $request->about;
        $course->date = $request->date;
        $course->mentor = $request->mentor;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'duration' => 'required',
            'price' => 'required',
            'location' => 'required',
            'about' => 'required',
            'date' => 'required',
            'mentor' => 'required',
        ]);

        $course->save();
        return redirect('/admin/courses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Courses::find($id);

        $course->delete();
        return redirect('/admin/courses');

    }
}

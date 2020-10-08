<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Courses;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::with(['course'])->get();
        return view('pages.admin.galleries.index', ['galleries' => $galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::all();
        return view('pages.admin.galleries.create', ['courses' => $courses]);

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
            'image' => 'required',
            'mentor' => 'required',
        ]);

        $gallery = $request->all();

        $gallery['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );
        $gallery['mentor'] = $request->file('mentor')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($gallery);


        return redirect('/admin/galleries');
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
        $gallery = Gallery::find($id);
        return view('pages.admin.galleries.edit', ['galleries' => $gallery]);
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
        $gallery = Gallery::find($id);

        $gallery->image = $request->image;
        $gallery->mentor = $request->mentor;

        $validatedData = $request->validate([
            'image' => 'required',
            'mentor' => 'required',
        ]);

        $gallery->save();
        return redirect('/admin/galleries');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        $gallery->delete();
        return redirect('/admin/galleries');
    }
}
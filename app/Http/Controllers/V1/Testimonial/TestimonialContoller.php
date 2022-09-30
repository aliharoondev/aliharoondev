<?php

namespace App\Http\Controllers\V1\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Categories\StoreTestimonialRequest;
use App\Http\Requests\V1\Categories\UpdateTestimonialRequest;
use App\Models\Testimonial;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class TestimonialContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonials = [];

        if($request->ajax() ==true) {
            $testimonials = Testimonial::query();
            return DataTables::of($testimonials)
                ->addColumn('action', function ($testimonial) {
                    $url = route('testimonial.edit',$testimonial->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.testimonials.index',['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.testimonials.create',compact('sections')); 
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'title' => 'required',
        //     'section_id' => 'required',
        // ]);
      $path= '';
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->section_id = $request->section;
        $testimonial->testimonial_text = $request->testimonial_text;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->store('testimonials','public');
        }  
        $testimonial->image = $path;   
        $testimonial->save();
        return  redirect()->route('testimonial.index')->with('success','Testimonial Added Successfully');
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
    public function edit(Testimonial $testimonial)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.testimonials.edit',compact('sections','testimonial'));
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
        $testimonial = Testimonial::find($id);
        $path= '';
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->section_id = $request->section;
        $testimonial->testimonial_text = $request->testimonial_text;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->store('testimonials','public');
        }  
        $testimonial->image = $path;   
        $testimonial->save();
        return  redirect()->route('testimonial.index')->with('success','Testimonial Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

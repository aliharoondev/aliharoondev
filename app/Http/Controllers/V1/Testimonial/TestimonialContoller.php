<?php

namespace App\Http\Controllers\V1\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Testimonial\StoreTestimonialRequest;
use App\Http\Requests\V1\Testimonial\UpdateTestimonialRequest;
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
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deleteTestimonial' data-id='$testimonial->id'><i class='glyphicon glyphicon-delete'>Delete</a>
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
    public function store(StoreTestimonialRequest $request)
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

    public function show($id): void
    {
        //#Note Need to implement show method
    }

    public function edit(Testimonial $testimonial)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.testimonials.edit',compact('sections','testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $testimonial = Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->title = $request->title;
            $testimonial->section_id = $request->section;
            $testimonial->testimonial_text = $request->testimonial_text;
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('testimonials','public');
                $testimonial->image = $path;
            }
            $testimonial->save();

            return  redirect()->route('testimonial.index')->with('success','Testimonial Update Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Testimonial $testimonial): \Illuminate\Http\RedirectResponse
    {
        try {
            Storage::disk('public')->delete($testimonial->image);
            $testimonial->delete();
            return  redirect()->route('testimonial.index')->with('success','Testimonial Deleted Successfully');
        } catch (\Exception $e) {
            logger(["Error in deleting testimonial, id = $testimonial->id" => $e->getMessage()]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

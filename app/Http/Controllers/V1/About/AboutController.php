<?php

namespace App\Http\Controllers\V1\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\about\StoreAboutRequest;
use App\Http\Requests\V1\about\UpdateAboutRequest;
use App\Models\About;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $about = [];

        if($request->ajax() ==true) {
            $about = About::query();
            return DataTables::of($about)
                ->addColumn('action', function ($about) {
                    $url = route('about.edit',$about->id);
                    $delete_url = route('about.destroy',$about->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='$delete_url' class='btn btn-xs btn-danger ' ><i class='glyphicon glyphicon-delete'></i> Delete</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.abouts.index',['about'=>$about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.abouts.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
        // dd($request->all());
        $path= '';
        $about = new About();
        $about->title = $request->title;
        $about->section_id = $request->section;
        $about->short_discription = $request->short_discription;
        $about->birth_date = $request->birth_date;
        $about->website_url = $request->website_url;
        $about->degree = $request->degree;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->freelance = $request->freelance;
        $about->detail = $request->detail;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->store('about','public');
        }  
        $about->image = $path;   
        $about->save();
        return  redirect()->route('about.index')->with('success','About Added Successfully');
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
    public function edit(About $about)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.abouts.edit',compact('sections','about'));
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
        $about = About::find($id);
        $path= '';
        $about->title = $request->title;
        $about->section_id = $request->section;
        $about->short_discription = $request->short_discription;
        $about->birth_date = $request->birth_date;
        $about->website_url = $request->website_url;
        $about->degree = $request->degree;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->freelance = $request->freelance;
        $about->detail = $request->detail;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $request->file('image')->store('about','public');
        }  
        $about->image = $path;   
        $about->save();
        return  redirect()->route('about.index')->with('success','About Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return  redirect()->route('about.index')->with('success','About Deleted Successfully');
    }
}

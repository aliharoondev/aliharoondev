<?php

namespace App\Http\Controllers\V1\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Categories\StoreSectionRequest;
use App\Http\Requests\V1\Categories\UpdateSectionRequest;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sections = [];

        if($request->ajax() ==true) {
            $sections = Section::query();
            return DataTables::of($sections)
                ->addColumn('action', function ($section) {
                    $url = route('sections.edit',$section->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.sections.index',['sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.content.sections.create');
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
        //     'title' => 'required',
        // ]);
        $section = new Section();
        $section->title = $request->title;
        $section->detail = $request->detail; 
        $section->slug = Str::lower($request->input('slug'), "-");
        $section->status = $request->status;  
        $section->save();
        return  redirect()->route('sections.index')->with('success','Section Added Successfully');
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
    public function edit(Section $section)
    {
        return view('backend.content.sections.edit',compact('section',));
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
        $section = Section::find($id);
        $section->title = $request->title;
        $section->detail = $request->detail;
        $section->slug = Str::lower($request->input('slug'), "-");
        $section->status = $request->status;  
        $section->save();
        return  redirect()->route('sections.index')->with('success','Section Update Successfully');
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

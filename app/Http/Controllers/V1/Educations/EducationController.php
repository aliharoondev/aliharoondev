<?php

namespace App\Http\Controllers\V1\Educations;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Categories\StoreEducationRequest;
use App\Http\Requests\V1\Categories\UpdateEducationRequest;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $educations = [];

        if($request->ajax() ==true) {
            $educations = Education::query();
            return DataTables::of($educations)
                ->addColumn('action', function ($education) {
                    $url = route('educations.edit',$education->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.educations.index',['educations'=>$educations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.educations.create',compact('sections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $education = new Education();
        $education->title = $request->title;
        $education->section_id = $request->section;
        $education->degree = $request->degree;
        $education->session = $request->session;
        $education->institude = $request->institude;
        $education->detail = $request->detail;
        $education->status = $request->status;
        $education->save();
        return  redirect()->route('educations.index')->with('success','Education Added Successfully');
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
        //
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
        //
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

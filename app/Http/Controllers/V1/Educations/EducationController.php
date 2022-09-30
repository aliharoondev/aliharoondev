<?php

namespace App\Http\Controllers\V1\Educations;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Education\StoreEducationRequest;
use App\Http\Requests\V1\Education\UpdateEducationRequest;
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
                    $url = route('education.edit',$education->id);
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
    public function store(StoreEducationRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required',
        //     'section_id' => 'required',
        //     'degree' => 'required',
        //     'session' => 'required',
        //     'institude' => 'required',
        // ]);
        $education = new Education();
        $education->title = $request->title;
        $education->section_id = $request->section;
        $education->degree = $request->degree;
        $education->session = $request->session;
        $education->institude = $request->institude;
        $education->detail = $request->detail;
        $education->status = $request->status;
        $education->save();
        return  redirect()->route('education.index')->with('success','Education Added Successfully');
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
    public function edit(Education $education)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.educations.edit',compact('sections','education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationRequest $request, $id)
    {
        $education = Education::find($id);
        $education->title = $request->title;
        $education->section_id = $request->section;
        $education->degree = $request->degree;
        $education->session = $request->session;
        $education->institude = $request->institude;
        $education->detail = $request->detail;
        $education->status = $request->status;
        $education->save();
        return  redirect()->route('education.index')->with('success','Education Update Successfully');
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

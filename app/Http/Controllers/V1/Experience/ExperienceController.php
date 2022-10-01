<?php

namespace App\Http\Controllers\V1\Experience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Experience\StoreExperienceRequest;
use App\Http\Requests\V1\Experience\UpdateExperienceRequest;
use App\Models\Experience;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $experiences = [];

        if($request->ajax() ==true) {
            $experiences = Experience::query();
            return DataTables::of($experiences)
                ->addColumn('action', function ($experience) {
                    $url = route('experience.edit',$experience->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.experience.index',['experiences'=>$experiences]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.experience.create',compact('sections'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperienceRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required',
        //     'section_id' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'company_name' => 'required',
        //     'company_address' => 'required',
        //     'work_type' => 'required',
        //     'job_type' => 'required',
        // ]);
        $experience = new Experience();
        $experience->title = $request->title;
        $experience->section_id = $request->section;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->company_name = $request->company_name;
        $experience->company_address = $request->company_address;
        $experience->work_type = $request->work_type;
        $experience->job_type = $request->job_type;
        $experience->detail = $request->detail;
        $experience->save();

        return  redirect()->route('experience.index')->with('success','Experience Added Successfully');

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
    public function edit(Experience $experience)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.experience.edit',compact('sections','experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperienceRequest $request, $id)
    {
        $experience = Experience::find($id);
        $experience->title = $request->title;
        $experience->section_id = $request->section;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->company_name = $request->company_name;
        $experience->company_address = $request->company_address;
        $experience->work_type = $request->work_type;
        $experience->job_type = $request->job_type;
        $experience->detail = $request->detail;
        $experience->save();

        return  redirect()->route('experience.index')->with('success','Experience Update Successfully');
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

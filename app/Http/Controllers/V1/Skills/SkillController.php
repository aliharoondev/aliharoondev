<?php

namespace App\Http\Controllers\V1\Skills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Skill\StoreSkillRequest;
use App\Http\Requests\V1\Skill\UpdateSkillRequest;
use App\Models\Skill;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $skills = [];

        if($request->ajax() ==true) {
            $skills = Skill::query();
            return DataTables::of($skills)
                ->addColumn('action', function ($skill) {
                    $url = route('skills.edit',$skill->id);
                    return "
                            <a href='$url' class='btn btn-xs btn-primary'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                            <a href='javascript:void(0);' class='btn btn-xs btn-danger mb-0 deleteSkill' data-id='$skill->id'><i class='glyphicon glyphicon-delete'>Delete</a>
                            ";
                })
                ->make(true);
        }

        return view('backend.content.skills.index',['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.skills.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required',
        //     'section_id' => 'required',
        // ]);
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->section_id = $request->section;
        $skill->percentage = $request->percentage;
        $skill->save();
        return  redirect()->route('skills.index')->with('success','Skill Added Successfully');
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
    public function edit(Skill $skill)
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.skills.edit',compact('sections','skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, $id)
    {
        $skill = Skill::find($id);
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->section_id = $request->section;
        $skill->percentage = $request->percentage;
        $skill->save();
        return  redirect()->route('skills.index')->with('success','Skill Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return  redirect()->route('skills.index')->with('success','Skill Deleted Successfully');
    }
}

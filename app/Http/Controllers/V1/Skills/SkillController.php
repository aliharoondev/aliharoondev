<?php

namespace App\Http\Controllers\V1\Skills;

use App\Http\Controllers\Controller;
use App\Http\Services\SkillService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\V1\Skill\StoreSkillRequest;
use App\Http\Requests\V1\Skill\UpdateSkillRequest;
use App\Models\Skill;
use App\Models\Section;
use Yajra\DataTables\Facades\DataTables;
class SkillController extends Controller
{
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
     * @return View
     */
    public function create(): View
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.skills.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreSkillRequest $request): RedirectResponse
    {
        try {
            $skillService = new SkillService();
            $skillService->store($request->all());
            return  redirect()->route('skills.index')->with('success','Skill Added Successfully');
        }
        catch (\Exception $exception){
            return  redirect()->route('skills.index')->with('error','Error Occurred while Adding Skill');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Skill  $skill
     * @return View
     */
    public function edit(Skill $skill): View
    {
        $sections = Section::select('id', 'title')->get();
        return view('backend.content.skills.edit',compact('sections','skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSkillRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(UpdateSkillRequest $request, int $id): RedirectResponse
    {
        try {
            $skillService = new SkillService();
            $skillService->update($id, $request->all());
            return  redirect()->route('skills.index')->with('success','Skill Added Successfully');
        }
        catch (\Exception $exception){
            return  redirect()->route('skills.index')->with('error','Error Occurred while Updating Skill');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Skill $skill
     * @return RedirectResponse
     */
    public function destroy(Skill $skill): RedirectResponse
    {
        try {
            $skillService = new SkillService();
            $skillService->delete($skill);
            return  redirect()->route('skills.index')->with('success','Skill Deleted Successfully');
        }
        catch (\Exception $exception){
            return  redirect()->route('skills.index')->with('error','Error Occurred while Deleting Skill');
        }
    }
}

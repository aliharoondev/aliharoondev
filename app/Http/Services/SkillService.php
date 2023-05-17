<?php

namespace App\Http\Services;

use App\Models\Skill;

class SkillService
{
    public function store($data) : bool
    {
        $skill = new Skill();
        $skill->title = $data['title'];
        $skill->section_id = $data['section'];
        $skill->percentage = $data['percentage'];
        $skill->save();
        return true;
    }

    public function update($id, $data) : bool
    {
        $skill = Skill::find($id);
        $skill->title = $data['title'];
        $skill->section_id = $data['section'];
        $skill->percentage = $data['percentage'];
        $skill->save();
        return true;
    }

    public function delete($skill) : bool
    {
        $skill->delete();
        return true;
    }
}

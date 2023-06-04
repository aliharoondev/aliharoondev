<?php

namespace App\Http\Services;

use App\Models\Skill;

class SkillService
{
    public function store($data) : bool
    {
        Skill::create([
            'title'      => $data['title'],
            'section_id' => $data['section'],
            'percentage' => $data['percentage'],
        ]);

        return true;
    }

    public function update($id, $data) : bool
    {
        $skill = Skill::findOrFail($id);
        $skill->update([
            'title'      => $data['title'],
            'section_id' => $data['section'],
            'percentage' => $data['percentage'],
        ]);
        return true;
    }

    public function delete($skill) : bool
    {
        $skill->delete();
        return true;
    }
}

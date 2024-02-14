<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'company_id', 'image'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function applicants()
    {
        return $this->belongsToMany(User::class, 'announcement_user');
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    public function wantedSkills()
    {
        $wantedSkillId = DB::table('announcement_skill')->select('skill_id', DB::raw('count(*) as total'))->groupBy('skill_id')->orderBy('total', 'desc')->limit(1)->get();
        $id = $wantedSkillId[0]->skill_id;
        // return $id
        if (empty($id)) {
            return null;
        } else {
            $wantedSkill = DB::select("SELECT * FROM skills WHERE id = $id");
            return $wantedSkill;
        }
    }
}

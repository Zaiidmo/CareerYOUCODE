<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'company_id',
        'image'
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}

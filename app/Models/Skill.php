<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public function users()
        {
            return $this->belongstomany(User::class, 'user_skill');
        }
    public function announcements()
        {
            return $this->belongstomany(Announcement::class);
        }
}

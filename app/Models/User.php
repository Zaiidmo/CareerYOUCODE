<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'password',
        'linkedin',
        'github',
        'facebook',
        'twitter',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skill');
    }
    public function applications()
    {
        return $this->belongsToMany(Announcement::class, 'announcement_user');
    }
    public function recommendAnnouncements()
    {
        // Get the user's skills
        $userSkills = $this->skills()->pluck('user_skill.skill_id');

        // Query announcements that require at least 50% of the user's skills
        $recommendedAnnouncements = Announcement::whereHas('skills', function ($query) use ($userSkills) {
            $query->whereIn('skill_id', $userSkills);
        }, '>=', count($userSkills) * 0.5)->get();

        return $recommendedAnnouncements;
    }
    
}


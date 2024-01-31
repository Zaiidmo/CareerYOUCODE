<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'location',
        'logo'
    ];
    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}

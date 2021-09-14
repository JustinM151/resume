<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    public function education() {
        return $this->hasMany(Education::class);
    }

    public function experience() {
        return $this->hasMany(Experience::class);
    }

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function awards() {
        return $this->hasMany(Award::class);
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'default', 'resume_id'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::make($value)->format('m/d/Y g:iA');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::make($value)->format('m/d/Y g:iA');
    }
}

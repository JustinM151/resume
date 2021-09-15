<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public function getStartAttribute($value)
    {
        if (!isset($value)) {
            return "";
        }
        return Carbon::make($value)->format('M Y');
    }

    public function getFinishAttribute($value)
    {
        if (!isset($value)) {
            return "";
        }
        return Carbon::make($value)->format('M Y');
    }
}

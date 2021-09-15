<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    public function getAwardDateAttribute($value)
    {
        if (!isset($value)) {
            return "";
        }
        return Carbon::make($value)->format('M Y');
    }
}

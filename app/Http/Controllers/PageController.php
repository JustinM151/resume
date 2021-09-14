<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function resume() {
        $resume = Resume::with('education')
            ->with('experience')
            ->with('projects')
            ->with('skills')
            ->with('awards')
            ->where('active',true)
            ->orderBy('created_at', 'desc')
            ->first();
        return Inertia::render('Resume')->with('resume',$resume);
    }
}

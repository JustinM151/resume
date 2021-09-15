<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * Render the active resume for logged-in users.
     * @return \Inertia\Response
     */
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

    public function dashboard() {
        $user = Auth::user();
        $resumes = Resume::with('education')
            ->with('experience')
            ->with('projects')
            ->with('skills')
            ->with('awards')
            ->where('active',true)
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        return Inertia::render('Dashboard')->with('resumes',$resumes);
    }
}

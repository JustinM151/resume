<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Inertia\Response
     */
    public function edit($resume)
    {
        $resume = Resume::with('education')
            ->with('coverLetters')
            ->with('experience')
            ->with('projects')
            ->with('skills')
            ->with('awards')
            ->findOrFail($resume);
        return Inertia::render('EditResume')->with('resume',$resume);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Inertia\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $resume = Resume::findOrFail($id);
            $resume->fill($request->input());
            $resume->save();
            return Inertia::render('EditResume')->with('resume',$resume)->with('notifications',['Successfully updated Resume']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('errors', ['An unhandled exception occured while updating your resume.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}

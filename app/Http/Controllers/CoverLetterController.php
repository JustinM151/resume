<?php

namespace App\Http\Controllers;

use App\Models\CoverLetter;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoverLetterController extends Controller
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

     */
    public function store(Request $request)
    {
        $letter = new CoverLetter($request->input());
        $letter->save();
        if ($request->get('default')) {
            CoverLetter::where('default',true)->where('id','<>', $letter->id)->update(['default'=>false]);
        }
        return Inertia::render('EditResume', [
            'letter' => $letter
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoverLetter  $coverLetter
     * @return \Illuminate\Http\Response
     */
    public function show(CoverLetter $coverLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoverLetter  $coverLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(CoverLetter $coverLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoverLetter  $coverLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoverLetter $coverLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoverLetter  $coverLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoverLetter $coverLetter)
    {
        //
    }
}

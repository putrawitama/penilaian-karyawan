<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'grades' => Grade::all()
        ];
        return view('grade.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->title = $request->title;
        $grade->grade = $request->grade;

        $grade->save();

        return redirect()->route('grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'grade' => Grade::findOrFail($id)
        ];
        return view('grade.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'grade' => Grade::findOrFail($id)
        ];

        return view('grade.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $grade = Grade::findOrFail($id);
        $grade->title = $request->title;
        $grade->grade = $request->grade;

        $grade->save();

        return redirect()->route('grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return redirect()->route('grade');
    }
}

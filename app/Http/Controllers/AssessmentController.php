<?php

namespace App\Http\Controllers;

use App\Assesment;
use App\Employee;
use App\Answer;
use App\Category;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employee' => Employee::all()
        ];
        return view('assessment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = [
            'employee' => Employee::findOrFail($id),
            'category' => Category::all()
        ];
        return view('assessment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {

        $employee = Employee::findOrFail($id);
        $category = Category::findOrFail($request->category_id);
        $answer = new Answer;
        $answer->score = 0;
        $answer->finished = 0;
        $answer->category_id = $category->id;
        $answer->employee_id = $employee->id;
        $answer->save();

        $score = 0;

        foreach ($request->jawaban as $key => $value) {
            $assessment = new Assesment;
            $assessment->point = $value;
            $assessment->question_id = $key;
            $assessment->answer_id = $answer->id;
            $assessment->save();

            $score+=$value;
        }

        $answer->score = $score;
        $answer->save();

        return redirect()->route('assessment');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
}

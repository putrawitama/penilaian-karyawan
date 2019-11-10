<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'question' => Question::all()
        ];

        return view('question.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::all()
        ];

        return view('question.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->number = $request->number;
        $question->body = $request->body;
        $question->category_id = $request->category_id;
        $question->score = $request->score;

        $question->save();

        return redirect()->route('question');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'question' => Question::findOrFail($id)
        ];
        return view('question.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'question' => Question::findOrFail($id)
        ];
        return view('question.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $question = Question::findOrFail($id);
        $question->number = $request->number;
        $question->body = $request->body;
        $question->category_id = $request->category_id;
        $question->score = $request->score;

        $question->save();

        return redirect()->route('question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        Question::findOrFail($id);

        return redirect()->route('question');
    }
}

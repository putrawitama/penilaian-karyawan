<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Grade;
use App\Answer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employees' => Employee::all()
        ];
        return view('employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'grades' => Grade::all()
        ];
        return view('employee.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->nip = $request->nip;
        $employee->name = $request->name;
        $employee->tmt = $request->tmt;
        $employee->memo = $request->memo;
        $employee->jabatan = $request->jabatan;
        $employee->penempatan = $request->penempatan;
        $employee->is_organic = $request->is_organic;
        $employee->grade_id = $request->grade_id;

        $employee->save();

        return redirect()->route('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'employee' => Employee::findOrFail($id),
            'answer' => Answer::where('employee_id', $id)->get()
        ];

        return view('employee.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'employee' => Employee::findOrFail($id),
            'grade' => Grade::all()
        ];

        return view('employee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $employee = Employee::findOrFail($id);
        $employee->nip = $request->nip;
        $employee->name = $request->name;
        $employee->tmt = $request->tmt;
        $employee->memo = $request->memo;
        $employee->jabatan = $request->jabatan;
        $employee->penempatan = $request->penempatan;
        $employee->is_organic = $request->is_organic;
        $employee->grade_id = $request->grade_id;

        $employee->save();
        return redirect()->route('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        
        return redirect()->route('employee');
    }
}

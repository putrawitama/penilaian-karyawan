<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Grade;
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
        return view('employee.index');
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
            'employee' = Employee::find($id)
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
            'employee' = Employee::find($id)
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
        $employee = Employee::find($id);
        $employee->nip = $request->nip;
        $employee->name = $request->name;
        $employee->tmt = $request->tmt;
        $employee->penempatan = $request->penempatan;
        $employee->is_organic = $request->is_organic;
        $employee->grade_id = $request->grade_id;

        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::delete($id);

        return redirect()->route('employee');
    }
}

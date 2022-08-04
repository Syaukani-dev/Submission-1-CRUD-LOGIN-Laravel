<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee.index', compact(['employee']));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        //dd($request->except('_token', 'submit'));
        Employee::create($request->except('_token', 'submit'));
        return redirect('/employee');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact(['employee']));
    }

    function update($id, Request $request)
    {
        $employee = Employee::find($id);
        $employee->update($request->except('_token', 'submit'));
        return redirect('/employee');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employee');
    }
}

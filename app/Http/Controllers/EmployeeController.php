<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Adicione esta linha
use App\Models\Department;



class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'cpf' => 'required|string|max:14|unique:employees',
            'age' => 'required|integer',
            'department_id' => 'required|exists:departments,id',
        ]);

        Employee::create($data);

        return redirect()->route('employees.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department; // Adicione esta linha


class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Department::create($data);

        return redirect()->route('departments.index');
    }
}

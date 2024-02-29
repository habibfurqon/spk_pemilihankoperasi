<?php
// app/Http/Controllers/ParameterController.php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Parameter::all();
        return view('parameter.index', compact('parameters'));
    }

    public function create()
    {
        return view('parameter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_kriteria' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        Parameter::create($request->all());

        return redirect()->route('parameter.index')->with('success', 'Parameter created successfully');
    }

    public function edit(Parameter $parameter)
    {
        return view('parameter.edit', compact('parameter'));
    }

    public function update(Request $request, Parameter $parameter)
    {
        $request->validate([
            'sub_kriteria' => 'required|string',
            'nilai' => 'required|integer',
        ]);

        $parameter->update($request->all());

        return redirect()->route('parameter.index')->with('success', 'Parameter updated successfully');
    }

    public function destroy(Parameter $parameter)
    {
        $parameter->delete();

        return redirect()->route('parameter.index')->with('success', 'Parameter deleted successfully');
    }
}


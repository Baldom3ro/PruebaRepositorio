<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = Subject::paginate(5);
        return view('admin/subjects/index', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::pluck('name', 'id');
        return view('admin/subjects/create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject_name' => 'required|string',
            'description' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id'

        ]);                                                                                                                                                 

        Subject::create($validated);
        return to_route('subjects.index')->with('status', 'Materia creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject)
    {
        return view('admin/subjects/show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subject $subject)
    {
        $teachers = Teacher::pluck('name', 'id');
        return view('admin/subjects/edit', compact('subject', 'teachers'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subject $subject)
    {
        $validated = $request->validate([
            'subject_name' => 'required|string',
            'description' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        $subject->update($validated);

        return to_route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(subject $subject){
        echo view('Admin/subjects/delete', compact('subject'));
    }
    public function destroy(subject $subject)
    {
        $subject->delete();
        return to_route('subjects.index');
    }
}

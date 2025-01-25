<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::paginate(5);
        return view('Admin/teachers/index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/teachers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        teacher::create($data);
        return to_route(route: 'teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        return view('admin/teachers/show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        return view ('admin/teachers/edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        $data= $request->all();
        $teacher->update($data);
        return to_route(route: 'teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(teacher $teacher){
        echo view('admin/teachers/delete', compact('teacher'));
    }
    public function destroy(teacher $teacher)
    {
        $teacher->delete();
        return to_route('teachers.index');
    }
}

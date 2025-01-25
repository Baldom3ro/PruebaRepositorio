<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Student;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::with(['student', 'subject'])->paginate(4);
        return view('admin/inscriptions/index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::pluck('name','id');
        $subjects = Subject::pluck('subject_name', 'id');
        return view('Admin/inscriptions/create', compact('students', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'date' => 'required|date'
        ]);

        Inscription::create($validated); // Asegúrate de usar Inscription aquí

        return to_route('inscriptions.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(inscription $inscription)
    {
        return view('Admin/inscriptions/show', compact('inscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        $students = Student::pluck('id', 'name');
        $subjects = Subject::pluck('id', 'subject_name');
        return view('admin/inscriptions/edit', compact('inscription', 'students', 'subjects'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inscription $inscription)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id'
        ]);

        $inscription->update($validated);

        return to_route('inscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Inscription $inscription){
        echo view('Admin/inscriptions/delete', compact('inscription'));
    }

    public function destroy(inscription $inscription)
    {
        $inscription->delete();
        return to_route('inscriptions.index');
    }
}

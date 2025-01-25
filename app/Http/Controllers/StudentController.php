<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutor;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Container\CircularDependencyException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::paginate(5);
        return view ('admin/students/index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tutors = Tutor::pluck('name', 'id'); // Usar 'name' en lugar de 'id'
        return view('admin/students/create', compact('tutors'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Valida los datos antes de intentar guardarlos (opcional, pero recomendado)
        $validatedData = $request->validate([
            'name' => 'required|string|max:45',
            'last_name' => 'required|string|max:45',
            'second_last_name' => 'nullable|string|max:45',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|max:50|unique:students,email',
            'phone' => 'nullable|numeric',
            'state' => 'nullable|string|max:40',
            'town' => 'nullable|string|max:40',
            'tutor_id' => 'nullable|exists:tutors,id'
        ]);

        // Crea un nuevo registro con los datos validados
        Student::create($validatedData);

        // Redirige al índice de estudiantes con un mensaje de éxito
        return redirect()->route('students.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('Admin/students/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $tutors = Tutor::pluck('name', 'id'); // Obtener tutores como en el formulario de creación
        return view('admin/students/edit', compact('student', 'tutors'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data= $request->all();
        $student->update($data);
        return to_route(route: 'students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Student $student){
        echo view('Admin/students/delete', compact('student'));
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return to_route('students.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Tutor;
use App\Models\Inscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los datos de los modelos
        $students = Student::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $tutors = Tutor::all();
        $inscriptions = Inscription::all();

        // Pasar los datos a la vista
        return view('dashboard.index', compact('students', 'subjects', 'teachers', 'tutors', 'inscriptions'));
    }

}

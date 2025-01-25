@extends('layout.main_template')

@section('content')
<div class="container mt-4">
    <h1 class="text-center display-4 fw-bold animate__animated animate__fadeInDown">Bienvenido</h1>
    <h2 class="text-center text-secondary animate__animated animate__fadeInUp">Vista Previa</h2>
    <hr class="mb-5">

    <!-- Estudiantes -->
    <h3 class="text-success mt-5">Estudiantes</h3>
    <table class="table table-hover shadow-sm animate__animated animate__fadeIn">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha de Nacimiento</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Tutor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->second_last_name }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->state }}</td>
                <td>{{ $student->town }}</td>
                <td>{{ $student->tutor ? $student->tutor->name : 'Sin tutor asignado' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Materias -->
    <h3 class="text-success mt-5">Materias</h3>
    <table class="table table-hover shadow-sm animate__animated animate__fadeIn">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de la Materia</th>
                <th>Descripción</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->subject_name }}</td>
                <td>{{ $subject->description }}</td>
                <td>{{ $subject->teacher ? $subject->teacher->name : 'Sin profesor asignado' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Profesores -->
    <h3 class="text-success mt-5">Profesores</h3>
    <table class="table table-hover shadow-sm animate__animated animate__fadeIn">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->second_last_name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tutores -->
    <h3 class="text-success mt-5">Tutores</h3>
    <table class="table table-hover shadow-sm animate__animated animate__fadeIn">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Relación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tutors as $tutor)
            <tr>
                <td>{{ $tutor->name }}</td>
                <td>{{ $tutor->last_name }}</td>
                <td>{{ $tutor->second_last_name }}</td>
                <td>{{ $tutor->email }}</td>
                <td>{{ $tutor->phone }}</td>
                <td>{{ $tutor->relation }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Inscripciones -->
    <h3 class="text-success mt-5">Inscripciones</h3>
    <table class="table table-hover shadow-sm animate__animated animate__fadeIn">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Fecha de Inscripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscriptions as $inscription)
            <tr>
                <td>{{ $inscription->inscription_id }}</td>
                <td>{{ $inscription->student ? $inscription->student->name : 'Sin estudiante' }}</td>
                <td>{{ $inscription->subject ? $inscription->subject->name : 'Sin materia' }}</td>
                <td>{{ $inscription->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
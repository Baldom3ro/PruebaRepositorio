@extends('layout.main_template')

@section('content')
    <h1>Estudiantes</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('students.create')}}">Añadir Estudiante</a></button>
    <br>
    <br>
<table class="table table-hover shadow-sm animate__animated animate__fadeIn">
    <thead class="table-dark">
        <th>Nombre del Estudiante</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Fecha de nacimiento</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Tutor</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($student as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->last_name}}</td>
                <td>{{$s->second_last_name}}</td>
                <td>{{$s->date_of_birth}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->phone}}</td>
                <td>{{$s->state}}</td>
                <td>{{$s->town}}</td>
                <td>{{ $s->tutor ? $s->tutor->name : 'Sin tutor asignado' }}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("students.show",$s)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("students.edit",$s)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("students.delete",$s)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$student->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection

@extends('layout.main_template')

@section('content')

    <h1>Materias</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('subjects.create')}}">Registrar materia</a></button>
    <br>
    <br>

<table class="table table-hover shadow-sm animate__animated animate__fadeIn">
    <thead class="table-dark">
        <th>ID</th>
        <th>Nombre de la materia</th>
        <th>Descripción</th>
        <th>Profesor</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($subject as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->brand}}</td>
                <td>{{$s->description}}</td>
                <th>{{$s->teacher ? $s->teacher->name: 'Sin Profesor asignado'}}</th>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("subjects.show",$s)}}"><i class="fa-solid fa-plus"></i></a></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("subjects.edit",$s)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("subjects.delete",$s)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

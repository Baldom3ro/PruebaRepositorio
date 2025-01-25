@extends('layout.main_template')

@section('content')
    <h1>Tutores</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('tutors.create')}}">Añadir Tutor</a></button>
    <br>
    <br>
<table class="table table-hover shadow-sm animate__animated animate__fadeIn">
    <thead class="table-dark">
        <th>Nombre del Tutor</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Relación</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($tutor as $t)
            <tr>
                <td>{{$t->name}}</td>
                <td>{{$t->last_name}}</td>
                <td>{{$t->second_last_name}}</td>
                <td>{{$t->email}}</td>
                <td>{{$t->phone}}</td>
                <td>{{$t->relation}}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("tutors.show",$t)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("tutors.edit",$t)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("tutors.delete",$t)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$tutor->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection

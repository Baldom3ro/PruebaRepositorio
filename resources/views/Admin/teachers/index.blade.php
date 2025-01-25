@extends('layout.main_template')

@section('content')
    <h1>Profesores</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('teachers.create')}}">Añadir Profesor</a></button>
    <br>
    <br>
<table class="table table-hover shadow-sm animate__animated animate__fadeIn">
    <thead class="table-dark">
        <th>Nombre del Profesor</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($teacher as $t)
            <tr>
                <td>{{$t->name}}</td>
                <td>{{$t->last_name}}</td>
                <td>{{$t->second_last_name}}</td>
                <td>{{$t->email}}</td>
                <td>{{$t->phone}}</td>
                <td>
                    <button type="button" class="btn btn-outline-success"><a href="{{route("teachers.show",$t)}}"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-outline-info"><a href="{{route("teachers.edit",$t)}}"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-outline-danger"><a href="{{route("teachers.delete",$t)}}"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$teacher->links()}} <!-- Genera los enlaces de cada pagina -->
@endsection

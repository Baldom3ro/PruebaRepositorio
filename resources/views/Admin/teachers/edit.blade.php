@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Actualizar profesor</h1>

    <form action="{{route('teachers.update', $teacher->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nombre del tutor</label>
        <input type="text" name="name" value="{{$teacher->name}}">
        
        <label for="">Apellido paterno</label>
        <input type="text" name="last_name" value="{{$teacher->last_name}}">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" value="{{$teacher->second_last_name}}">

        <label for="">Email</label>
        <input type="email" name="email" value="{{$teacher->email}}">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" value="{{$teacher->phone}}">

        <button type="submit" class="btn btn-outline-light">Actualizar</button>
    </form>

@endsection
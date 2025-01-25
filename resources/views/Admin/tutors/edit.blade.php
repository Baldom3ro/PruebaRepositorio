@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Actualizar tutor</h1>

    <form action="{{route('tutors.update', $tutor->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nombre del tutor</label>
        <input type="text" name="name" value="{{$tutor->name}}">
        
        <label for="">Apellido paterno</label>
        <input type="text" name="last_name" value="{{$tutor->last_name}}">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" value="{{$tutor->second_last_name}}">

        <label for="">Email</label>
        <input type="email" name="email" value="{{$tutor->email}}">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" value="{{$tutor->phone}}">

        <label for="">Relación</label>
        <input type="text" name="relation" value="{{$tutor->relation}}">


        <button type="submit" class="btn btn-outline-light">Actualizar</button>
    </form>

@endsection
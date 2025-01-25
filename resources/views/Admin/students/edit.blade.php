@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Editar estudiante</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="">Nombre del estudiante</label>
    <input type="text" name="name" id="" value="{{ $student->name }}">

    <label for="">Apellido paterno</label>
    <input type="text" name="last_name" value="{{ $student->last_name }}">

    <label for="">Apellido materno</label>
    <input type="text" name="second_last_name" id="" value="{{ $student->second_last_name }}">

    <label for="">Fecha de nacimiento</label>
    <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}">

    <label for="">Email</label>
    <input type="email" name="email" id="" value="{{ $student->email }}">
    
    <label for="">Telefono</label>
    <input type="text" name="phone" id="" value="{{ $student->phone }}">

    <label for="">Estado</label>
    <input type="text" name="state" id="" value="{{ $student->state }}">

    <label for="">Ciudad</label>
    <input type="text" name="town" id="" value="{{ $student->town }}">

    <label for="">Tutor</label>
    <select name="tutor_id" class="form-control">
        <option value="">Selecciona...</option>
        @foreach ($tutors as $id => $tutor)
            <option value="{{ $id }}" {{ $student->tutor_id == $id ? 'selected' : '' }}>
                {{ $tutor }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-outline-light">Actualizar</button>
</form>

@endsection

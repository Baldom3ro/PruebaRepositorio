@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Registrar estudiante</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre del estudiante</label>
        <input type="text" name="name" id="">
        
        <label for="">Apellido paterno</label>
        <input type="text" name="last_name">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" id="">

        <label for="">Fecha de nacimiento</label>
        <input type="date" name="date_of_birth">

        <label for="">Email</label>
        <input type="email" name="email" id="">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" id="">

        <label for="">Estado</label>
        <input type="text" name="state" id="">

        <label for="">Ciudad</label>
        <input type="text" name="town" id="">

        <label for="">Tutor</label>
        <select name="tutor_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($tutors as $id => $tutor)
                <option value="{{ $id }}">{{ $tutor }}</option>
            @endforeach
        </select>

        


        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </form>

@endsection
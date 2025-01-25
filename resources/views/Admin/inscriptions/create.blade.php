@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Registrar inscripción</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('inscriptions.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Alumno</label>
        <select name="student_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($students as $id => $student)
                <option value="{{ $id }}">{{ $student }}</option>
            @endforeach
        </select>

        <label for="">Materia</label>
        <select name="subject_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($subjects as $id => $subject)
                <option value="{{ $id }}">{{ $subject }}</option>
            @endforeach
        </select>

        <label for="">Fecha de inscripción</label>
        <input type="date" name="date">        


        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </form>

@endsection
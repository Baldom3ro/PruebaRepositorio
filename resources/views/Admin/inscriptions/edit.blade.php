@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Editar inscripción</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{ route('inscriptions.update', $inscription->inscription_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <label for="">Alumno</label>
        <select name="student_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($students as $id => $student)
                <option value="{{ $id }}" {{ $inscription->student_id == $id ? 'selected' : '' }}>
                    {{ $student }}
                </option>
            @endforeach
        </select>
    
        <label for="">Materia</label>
        <select name="subject_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($subjects as $id => $subject)
                <option value="{{ $id }}" {{ $inscription->subject_id == $id ? 'selected' : '' }}>
                    {{ $subject }}
                </option>
            @endforeach
        </select>
    
        <label for="">Fecha de inscripción</label>
        <input type="date" name="date" value="{{ $inscription->date }}">
    
        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </form>
      

@endsection
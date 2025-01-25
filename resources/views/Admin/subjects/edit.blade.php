@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Editar materia</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('subjects.update', $subject->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="">Nombre de la materia</label>
        <input type="text" name="subject_name" id="" value="{{$subject->subject_name}}">
        
        <label for="">Descripción</label>
        <input type="text" name="description" value="{{$subject->description}}">

        <label for="">Profesor</label>
        <select name="teacher_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($teachers as $id => $teacher)
                <option value="{{ $id }}" {{ $subject->teacher_id == $id ? 'selected' : '' }}>{{ $teacher }}</option>
            @endforeach

        </select>

        


        <button type="submit" class="btn btn-outline-light">Actualizar</button>
    </form>

@endsection
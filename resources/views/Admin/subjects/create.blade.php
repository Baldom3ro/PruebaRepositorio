@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Registrar materia</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('subjects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre de la materia</label>
        <input type="text" name="subject_name" id="">
        
        <label for="">Descripción</label>
        <input type="text" name="description">

        <label for="">Profesor</label>
        <select name="teacher_id" class="form-control">
            <option value="">Selecciona...</option>
            @foreach ($teachers as $id => $teacher)
                <option value="{{ $id }}">{{ $teacher }}</option>
            @endforeach
        </select>

        


        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </form>

@endsection
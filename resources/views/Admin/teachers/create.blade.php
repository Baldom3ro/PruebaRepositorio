@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

    <h1 style="text-align: center">Registrar Profesor</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('teachers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre del Profesor</label>
        <input type="text" name="name" id="">
        
        <label for="">Apellido paterno</label>
        <input type="text" name="last_name">

        <label for="">Apellido materno</label>
        <input type="text" name="second_last_name" id="">

        <label for="">Email</label>
        <input type="email" name="email" id="">
        
        <label for="">Telefono</label>
        <input type="text" name="phone" id="">


        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </form>

@endsection
@extends('layout.main_template')

@section('content')

    <h1>Inscripciones</h1>
    <br>
    <button class="btn btn-outline-primary"><a href="{{route('inscriptions.create')}}">Registrar inscripción</a></button>
    <br>
    <br>

<table class="table table-hover shadow-sm animate__animated animate__fadeIn">
    <thead class="table-dark">
        <th>ID</th>
        <th>Estudiante</th>
        <th>Materia</th>
        <th>Fecha de inscripción</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($inscriptions as $i)
            <tr>
                <td>{{$i->inscription_id}}</td>
                <td>{{$i->student ? $i->student->name : 'Sin estudiante'}}</td>
                <td>{{$i->subject ? $i->subject->subject_name : 'Sin materia'}}</td>
                <td>{{$i->date}}</td>
                
                <td>
                    <button type="button" class="btn btn-outline-success">
                        <a href="{{ route('inscriptions.show', $i->inscription_id) }}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </button>
                    <button type="button" class="btn btn-outline-info">
                        <a href="{{ route('inscriptions.edit', $i->inscription_id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                        <a href="{{ route('inscriptions.delete', $i->inscription_id) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </button>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<table>
    <thead>
        <h3>¿Estas seguro que quieres eliminar 
            la materia {{$subject->subject_name}}?</h3>
    </thead>
    <tbody>
        <tr>
            <td>
                <form action="{{route('subjects.index')}}">
                    <button type="submit">No</button>
                </form>
            </td>
            <td>
                <form action="{{route('subjects.destroy', $subject->id)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Si</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection
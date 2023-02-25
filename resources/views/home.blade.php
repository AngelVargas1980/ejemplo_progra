@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>Este es el texto de la vista principal.</p>
@endsection

@section('content')
    <p>Este es el contenido de la vista</p>
<<<<<<< HEAD
    <a href="{{route('pagina2 pru2')}}"> Links a pagina 2</a>
=======
    <a href="{{route('pagina2 pru')}}"> Links a pagina 2</a>
>>>>>>> 80c7d65 (probando primer commit)
@endsection

@extends('layout.template')

@section('title', 'Usuarios')
    

@section('contenido')
<body>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        
        <a href="{{ url('usuarios') }}" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm inline-block h-12">Regresar</a>
    </div>
</body>
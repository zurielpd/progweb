@extends('layout.template')

@section('title', 'Usuarios')
    

@section('contenido')
    <body class="bg-gray-100 p-6">
        
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Usuarios</h1>
            <a href="{{ url('usuarios/create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm inline-block mb-6">Agregar</a>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Correo</th>
                        <th class="py-2 px-4 border-b">Contraseña</th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
    
@endsection

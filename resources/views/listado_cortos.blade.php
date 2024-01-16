@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<h1>Listado de cortos</h1>
<ul>
@forelse ($cortos as $corto)
<li>{{ $corto["titulo"] }} </li>
<ul>
    <li>{{ $corto["director"] }}</li>
    <li>{{ $corto["sinapsis"] }}</li>
</ul> 
</li>
@empty
<li>No se encontraron libros</li>
@endforelse</ul>
@endsection
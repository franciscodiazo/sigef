@extends('layout')
@section('content')<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table><tr><td>nombre</td><td>apellido</td></tr>
@if($clientes->count())
@foreach($clientes as $cliente)
<tr><td>{{$cliente->nombres}}</td><td>{{$cliente->apellidos}}</td></tr>
</table>
@endforeach
@else 
<div>No hay Registros</div>
@endif
</body>
</html>
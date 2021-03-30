
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<form action="{{ route('', $medicines->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Codigo</label>
        <input type="text" class="form-control" placeholder="Codigo" id="code" name="code" value="{{$medicines->code}}" required>
        
    </div>
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" value="{{$medicines->name}}"required>
    
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
                       

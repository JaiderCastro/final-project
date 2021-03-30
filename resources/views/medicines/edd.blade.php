@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('medicines.upqu', $medicines->id) }}" method="POST">
        @csrf
        @method('PUT')
     
      <div class="mb-3">
        <label for="" class="form-label">cantidad</label>
        <input id="quantity" name="quantity" type="number" step="any" class="form-control" tabindex="3" value="{{$medicines->quantity}}"> </div>

        

      <a href="/dashboardd/medicines" class="btn btn-secondary" tabindex="5">Cancelar</a> 
      <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
    </form> 
</body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
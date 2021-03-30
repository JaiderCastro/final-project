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
    <form action="{{ route('medicines.update', $medicines->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="code" name="code" type="text" class="form-control" tabindex="1" value="{{$medicines->code}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" value="{{$medicines->name}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Empaque</label>
        <input id="packing" name="packing" type="text" class="form-control" tabindex="2" value="{{$medicines->packing}}">
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">cantidad</label>
        <input id="quantity" name="quantity" type="number" step="any" class="form-control" tabindex="3" value="{{$medicines->quantity}}"> </div>

        <div class="mb-3">
        <label for="" class="form-label">Presentacion</label>
        <input id="presentation" name="presentation" type="text" step="any"  class="form-control" tabindex="3" value="{{$medicines->presentation}}"> </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha De Expiracion</label>
            <input id="expiration_date" name="expiration_date" type="date" step="any" class="form-control" tabindex="3" value="{{$medicines->expiration_date}}"> 
        </div>

        <div class="mb-3">
                <label for="" class="form-label">Manera de administracion</label>
                <input id="way_administration" name="way_administration" type="text" step="any" class="form-control" tabindex="3" value="{{$medicines->way_administration}}"> 
        </div>    
        
        <div class="mb-3">
                <label for="" class="form-label">Almacenamiento</label>
                <input id="storage" name="storage" type="text" step="any" class="form-control" tabindex="3" value="{{$medicines->storage}}"> 
        </div>   

        <div class="mb-3">
            <label for="" class="form-label">Fecha De Entrada</label>
            <input id="entry_date" name="entry_date" type="date" step="any" class="form-control" tabindex="3" value="{{$medicines->entry_date}}"> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Especificaciones</label>
            <input id="specifications" name="specifications" type="text" step="any"  class="form-control" tabindex="3" value="{{$medicines->specifications}}"> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="price" name="price" type="text" step="any" class="form-control" tabindex="3" value="{{$medicines->price}}"> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input id="brand" name="brand" type="text" step="any"  class="form-control" tabindex="3" value="{{$medicines->brand}}"> 
        </div>


          
        <br>

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
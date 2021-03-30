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
    <form action=" {{route('customers.update', $customers->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" value="{{$customers->name}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="lastname" name="lastname" type="text" class="form-control" tabindex="1" value="{{$customers->lastname}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Correo Electronico</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="1" value="{{$customers->email}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">N°Telefonico</label>
        <input id="phone" name="phone" type="text" class="form-control" tabindex="1" value="{{$customers->phone}}">    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Tipo_De_Documento</label>
        <select id="doctype_id" name="doctype_id" type="text" step="any" value="0.00" class="form-control" tabindex="3">
            @foreach ($doctypes as $doctype)
             <option value="{{ $doctype->id }}"> {{ $doctype->name }}</option>
            @endforeach    
        </select>
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">Medicinas_Frecuentes</label>
        <select id="frequent_id" name="frequent_id" type="text" step="any" value="0.00" class="form-control" tabindex="3">
            @foreach ($frequents as $frequent)
             <option value="{{ $frequent->id }}"> {{ $frequent->name }}</option>
            @endforeach    
        </select></div>

        


          
        <br>

      <a href="/dashboardd/customers" class="btn btn-secondary" tabindex="5">Cancelar</a> 
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
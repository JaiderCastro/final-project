@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
 
  <form method="POST" action="/resta">
    @csrf
    
        <div class="input-group mb-3">
            <span class="input-group-text">Ingrese la primera cantidad a restar</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="numero_uno" id="numero_uno">
          </div>
          
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="numero_dos" id="numero_dos">
            <span class="input-group-text">Ingrese la segunda cantidad a restar</span>
           
          </div>  <br>
    
           
          <button type="submit" class="btn btn-primary">Restar</button>
          <a href="dashboardd/medicines" class="btn btn-secondary">Cancelar</a>
         
  </form>  

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
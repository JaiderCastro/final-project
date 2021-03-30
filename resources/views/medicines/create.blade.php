@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar Producto</h1> <br>
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
    <form action=" {{route('medicines.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Codigo De barra</label>
        <input id="code" name="code" type="text" class="form-control" tabindex="1" required>    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" required>    
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Empaque</label>
        <select id="packing" name="packing" type="text" class="form-control" tabindex="2" required>
          <option>Caja</option>
          <option>Paquete</option>
          <option>Frasco</option>
          <option>Individual</option>
          

        </select>
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">cantidad</label>
        <input id="quantity" name="quantity" type="number" step="any" value="0.00" class="form-control" tabindex="3" required> </div>

        <div class="mb-3">
        <label for="" class="form-label">Presentacion</label>
        <select id="presentation" name="presentation" type="text" step="any" value="" class="form-control" tabindex="3" required>
          <option>Liquido</option>
          <option>Pastilla</option>
          <option>Polvo</option>
        </select></div>

        <div class="mb-3">
          <label for="" class="form-label">Fecha De Entrada</label>
          <input id="entry_date" name="entry_date" type="date" step="any" value="" class="form-control" tabindex="3" required> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha De Expiracion</label>
            <input id="expiration_date" name="expiration_date" type="date" step="any" value="" class="form-control" tabindex="3" required> 
        </div>

        <div class="mb-3">
                <label for="" class="form-label">Modo De Uso</label>
                <select id="way_administration" name="way_administration" type="text" step="any" value="" class="form-control" tabindex="3" required> 
                
                  <option>oral</option>
                  <option>crema</option>
                  <option>intravenoso</option>
                </select>
        </div>    
        
        <div class="mb-3">
                <label for="" class="form-label">Almacenamiento</label>
                <select id="storage" name="storage" type="text" step="any" value="" class="form-control" tabindex="3" required> 

                  <option>Estanteria</option>
                  <option>Vitrina</option>
                  <option>Nevera</option>

                </select>  
        </div>   


        <div class="mb-3">
            <label for="" class="form-label">Especificaciones</label>
            <input id="entry_date" name="specifications" type="text" step="any" value="" class="form-control" tabindex="3" required> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="price" name="price" type="text" step="any" value="" class="form-control" tabindex="3" required> 
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Laboratorio</label>
            <input id="brand" name="brand" type="text" step="any" value="" class="form-control" tabindex="3" required> 
        </div>


          
        <br>

      <a href="/dashboardd/medicines" class="btn btn-secondary" tabindex="5">Cancelar</a> 
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
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
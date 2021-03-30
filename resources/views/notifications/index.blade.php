@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Enviar Notificacion</h1> <br>
@stop 

@section('content')
    <form action="{{route('notifications.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre Del Cliente</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com" name="email">
        </div>
        @error('email')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        @error('description')
        <p><strong>{{$message}}</strong></p>
        @enderror

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Producto(s)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="products"></textarea>
        </div>
      

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="quantity">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Precio Por Cantidad</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price_quantity">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Total</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"name="total">
        </div>
        <button type="submit" class="btn btn-primary" tabindex="4">Enviar</button>
    </form> 
    
  
   
@stop

{{--  @if (session('info'))
 <script>
    alert("{{session('info')}}");
</script>
 @endif --}}


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
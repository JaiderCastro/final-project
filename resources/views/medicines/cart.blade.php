@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Carrito De Compras</h1> <br>
@stop 

@section('content')
  
<div class="card-body">
    @if (session('status'))
       <div class="alert alert-success" role="alert">
           {{ session('status')}}

       </div>
        
    @endif
</div>

<?php $valor = 0 ?>
 @if (session('cart'))

  @if(session('cart'))
     <table class="table">
        &nbsp;&nbsp;
        </a> <a href="{{ route('notifications.index') }}" class="btn btn-info"> <i class="fa fa-paper-plane"></i> Enviar Notificacion De Factura a cliente</a> 
         <thead class="thead-dark">

            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Precio Por Cantidad</th>

            </tr>    

         </thead>   
      
  

 @foreach (session('cart') as $id => $medicines)

   <?php $valor += $medicines['price'] * $medicines['quantity'] ?>
    <?php $cart = (session('cart'))?> 
   
    <tr>
        <th> {{ $id}} </th> 
       <th> {{ $medicines['name'] }} </th> 
       <th> {{ $medicines['quantity'] }} </th>
       <th> ${{ number_format($medicines['price']), 2 }} </th>
       <th> ${{ number_format($medicines['price'] * $medicines['quantity']) }} </th>
        {{-- <th><form action=" {{ url ('cart_remover',$id)}}" method="POST">
            @csrf
             @method('PUT')  
            <input type="hidden" name="id" value="{{$id}}">
            <button type="submit" class="btn btn-primary">Remover</button>
            </form>  </th> --}}
            <td>
                <a href="{{route('medicines.edd',$id) }}" class="btn btn-success btn-circle">
                    <i class="fas fa-sync">Actualizar Cantidad</i>
                </a></td>    
             <td>    
             {{-- <th>
             <button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#update">
                <i class="fa fa-edit"></i>
            </button> 
            </th>  --}}
       {{-- <a href="{{ url('cart_remover'.$medicines->id) }}" class="">
        <i class="">Quitar De Carrito</i> 
       </a> --}}
       {{-- <th><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</th> --}}
       
        {{-- @include('medicines.edq') --}}
   

    </tr>   
   @endforeach
      <a href="" class="btn btn-danger">Vaciar Carrito <i class="fa fa-trash"></i></a> 
     </table>  
     @endif

     <div class="col-md-3">
        <div class="card">
                <div class="card-header">
                    <p id="total" name="total">Precio Total./</p>
                    <h4>Total <b id="total" name="total"> ${{ number_format ($valor)}} </b></h4>
                </div>    
                <input type="button" class="btn btn-warning" value="reset" name="reset" id="reset">
        </div>   

            
     </div> 
     <a href="{{ route('medicines.pdf') }}"  target="_blank" class="btn btn-default"><i class="fas fa-print">Imprimir Factura</i></a>
     
     @else
     <h3> <span class="badge badge-warning">No hay productos en el carrito</span></h3>
 @endif


    {{-- <script src="{{asset('vendor/jquery/jquery.js')}}"></script>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> --}}

    {{-- <script type="text/javascript">

     const app = new Vue({
         el: '#app',
         router,
         data:{
             search: ''

         },
         methods:{
             searchit: _.debounce(() => {
                 Fire.$emit('searching');

             },1000),

             printme(){
                 window.print();
             }
         }
     } );

      /*  function deleterow(e)
     {
    total_cost = parseInt($(e).parent().parent().find('th:last').text(),10);
    total -= total_cost;
    $('#total').val(total);
    $(e).parent().parent().remove();

    }

    
    $('#reset').click(function()
    {
        location.reload();
    }); */

    
    
    </script> 
 --}}
@stop
    {{--  @section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                
    @stop

    @section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @stop  --}}


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
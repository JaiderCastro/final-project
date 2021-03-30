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
     <meta name="viewport" content="width= , initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Medicinas</h6>
        </div>
        
        <div class="card-body">
            <a href="{{ route('medicines.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i>Agregar Medicina</a>
            <a href="{{ route('medicines.cart') }}" class="btn btn-info"> <i class="fas fa-cart-arrow-down"></i> Ir al Carrito De Compras</a>
            {{-- <a href="s" class="btn btn-primary"> <i class="fas fa-plus"></i>Factura</a>  --}}
            {{-- <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#eliminar">
                <i class="fas fa-calculator">Realizar Factura</i>
            </button> @include('') --}}

            {{-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#eliminar">
                <i class="fas fa-calculator">  Realizar Calculos</i>
            </button> @include('medicines.calc')
             --}}

            <br> <br> 
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Empaque</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        <?php $num = 0;?>
                        @foreach ($medicines as $medicine)
                        <?php $num++ ?>
                       
                            <tr>
                                <td>{{ $medicine->id }}</td>
                                <td>{{ $medicine->code }}</td>
                                <td>{{ $medicine->name}}</td>
                                <td>{{ $medicine->packing }}</td>
                                <td>{{ $medicine->quantity }}</td>
                                <td>${{ number_format ($medicine->price) }}</td>

                                 <td>
                                    <a href="{{route('medicines.edit',$medicine->id) }}" class="btn btn-success btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a></td>    
                                 <td>    
                                <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                               
                                {{--  <td> <button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#agregar">
                                    <i class="">Agregar Al Carrito</i>
                                </button></td>  --}}
                                 <td>
                                    <a href="{{ url('add_cart/'.$medicine->id) }}" class="">
                                        <i class="">Agregar Al Carrito</i>
                                    </a>
                                 </td>   
                                 
                                 
                                
                            </tr> 
                            {{-- @include('medicines.records') --}}
                            @include('medicines.delete')
                            {{-- @include('medicines.add')  --}}
                            {{-- /medicines/{{ $medicine->id }}/edit --}}

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (session('mensaje'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('mensaje') }}',
            showConfirmButton: false,
            timer: 2500
        })
        @endif
    </script>
@stop

</div>
<!-- /.container-fluid -->
 </body>
 </html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
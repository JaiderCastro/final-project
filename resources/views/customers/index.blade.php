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
     <title>Clientes</title>
 </head>
 <body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
        </div>
        
        <div class="card-body">
            <a href="{{ route('customers.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i>Agregar Cliente </a> {{-- <a href="{{ route('notifications.index') }}" class="btn btn-info"> <i class="fa fa-paper-plane"></i> Enviar Notificacion a cliente</a>  --}}
            <br> <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>N°Telefonico</th>
                            <th>Medicinas_Frecuentes</th>
                           
                           
                        </tr>
                    </thead>

                    <tbody>
                        <?php $num = 0;?>       
                        @foreach ($customers as $customer)
                        <?php $num++ ?>
                       
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->lastname}}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->nameFrequent }}</td>
                                
                                 <td>
                                    <a href="{{route('customers.edit',$customer->id) }}" class="btn btn-success btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a></td>    
                                 <td>    
                                    <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                        <i class="fa fa-trash"></i>
                                 </td>
                                 
                                
                            </tr> 
                            @include('customers.delete')
                            
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


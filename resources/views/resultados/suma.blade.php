@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
 

  {!! Form::open(['url' => 'foo/bar']) !!}
  {{ Form::label('La suma es', null,['class' => 'control-label']) }}
  {{  Form::text('Holame', $suma, array_merge(['class' => 'form-control'], ['color' => 'red']))}}
   {!! Form::close() !!}
   <h1> La suma es {{ $suma }} </h1> <a href="dashboardd/medicines" class="btn btn-danger"> Regresar</a>


    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


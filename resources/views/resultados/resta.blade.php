@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
 

  {!! Form::open(['url' => 'foo/bar']) !!}
  {{ Form::label('La resta es', null,['class' => 'control-label']) }}
  {{  Form::text('Holame', $resta, array_merge(['class' => 'form-control'], ['color' => 'red']))}}
   {!! Form::close() !!}
   <h1> La resta es {{ $resta }} </h1> <a href="dashboardd/medicines" class="btn btn-danger"> Regresar</a>


    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Recibo</h1> <br>
@stop 

@section('content')
  <div id="invoice-POS">
      <center id="top">
          <div class="logo">Admin</div>
          <div class="info"></div>

          <h2>Post</h2>
      </center>       


  </div>


@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@include('header')
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            
              <div class="card-body">
              <div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-white">
<div class="inner">
<h3>150</h3>
<p>New Crew</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-white">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Sample</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-white">
<div class="inner">
<h3>44</h3>
<p>Vessels</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-white">
<div class="inner">
<h3>65</h3>
<p>Visa Expiration</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
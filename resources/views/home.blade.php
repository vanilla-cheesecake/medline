@extends('adminlte::page')
@section('title', 'Dashboard')
{{-- OVERRIDE HEADER  --}}
@extends('layouts.header')

{{-- MAIN CONTENT HERE --}}
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-weight: bold; font-size: 45px;">DASHBOARD</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <div class="small-box">
                                        <div class="inner">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-fw fa-user fa-1x mr-2"></i>
                                                <h5 class="mb-0">Total Crew</h5>
                                            </div>
                                            <h1 class="d-block text-center" style="font-size: 6rem; margin-top: 10px; font-weight: bold;">{{ $totalCrewCount }}</h1>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('crew-list')}}" class="small-box-footer bg-danger">Crew List  <i class="fas fa-arrow-circle-right"></i></a>
                                    </div> 
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box">
                                        <div class="inner">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-fw fa-user fa-1x mr-2"></i>
                                                <h5 class="mb-0">Visa Expiration</h5>
                                            </div>
                                            <h1 class="d-block text-center" style="font-size: 6rem; margin-top: 10px; font-weight: bold;">0</h1>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('crew-list')}}" class="small-box-footer bg-danger">US Visa  <i class="fas fa-arrow-circle-right"></i></a>
                                    </div> 
                                </div><div class="col-lg-3 col-6">
                                    <div class="small-box">
                                        <div class="inner">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-fw fa-user fa-1x mr-2"></i>
                                                <h5 class="mb-0">Vessels</h5>
                                            </div>
                                            <h1 class="d-block text-center" style="font-size: 6rem; margin-top: 10px; font-weight: bold;">200</h1>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('crew-list')}}" class="small-box-footer bg-danger">Ships List  <i class="fas fa-arrow-circle-right"></i></a>
                                    </div> 
                                </div><div class="col-lg-3 col-6">
                                    <div class="small-box">
                                        <div class="inner">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-fw fa-user fa-1x mr-2"></i>
                                                <h5 class="mb-0">Embarkations</h5>
                                            </div>
                                            <h1 class="d-block text-center" style="font-size: 6rem; margin-top: 10px; font-weight: bold;">{{ $totalCrewCount }}</h1>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('embarkation')}}" class="small-box-footer bg-danger">Embarkations  <i class="fas fa-arrow-circle-right"></i></a>
                                    </div> 
                                </div>
                               

                              
                           

                                

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
</section>
<!-- /.content -->

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
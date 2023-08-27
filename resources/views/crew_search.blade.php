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
                <h1 style="font-weight: bold; font-size: 45px;">CREW SEARCH</h1>
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
                            <!-- Search, Add Button, and Filter -->
                            <div class="row mb-5">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">Search</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left pl-3">
                                    <button class="btn btn-success border border-dark" width="50px" ;
                                        type="button">Add</button>
                                </div>
                                <div class="col-md-2 text-left pl-3">
                                    <select class="form-control rounded-0 border border-dark">
                                        <option value="">Filter by Account</option>
                                        <option value="account1">Account 1</option>
                                        <option value="account2">Account 2</option>
                                        <!-- Add more options here -->
                                    </select>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">RANK</th>
                                                <th class="text-center">CREW NAME</th>
                                                <th class="text-center">SIGN ON</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Add table rows with data here -->
                                        </tbody>
                                    </table>
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
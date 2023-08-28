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
                <h1 style="font-weight: bold; font-size: 45px;">CREW LIST</h1>
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
                                <table id="crewTable" class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>RANK</th>
                                            <th>CREW NAME</th>
                                            <th>ACTIONS</th>
                                            <!-- Add other headers here -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crewMembers as $crewMember)
                                        <tr>
                                            <td>{{ $crewMember->rank }}</td>
                                            <td>{{ $crewMember->lastname }} {{ $crewMember->firstname }}</td>
                                            <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                    <!-- Add view, edit, and delete icons with appropriate links -->
                                                    <a class="mr-4 text-danger" href=""><i class="fas fa-eye"></i></a>
                                                    <a class="mr-4 text-danger" href=""><i class="fas fa-edit"></i></a>
                                                    <a class="text-danger" href=""
                                                        onclick="return confirm('Are you sure you want to delete this crew member?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </td>

                                            <!-- Add other columns here -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <script>
                                    $(document).ready(function() {
                                        $('#crewTable').DataTable({
                                            // Enable search and sorting
                                            searching: true,
                                            ordering: true
                                        });
                                    });
                                </script>

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
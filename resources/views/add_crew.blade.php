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
                <h1 style="font-weight: bold; font-size: 45px;">ADD CREW</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

@if(session('success'))
    <style>
        /* Customize the SweetAlert2 success alert color */
        .swal2-icon.swal2-success {
            color: #dc3545; /* Change to your desired danger color */
        }
        /* Define a custom CSS class to make the alert smaller */
        .custom-swal {
            width: 200px; /* Adjust the width as needed */
        }
    </style>
    
    <script>
        Swal.fire({
            title: 'CREW ADDED!',
            icon: 'success',
            position: 'top-end', // Position at the top-right corner
            showConfirmButton: false, // Hide the "OK" button
            timer: 2000, // Auto-close after 3 seconds
    
        });
    </script>
@endif




@if ($errors->any())
    <script>
        Swal.fire({
            title: 'Please Complete Crew Details!',
            html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonClass: 'btn btn-danger' // Apply AdminLTE button styling
        });
    </script>
@endif


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <form method="POST" action="{{ route('crew.store')}}">
                               @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group text-center">
                                            <div class="circle-upload">
                                                <label for="profile_photo" class="upload-btn-label">
                                                    <i class="fas fa-camera"></i> Upload Photo
                                                </label>
                                                <input type="file" name="profile_photo" id="profile_photo"
                                                    accept="image/*" style="display: none;">
                                            </div>
                                        </div>
                                        {{-- PERSONAL INFORMATION --}}
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">First Name:</label>
                                                    <input type="text" class="form-control" id="firstname"
                                                        name="firstname" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Last Name:</label>
                                                    <input type="text" class="form-control" id="lastname"
                                                        name="lastname" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                autocomplete="off">
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="birthdate">Birthdate:</label>
                                                    <input type="date" class="form-control" id="birthdate"
                                                        name="birthdate" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone:</label>
                                                    <input type="number" class="form-control" id="phone" name="phone"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mother">Mother:</label>
                                                    <input type="text" class="form-control" id="mother" name="mother"
                                                        autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="spouse">Spouse:</label>
                                                    <input type="text" class="form-control" id="spouse" name="spouse"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="rank">Rank:</label>

                                                    <select class="form-control" id="rank" name="rank">
                                                        <option value="CPT">CPT</option>
                                                        <option value="C/O">C/O</option>
                                                        <option value="C/E">C/E</option>
                                                        <option value="2/O">2/O</option>
                                                        <option value="3/O">3/O</option>
                                                        <option value="2/E">2/E</option>
                                                        <option value="3/E">3/E</option>
                                                        <option value="4/E">4/E</option>
                                                        <option value="ELC">ELC</option>
                                                        <option value="BSN">BSN</option>
                                                        <option value="A/B">A/B</option>
                                                        <option value="O/S">O/S</option>
                                                        <option value="D/B">D/B</option>
                                                        <option value="G/P">G/P</option>
                                                        <option value="OLR">OLR</option>
                                                        <option value="FRM">FRM</option>
                                                        <option value="WPR">WPR</option>
                                                        <option value="E/C">E/C</option>
                                                        <option value="FTR">FTR</option>
                                                        <option value="CCK">CCK</option>
                                                        <option value="COK">COK</option>
                                                        <option value="2CK">2CK</option>
                                                        <option value="MSM">MSM</option>
                                                        <option value="CLK">CLK</option>
                                                        <option value="STW">STW</option>
                                                        <option value="DOC">DOC</option>
                                                        <option value="NRS">NRS</option>
                                                        <option value="UTL">UTL</option>
                                                        <option value="TEC">TEC</option>
                                                        <option value="REP">REP</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="src">SRC:</label>
                                                    <input type="text" class="form-control" id="src" name="src"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sbook">SBOOK:</label>
                                                    <input type="text" class="form-control" id="sbook" name="sbook"
                                                        autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sbook_date_issued">SBOOK Date Issued:</label>
                                                    <input type="date" class="form-control" id="sbook_date_issued"
                                                        name="sbook_date_issued" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- TRAVEL DOCS --}}
                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sbook_expiry_date">SBOOK Expiry Date:</label>
                                                    <input type="date" class="form-control" id="sbook_expiry_date"
                                                        name="sbook_expiry_date" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sbook_place_issued">SBOOK Place Issued:</label>
                                                    <input type="date" class="form-control" id="sbook_place_issued"
                                                        name="sbook_place_issued" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pport">PPORT:</label>
                                                    <input type="text" class="form-control" id="pport" name="pport"
                                                        autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pport_date_issued">PPORT Date Issued:</label>
                                                    <input type="date" class="form-control" id="pport_date_issued"
                                                        name="pport_date_issued" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pport_expiry_date">PPORT Expiry Date:</label>
                                                    <input type="date" class="form-control" id="pport_expiry_date"
                                                        name="pport_expiry_date" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pport_place_issued">PPORT Place Issued:</label>
                                                    <input type="text" class="form-control" id="pport_place_issued"
                                                        name="pport_place_issued" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="coc_date_issued">COC Date Issued:</label>
                                                    <input type="date" class="form-control" id="coc_date_issued"
                                                        name="coc_date_issued" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="coc_expiry_date">COC Expiry Date:</label>
                                                    <input type="date" class="form-control" id="coc_expiry_date"
                                                        name="coc_expiry_date" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="us_visa">U.S Visa:</label>
                                                    <input type="date" class="form-control" id="us_visa" name="us_visa"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="yfever">YFever:</label>
                                                    <input type="date" class="form-control" id="yfever" name="yfever"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="status">

                                                        <option value=ON>ON</option>
                                                        <option value=FC>FC</option>
                                                        <option value=STBY>STBY</option>
                                                        <option value=PROM>PROM</option>
                                                        <option value=TRNF>TRNF</option>
                                                        <option value=FMLY>FMLY</option>
                                                        <option value=SICK>SICK</option>
                                                        <option value=EMGY>EMGY</option>
                                                        <option value=SOLD>SOLD</option>
                                                        <option value=ACDT>ACDT</option>
                                                        <option value=NTBH>NTBH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_option"
                                                            id="radio_mwe" value="MWE">
                                                        <label class="form-check-label" for="radio_mwe">MWE</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="radio_option"
                                                            id="radio_active" value="ACTIVE">
                                                        <label class="form-check-label"
                                                            for="radio_active">ACTIVE</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger" id="submitBtn">Add Crew</button>
                                        <button type="reset" class="btn border-danger" id="clearBtn">Clear</button>
                                        <button type="button" class="btn border-danger" id="deleteBtn">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- End of form creation --}}
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


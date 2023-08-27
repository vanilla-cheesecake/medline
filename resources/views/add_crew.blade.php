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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            {{-- CREATE FOR LIKE THIS  --}}
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- col 1 --}}
                                    <div class="row">
                                        {{-- PROFILE PHOTO HERE --}}
                                        {{-- input 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input1"></label>
                                                {{-- <input type="text" class="form-control" id="input1" name="input1"> --}}
                                            </div>
                                        </div>
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input2"></label>
                                                {{-- <input type="text" class="form-control" id="input2" name="input2"> --}}
                                            </div>
                                        </div>
                                        {{-- input 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input1"></label>
                                                {{-- <input type="text" class="form-control" id="input1" name="input1"> --}}
                                            </div>
                                        </div>
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input2"></label>
                                                {{-- <input type="text" class="form-control" id="input2" name="input2"> --}}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- PERSONAL INFORMATION --}}
                                    <div class="row">
                                        {{-- input 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name:</label>
                                                <input type="text" class="form-control" id="firstname" name="firstname"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Last Name:</label>
                                                <input type="text" class="form-control" id="lastname" name="lastname"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- input 3 --}}
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            autocomplete="off">
                                    </div>
                                    <div class="row">
                                        {{-- input 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birthdate">Birthdate:</label>
                                                <input type="date" class="form-control" id="Birthdate" name="Birthdate"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="number" class="form-control" id="phone" name="phone"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- input 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother">Mother:</label>
                                                <input type="text" class="form-control" id="mother" name="mother"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="spouse">Spouse:</label>
                                                <input type="text" class="form-control" id="spouse" name="spouse"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- input 1 --}}
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
                                        {{-- input 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="spouse">SRC:</label>
                                                <input type="text" class="form-control" id="spouse" name="spouse"
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
                                                <label for="sbookdateissued">SBOOK Date Issued:</label>
                                                <input type="date" class="form-control" id="sbookdateissued"
                                                    name="sbookdateissued" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- TRAVEL DOCS --}}
                                <div class="col-md-6">
                                    {{-- SBOOK --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sbookexpirydate">SBOOK Expiry Date:</label>
                                                <input type="date" class="form-control" id="sbookexpirydate"
                                                    name="sbookexpirydate" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sbookplaceissued">SBOOK Place Issued:</label>
                                                <input type="text" class="form-control" id="sbookplaceissued"
                                                    name="sbookplaceissued" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- PPORT --}}
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
                                                <label for="pportdateissued">PPORT Date Issued:</label>
                                                <input type="date" class="form-control" id="pportdateissued"
                                                    name="pportdateissued" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pportexpirydate">PPORT Expiry Date:</label>
                                                <input type="date" class="form-control" id="pportexpirydate"
                                                    name="pportexpirydate" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pportplaceissued">PPORT Place Issued:</label>
                                                <input type="text" class="form-control" id="pportplaceissued"
                                                    name="pportplaceissued" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- input 7 --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cocdateissued">COC Date Issued:</label>
                                                <input type="date" class="form-control" id="cocdateissued"
                                                    name="cocdateissued" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cocexpirydate">COC Expiry Date:</label>
                                                <input type="date" class="form-control" id="cocexpirydate"
                                                    name="cocexpirydate" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usvisa">U.S Visa:</label>
                                                <input type="date" class="form-control" id="usvisa" name="usvisa"
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
                                                    <option value="">ON</option>
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
                                                    <label class="form-check-label" for="radio_active">ACTIVE</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-danger" id="submitBtn">Submit</button>
                                                <button class="btn border-danger" id="clearBtn">Clear</button>
                                                <button class="btn border-danger" id="deleteBtn">Delete</button>
                                            </div>
                                        </div>
                                  
                                    </div>

                                </div>
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
{{--
First Name:      Last Name:         SBOOK:      SBook Date Issued:         
Address:                            SBK Expiry Date:   SBook Place Issued:
Birthdate:       Phone:
Mother:          Spouse:
Rank:            SRC: --}}
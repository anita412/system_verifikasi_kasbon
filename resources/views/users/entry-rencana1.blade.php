@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.css') }}">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Forms @endslot
            <!-- @slot('li_3') Wizard @endslot
            @slot('title') Wizard @endslot -->
            @slot('li_3') Validation @endslot
            @slot('title') Validation @endslot
        @endcomponent
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Entry Rencana / Realisasi 1</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form method="post" class="form-parsley">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  type="date" value="2022-02-02" id="example-date-input">    
                                                <!-- <input class="form-control" type="date" value="2011-08-19" id="example-date-input"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  type="time" value="13:45:00" id="example-time-input">    
                                                <!-- <input class="form-control" type="time" value="13:45:00" id="example-time-input"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Kasbon Rencana</option>
                                                    <option value="1">Kasbon Realisasi</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="-" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">User</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  placeholder="nama user" value="{{old('username')}}" name="username">    
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="9999999" aria-label="Disabled input example" disabled readonly>
                                            </div>               
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="LOGISTIK" aria-label="Disabled input example" disabled readonly>
                                            </div>                
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="D3" aria-label="Disabled input example" disabled readonly>
                                            </div>                
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>OPR1</option>
                                                    <option value="1">OPR2</option>
                                                    <option value="1">OPR3</option>
                                                    <option value="1">OPR4</option>
                                                    <option value="1">OPR5</option>
                                                    <option value="1">OPR6</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kurs</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>IDR</option>
                                                    <option value="1">Lainnya</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  placeholder="no. kontrak sesuai penggunaan kasbon" value="{{old('proyek')}}" name="proyek">    
                                                <!-- <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                                            <div class="col-lg-8">
                                                <textarea required parsley-type="text" rows="4" class="form-control"  placeholder="keterangan" value="{{old('penggunaan')}}" name="proyek"></textarea>    
                                                <!-- <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <a href="/dashboard" type="button" class="btn btn-danger">Cancel</a>
                                            <a href="/entry-rencana2" type="button" class="btn btn-primary px-4">Next</a>      
                                        </div>
                                    </div>
                                </div>
                            </form>   
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

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
                            <h4 class="card-title">Form Entry Rencana / Realisasi 2</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form action="/entry-rencana3" method="post" class="form-parsley">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Nilai / DPP</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  placeholder="nilai / dpp" value="{{old('dpp')}}" name="dpp">
                                                <!-- <input id="txtNameCard" name="txtNameCard" type="text" class="form-control"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">PPN</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  placeholder="nomor invoice" value="{{old('dpp')}}" name="dpp">    
                                                <!-- <input id="txtNameCard" name="txtNameCard" type="text" class="form-control"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">PPH</label>
                                            <div class="col-lg-8">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-lg-9">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                                            <div class="col-lg-8">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Nama Vendor</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>IMST</option>
                                                    <option value="1">IMSC</option>
                                                    <option value="1">IMS</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                                            <div class="col-lg-8">
                                                <input id="txtNameCard" placeholder="30 Hari" name="txtNameCard" type="text" class="form-control">
                                                <!-- <input class="form-control" type="date" value="2011-08-19" id="example-date-input"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  type="date" value="2022-02-02" id="example-date-input">    
                                            </div>                
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <a href="/entry-rencana1" type="button" class="btn btn-danger">Previous</a>
                                            <a href="/entry-rencana3" type="button" class="btn btn-primary px-4">Next</a>      
                                        </div>
                                    </div>
                                </div><!--end row-->
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
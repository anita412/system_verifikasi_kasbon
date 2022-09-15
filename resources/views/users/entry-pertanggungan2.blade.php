@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.css') }}">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Forms @endslot
            @slot('li_3') Wizard @endslot
            @slot('title') Wizard @endslot
        @endcomponent

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Entry Pertanggungan 2</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form method="post" class="form-parsley">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                                            <div class="col-lg-8">
                                                <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameShipping" class="col-lg-4 col-form-label">No VKB Kasbon</label>
                                            <div class="col-lg-8">
                                                <input required parsley-type="text" class="form-control"  placeholder="nomor pembayaran kasbon" value="{{old('vkb')}}" name="vkb">    
                                                <!-- <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control"> -->
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                                            <div class="col-lg-8">
                                                <input id="form-control" type="date" value="2022-09-10" id="example-date-input">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Tanggal Bayar Ke User</label>
                                            <div class="col-lg-8">
                                                <input id="form-control" type="date" value="2022-09-08" id="example-date-input">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Nilai Pertanggung Jawaban</label>
                                            <div class="col-lg-8">
                                                <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Tgl Pertanggung Jawaban</label>
                                            <div class="col-lg-8">
                                                <input id="form-control" type="date" value="2022-09-10" id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">Selisih Pertanggung Jawaban</label>
                                            <div class="col-lg-8">
                                                <input class="formcontrol" type="text" value="Rp 150.000,00" arial-label="Disable input example" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityBilling" class="col-lg-4 col-form-label">No VKB Selisih Pertanggung Jawaban</label>
                                            <div class="col-lg-8">
                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label">Nilai Pembayaran Selisih Pertanggung Jawaban</label>
                                            <div class="col-lg-8">
                                                <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="form-group row">
                                        <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label">Selisih Pertanggung Jawaban Akhir</label>
                                        <div class="col-lg-8">
                                            <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <a href="/entry-pertanggungan1" type="button" class="btn btn-danger">Previous</a>  
                                            <button type="submit" class="btn btn-primary px-4">Finish</button>
                                            <!-- <a href="/entry-pertanggungan1" type="button" class="btn btn-primary px-4">Finish</a>      -->
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
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
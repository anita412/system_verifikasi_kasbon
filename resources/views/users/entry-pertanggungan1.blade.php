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
            @slot('li_3') Validation @endslot
            @slot('title') Validation @endslot
        @endcomponent
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Entry Pertanggungan 1</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form action="/entry-pertanggungan2" method="post" class="form-parsley">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">No. Kasbon Rencana</label>
                                            <div class="col-lg-8">
                                                <input class="formcontrol" type="text" value="PPK/1/II/22" arial-label="Disable input example" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">User</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Felicya</option>
                                                    <option value="1">Jeanny</option>
                                                    <option value="2">Anita</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyBilling" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                            <div class="col-lg-8">
                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Rencana</option>
                                                    <option value="1">Realisasi</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">Nama Vendor</label>
                                            <div class="col-lg-8">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>PT.IMST</option>
                                                    <option value="1">PT.IMSC</option>
                                                    <option value="1">PT.IMSS</option>
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">NIP</label>
                                            <div class="col-lg-8">
                                                <input class="formcontrol" type="text" value="9999999" arial-label="Disable input example" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityBilling" class="col-lg-4 col-form-label">Po Vendor</label>
                                            <div class="col-lg-8">
                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceBilling" class="col-lg-4 col-form-label">Proyek</label>
                                            <div class="col-lg-8">
                                                <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyBilling" class="col-lg-4 col-form-label">Unit</label>
                                            <div class="col-lg-8">
                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFaxBilling" class="col-lg-4 col-form-label">Po Customer</label>
                                            <div class="col-lg-8">
                                                <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyBilling" class="col-lg-4 col-form-label">No. Invoice</label>
                                            <div class="col-lg-8">
                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtAddress2Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                                            <div class="col-lg-8">
                                                <textarea required parsley-type="text" rows="4" class="form-control"  placeholder="keterangan" value="{{old('penggunaan')}}" name="proyek"></textarea>    
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button href="/entry-rencana2" type="submit" class="btn btn-primary px-4">Next</button>
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
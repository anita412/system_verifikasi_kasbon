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
                            <h4 class="card-title">Form Entry Rencana / Realisasi 3                                                                                                                                                                                                                                     </h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">SPPH/KOI/LOI</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">SJN</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                                        <div class="col-lg-8">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                    <a href="/entry-rencana2" type="button" class="btn btn-danger">Previous</a>   
                                    <button type="submit" class="btn btn-primary px-4">Finish</button>
                                    </div>
                                </div>
                            </div><!--end row-->
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
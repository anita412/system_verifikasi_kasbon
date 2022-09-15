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
            @slot('li_4') pages @endslot
            @slot('li_5') Edit Table @endslot
            @slot('title') Edit Table @endslot
        @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Entry SPPD</h4>
                            <p class="text-muted mb-0"></p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button class="btn  btn-primary btn-sm mb-3" id="submit_data">Simpan</button>
                            <div class="table-responsive">
                                <table class="table  table-bordered table-sm">
                                    <thead>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Tanggal Masuk</label>
                                                        <div class="col-lg-9">
                                                            <input id="form-control" type="date" value="2022-09-08" id="example-date-input">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="txtFirstNameBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                                                        <div class="col-lg-8">
                                                            <input class="formcontrol" type="text" value="D12345" arial-label="Disable input example" disabled readonly>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </fieldset><!--end fieldset-->

                                        <tr>
                                            <th rowspan="2" class="align-center">  NO.  </th>
                                            <th rowspan="2">  NAMA  </th>
                                            <th rowspan="2">  NIP  </th>
                                            <th rowspan="2">  DEPARTEMEN  </th>
                                            <th rowspan="2">  TUJUAN/INSTANSI  </th>
                                            <th rowspan="2">  NO. KONTRAK / ATAS PO  </th>
                                            <th rowspan="2">  KASBON DINAS  </th>
                                            <th rowspan="2">  TANGGAL BERANGKAT  </th>
                                            <th rowspan="2">  TANGGAL PULANG  </th>
                                            <th rowspan="2">  HARI  </th>
                                            <th colspan="2">  NILAI SPPD  </th>
                                            <th rowspan="2">  UANG LUMPSUM  </th>
                                        </tr>
                                        <tr>
                                            <th>  KURS  </th>
                                            <th>  RATE  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Felicya</td>
                                            <td>19850330</td>
                                            <td>Teknologi</td>
                                            <td>PL Proyek TMII</td>
                                            <td>KA123456</td>
                                            <td>PPK/X/XX</td>
                                            <td>5/11/2022</td>
                                            <td>5/01/2023</td>
                                            <td>1</td>
                                            <td>IDR</td>
                                            <td>250.000</td>
                                            <td>250.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Felicya</td>
                                            <td>19850330</td>
                                            <td>Teknologi</td>
                                            <td>PL Proyek TMII</td>
                                            <td>KA123456</td>
                                            <td>PPK/X/XX</td>
                                            <td>5/11/2022</td>
                                            <td>5/01/2023</td>
                                            <td>1</td>
                                            <td>IDR</td>
                                            <td>250.000</td>
                                            <td>250.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Felicya</td>
                                            <td>19850330</td>
                                            <td>Teknologi</td>
                                            <td>PL Proyek TMII</td>
                                            <td>KA123456</td>
                                            <td>PPK/X/XX</td>
                                            <td>5/11/2022</td>
                                            <td>5/01/2023</td>
                                            <td>1</td>
                                            <td>IDR</td>
                                            <td>250.000</td>
                                            <td>250.000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Felicya</td>
                                            <td>19850330</td>
                                            <td>Teknologi</td>
                                            <td>PL Proyek TMII</td>
                                            <td>KA123456</td>
                                            <td>PPK/X/XX</td>
                                            <td>5/11/2022</td>
                                            <td>5/01/2023</td>
                                            <td>1</td>
                                            <td>IDR</td>
                                            <td>250.000</td>
                                            <td>250.000</td>
                                        </tr>
                                        <tr>
                                            <th colspan="12">Jumlah</th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span class="float-right">
                                <button id="but_add" class="btn btn-success btn-sm">Add New Row</button>
                            </span><!--end table-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div>     
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/tiny-editable/numeric-input-example.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootable/bootstable.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.tabledit.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
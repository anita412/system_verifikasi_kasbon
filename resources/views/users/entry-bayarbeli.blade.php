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
                            <h4 class="card-title">Form Tambah Pembayaran Pembelian</h4>
                            <p class="text-muted mb-0">A powerful jQuery wizard plugin that supports accessibility and HTML5</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Input</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">No. Referensi</label>
                                        <div class="col-lg-8">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" required parsley-type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jenis Pembayaran</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pembayaran Kasbon Rencana / Realisasi</option>
                                                <option value="1">Pembayaran Selisih Pertanggungan</option>
                                            </select>
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Mata Uang</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Rupiah</option>
                                                <option value="1">Dollar</option>
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
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">Pemasok</label>
                                        <div class="col-lg-8">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" required parsley-type="text" class="form-control" placeholder="ketik nama pemasok lalu enter untuk mencari">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Akun Bank</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>-- Pilih --</option>
                                                <option value="1">Bank Rakyat Indonesia (BRI)</option>
                                                <option value="1">Bank Negara Indonesia (BNI)</option>
                                                <option value="1">Bank Mandiri</option>
                                                <option value="1">Bank Central Asia (BCA)</option>
                                                <option value="1">Bank Permata</option>
                                                <option value="1">Bank Tabungan Negara (BTN)</option>
                                                <option value="1">Lainnya
                                                    <input type="text">
                                                </option>
                                            </select>
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label">No. Cek/Giro</label>
                                        <div class="col-lg-8">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" required parsley-type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Transaksi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->


                                
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
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
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" required parsley-type="text" class="form-control">
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
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>D1</option>
                                                <option value="1">D2</option>
                                                <option value="2">D3</option>
                                                <option value="3">D4</option>
                                            </select>
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Ekspor Impor</option>
                                                <option value="1">D2</option>
                                                <option value="2">D3</option>
                                                <option value="3">D4</option>
                                            </select>
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Nama Vendor</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>..</option>
                                                <option value="1">..</option>
                                            </select>
                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">No. Invoice</label>
                                        <div class="col-lg-8">
                                            <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">Tujuan Pembayaran</label>
                                        <div class="col-lg-8">
                                            <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Catatan</label>
                                        <div class="col-lg-8">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="row">
                                        <div class="col-sm-12 text-end">
                                        <button type="button" class="btn btn-danger">Cancel</button>    
                                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
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
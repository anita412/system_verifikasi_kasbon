@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Forms @endslot
            @slot('li_3') Wizard @endslot
            @slot('title') Wizard @endslot
        @endcomponent
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <div class="row">
            <div class="col-sm-12">
                            {!! Form::model($kasbon, ['method' => 'PATCH','route' => ['kasbons.update', $kasbon->id]]) !!}
                            {{ csrf_field() }}
                            <div class="col-sm-12">
                                <div class="card form-wizard-wrapper">
                                    <div class="card-header">
                                        <h4 class="card-title">Show {{$kasbon->nokasbon}}</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                                            <div class="col-lg-8">
                                                <div class="input-group">                                            
                                                    <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                                <input class="form-control" name="tglmasuk" type="date" value="{{$kasbon->tglmasuk}}" id="example-date-input" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                                    <div class="col-lg-8">
                                        <div class="input-group">                                            
                                        <span class="input-group-text"><i class="ti ti-alarm-clock font-16"></i></span>
                                        <input class="form-control" type="time" name="jammasuk" value="{{$kasbon->jammasuk}}" disabled>
                                        </div>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="jeniskasbon" value="{{$kasbon->jeniskasbon}}" disabled>
                                    </div>                
                                </div><!--end form-group-->
                            </div><!--end col-->
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                                        <div class="col-lg-8">
                                            <input required parsley-type="text" class="form-control" value="{{$kasbon->username}}" id="username" name="username" disabled>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{$kasbon->nip}}" aria-label="Disabled input example" nama="nip" disabled readonly>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{$kasbon->doksebelumnya}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kasbon->kodekasbon->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col--> 
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kasbon->kurs->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                                        <div class="col-lg-8">
                                            <input id="proyek" name="proyek" type="text" class="form-control" value="{{$kasbon->proyek}}" disabled>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                                        <div class="col-lg-8">
                                            <textarea id="uraianpengguna" name="uraianpengguna" rows="4" class="form-control" required parsley disabled>{{$kasbon->uraianpengguna}}</textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kasbon->jeniskasbon}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled >
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div>
                                    </div>
                                </div>
                            <div class="col-sm-12">
                                <div class="card form-wizard-wrapper">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row" >
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Nilai / DPP</label>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                    <input  required parsley id="iddpp" class="form-control"  name="iddpp" value="{{number_format($kasbon->iddpp)}}" disabled>
                                                    </div>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">PPN</label>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                    <input required parsley class="form-control input-numera" id="idppn" class="form-control"  name="idppn" value="{{number_format($kasbon->idppn)}}" disabled>
                                                    </div>   
                                                </div>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PPH</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control" type="text" value="{{$kasbon->pph->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled >
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp.</span>
                                                        <input required parsley class="form-control input-numera"id="idpph" class="form-control"  name="idpph" value="{{number_format($kasbon->idpph)}}" disabled>
                                                        </div>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp.</span>
                                                        <input class="form-control input-numer" id="total" name="total" disabled value="{{number_format($kasbon->total)}}">
                                                        </div>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">SJN</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="txtNameCard" name="sjn" type="text" class="form-control input-sj"  value="{{$kasbon->sjn}}" disabled> 
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <span class="input-group-text">Rp.</span>
                                                        <input required parsley class="form-control input-num" name="harga_jual" value="{{number_format($kasbon->harga_jual)}}" disabled>
                                                        </div>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="txtNameCard" name="po_vendor" type="text" class="form-control input-v" data-parsley-minlength="17" value="{{$kasbon->po_vendor}}" disabled>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="po_customer" name="po_customer" type="text" required parsley class="form-control" value="{{$kasbon->po_customer}}" disabled>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div class="col-sm-12">
                                <div class="card form-wizard-wrapper">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                                                <div class="col-lg-8">
                                                    <input  required parsley type="text" class="form-control" name ="namavendor" value="{{$kasbon->namavendor}}" disabled>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row POC">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                                                <div class="col-lg-4">
                                                    <input id="txtNameCard"  class="form-control" name="haritempo" value="{{$kasbon->haritempo}}" disabled>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-group">                                            
                                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                                    <input required parsley-type="text" class="form-control"  type="date"  id="example-date-input" name="tgltempo" value="{{$kasbon->tgltempo}}" disabled>    
                                                    </div>
                                                </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10" value="{{$kasbon->noinvoice}}" disabled> 
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">SPPH/KOI/LOI</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="spph" type="text" class="form-control input-koi" data-parsley-minlength="20" value="{{$kasbon->spph}}" disabled>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                                                <div class="col-lg-8">
                                                    <div class="input-group">                                            
                                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                                    <input required parsley id="txtNameCard" name="barang_datang" type="date" class="form-control" required parsley value="{{$kasbon->barang_datang}}" disabled>
                                                    </div>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="nopi" type="text" class="form-control input-pi" data-parsley-minlength="17" value="{{$kasbon->nopi}}" disabled>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                    </div>
                                    </div>
                                </div>
                             </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 text-end">
                                    <a href="{{route('vkb.index')}}" class="btn btn-danger">Cancel</a>   
                                    @if(isset($kasbon->id_verifikator_kasbon))
                                    <a href="{{route('kelengkapan_edit',$kasbon->kelengkapan->id)}}" class="btn btn-primary px-4">Next</a>
                                    @else
                                    <a href="{{route('kelengkapan',$kasbon->id)}}" class="btn btn-primary px-4">Next</a>
                                    @endif
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div><!--end card-->
            </div>
        </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/cleave/dist/cleave.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/cleave/dist/addons/cleave-phone.i18n.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection

@include('kasbons.script')

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
                        <form  action="{{ route('kasbons.store') }}" method="post" class="form-parsley">
                            {{ csrf_field() }}
                            <div class="col-sm-12">
                                <div class="card form-wizard-wrapper">
                                    <div class="card-header">
                                        <h4 class="card-title">Form Entry Kasbon Rencana</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" name="tglmasuk" type="date" value="{{$kelengkapan->kasbon->tglmasuk}}" disabled>
                                            </div>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="time" name="jammasuk" value="{{$kelengkapan->kasbon->jammasuk}}" disabled>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="jeniskasbon" value="{{$kelengkapan->kasbon->jeniskasbon}}" disabled>
                                    </div>                
                                </div><!--end form-group-->
                            </div><!--end col-->
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                                        <div class="col-lg-8">
                                            <input required parsley-type="text" class="form-control" value="{{$kelengkapan->kasbon->username}}" id="username" name="username" disabled>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{$kelengkapan->kasbon->nip}}" aria-label="Disabled input example" nama="nip" disabled readonly>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kelengkapan->kasbon->unit->name}}" aria-label="Disabled input example" nama="id_unit" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Kasbon</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="{{$kelengkapan->kasbon->nokasbon}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kelengkapan->kasbon->kodekasbon->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col--> 
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kelengkapan->kasbon->kurs->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                                        <div class="col-lg-8">
                                            <input id="proyek" name="proyek" type="text" class="form-control" value="{{$kelengkapan->kasbon->proyek}}" required disabled>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                                        <div class="col-lg-8">
                                            <textarea id="uraianpengguna" name="uraianpengguna" rows="4" class="form-control" required parsley value="" disabled>{{$kelengkapan->kasbon->uraianpengguna}}</textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtCityShipping" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$kelengkapan->kasbon->jenis->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
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
                                                    <input  required parsley id="iddpp" type="number" class="form-control"  name="iddpp" onkeyup="add_number()" value="{{$kelengkapan->kasbon->iddpp}}" disabled/>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">PPN</label>
                                                <div class="col-lg-8">
                                                    <input required parsley class="form-control input-numera" type="number" id="idppn" class="form-control"  name="idppn" value="{{$kelengkapan->kasbon->idppn}}" onkeyup="add_number()" disabled/>
                                                        {{-- <script>
                                                            var cleaveNumeral = new Cleave('.input-numera', {
                                                            numeral: true,
                                                            numeralThousandsGroupStyle: 'thousand'
                                                            });
                                                        </script> --}}
                                                    </div>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PPH</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control" type="text" value="{{$kelengkapan->kasbon->pph->name}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input required parsley class="form-control input-numera" type="number" id="idpph" class="form-control"  name="idpph" value="{{$kelengkapan->kasbon->idpph}}" onkeyup="add_number()" disabled/>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                                                    <div class="col-lg-8">
                                                        <input class="form-control input-numer" id="total" name="total" disabled value="{{$kelengkapan->kasbon->total}}" disabled/>
                                                            {{-- <script>
                                                                var cleaveNumeral = new Cleave('.input-numer', {
                                                                numeral: true,
                                                                numeralThousandsGroupStyle: 'thousand'
                                                                });
                                                            </script> --}}
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">SJN</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="txtNameCard" name="sjn" type="text" class="form-control input-sj" data-parsley-minlength="17" value="{{$kelengkapan->kasbon->sjn}}" disabled>
                                                        {{-- <script>
                                                            var cleave = new Cleave('.input-sj', {
                                                            prefix: 'SJIMST',
                                                            delimiter: '/',
                                                            blocks: [6, 4, 5],
                                                            uppercase: true
                                                        });
                                                        </script> --}}
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley class="form-control input-num" name="harga_jual" value="{{$kelengkapan->kasbon->harga_jual}}" disabled/>
                                                        <script>
                                                            var cleaveNumeral = new Cleave('.input-num', {
                                                            numeral: true,
                                                            numeralThousandsGroupStyle: 'thousand'
                                                            });
                                                        </script>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="txtNameCard" name="po_vendor" type="text" class="form-control input-v" data-parsley-minlength="17" value="{{$kelengkapan->kasbon->po_vendor}}" disabled>
                                                        {{-- <script>
                                                            var cleave = new Cleave('.input-v', {
                                                            prefix: 'POIMST',
                                                            delimiter: '/',
                                                            blocks: [6, 4, 5],
                                                            uppercase: true
                                                        });
                                                        </script> --}}
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                                                    <div class="col-lg-8">
                                                        <input required parsley id="po_customer" name="po_customer" type="text" required parsley class="form-control" value="{{$kelengkapan->kasbon->po_customer}}" disabled>
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
                                                    <input  required parsley type="text" class="form-control" name ="namavendor" value="{{$kelengkapan->kasbon->namavendor}}" disabled>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row POC">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                                                {{-- <div class="col-lg-4">
                                                    <input id="txtNameCard"  type="number" class="form-control" name="haritempo">
                                                </div> --}}
                                                <div class="col-lg-8">
                                                    <input required parsley-type="text" class="form-control"  type="date"  id="example-date-input" name="tgltempo" value="{{$kelengkapan->kasbon->tgltempo}}" disabled>    
                                                </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi" data-parsley-minlength="10" value="{{$kelengkapan->kasbon->noinvoice}}" disabled> 
                                                    {{-- <script>
                                                        var cleave = new Cleave('.input-noi', {
                                                        delimiters: ['/'],
                                                        blocks: [3, 1, 4],
                                                        uppercase: true
                                                    });
                                                    </script> --}}
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">SPPH/KOI/LOI</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="spph" type="text" class="form-control input-koi" data-parsley-minlength="20" value="{{$kelengkapan->kasbon->spph}}" disabled>
                                                    {{-- <script>
                                                        var cleave = new Cleave('.input-koi', {
                                                        prefix: 'SISDMIMST',
                                                        delimiter: '/',
                                                        blocks: [9, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script> --}}
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="barang_datang" type="date" class="form-control" required parsley value="{{$kelengkapan->kasbon->barang_datang}}" disabled>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                                                <div class="col-lg-8">
                                                    <input required parsley id="txtNameCard" name="nopi" type="text" class="form-control input-pi" data-parsley-minlength="17" value="{{$kelengkapan->kasbon->nopi}}" disabled>
                                                    {{-- <script>
                                                        var cleave = new Cleave('.input-pi', {
                                                        prefix: 'PIIMST',
                                                        delimiter: '/',
                                                        blocks: [6, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script> --}}
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                    </div>
                                    </div>
                                </div>
                             </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="row">
                        <div class="col-sm-12 text-end mt-2" style="margin-top: -2rem">
                            <button type="button" class="btn btn-danger">Cancel</button>   
                            @if(isset($kelengkapan->kasbon->id_verifikator_kasbon))
                            <a href="{{route('cek_kelengkapan',$kelengkapan->id)}}" class="btn btn-primary px-4">Next</a>
                            @else
                            <a href="{{route('cek_kelengkapan',$kelengkapan->id)}}" class="btn btn-primary px-4">Next</a>
                            @endif
                        </div>
                    </div> 
                    </div>
                </form>
                </div><!--end card-->
            </div>
        </div>
        
      
        

        <script>
            function add_number() {
              var first_number = parseFloat(document.getElementById("iddpp").value);
              if (isNaN(first_number)) first_number = 0;
              var second_number = parseFloat(document.getElementById("idppn").value);
              if (isNaN(second_number)) second_number = 0;
              var third_number = parseFloat(document.getElementById("idpph").value);
              if (isNaN(third_number)) third_number = 0;
              var result = first_number + second_number + third_number;
              document.getElementById("total").value = result;
            }
          </script>
               
                             
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


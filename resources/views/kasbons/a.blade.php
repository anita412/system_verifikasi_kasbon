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
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Entry Kasbon Rencana</h4>
                        <p class="text-muted mb-0">A powerful jQuery wizard plugin that supports accessibility and HTML5</p>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <form id="form-horizontal" action="{{ route('kasbons.store') }}" method="post" class="form-parsley form-horizontal form-wizard-wrapper">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Kasbon Rencana / Realisasi</label>
                                        <div class="col-lg-8">
                                            <select class="form-select" aria-label="Default select example"  id="jeniskasbon"  name="jeniskasbon" >
                                                <option value="Kasbon Realisasi">Kasbon Realisasi</option>
                                                <option value="Kasbon Rencana">Kasbon Rencana</option>
                                            </select>

                                        </div>                
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtEmailAddressBilling" class="col-lg-4 col-form-label">No. Dokumen Sebelumnya</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$terakhir->kodekasbon}}" aria-label="Disabled input example" name="doksebelumnya" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                                        <div class="col-lg-8">
                                            <input required parsley-type="text" class="form-control" value="{{ Auth::user()->name }}" id="namauser" name="namauser" disabled>
                                          
                           
<script>
  
    var kodekasbon = document.getElementById('kodekasbon');
    var jeniskasbon = document.getElementById('jeniskasbon');
    var uraianpengguna = document.getElementById('uraianpengguna');
    var middlename = document.getElementById('namauser');
    var formatkasbon = document.getElementById('formatkasbon');
    var po_customer = document.getElementById('po_customer');
    var proyek = document.getElementById('proyek');
    
    function makeFakeEmail() {
        var fakeEmail = kodekasbon.value + ';'  + jeniskasbon.value + ' AN ' + namauser.value + ';' + uraianpengguna.value + ';' + po_customer.value + ';' + proyek.value;
      formatkasbon.value = fakeEmail;
    }
    
    kodekasbon.addEventListener('keyup', makeFakeEmail);
    jeniskasbon.addEventListener('keyup', makeFakeEmail);
    uraianpengguna.addEventListener('keyup', makeFakeEmail);
    po_customer.addEventListener('keyup', makeFakeEmail);
    proyek.addEventListener('keyup', makeFakeEmail);
    namauser.addEventListener('keyup', makeFakeEmail);
  </script>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameShipping" class="col-lg-4 col-form-label">NIP</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{ Auth::user()->nip }}" aria-label="Disabled input example" nama="nip" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-4 col-form-label">Unit</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="{{ Auth::user()->unit->name }}" aria-label="Disabled input example" nama="id_unit" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" value="{{$nomer}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col--> 
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityShipping" class="col-lg-4 col-form-label">Jenis Kasbon</label>
                                            <div class="col-lg-8">
                                                <select required parsley class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_jenis">
                                                    <option value="" disabled selected hidden>Pilih Kasbon</option>
                                                    @foreach ($jenis as $jenis)
                                                    <option  value="{{$jenis->id}}">{{$jenis->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceShipping" class="col-lg-4 col-form-label">Kurs</label>
                                            <div class="col-lg-8">
                                                <select required parsley class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id_kurs">
                                                    <option value="" disabled selected hidden>Pilih Kurs</option>
                                                    @foreach ($kurs as $kurs)
                                                    <option  value="{{$kurs->id}}">{{$kurs->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityShipping" class="col-lg-4 col-form-label">Proyek</label>
                                            <div class="col-lg-8">
                                                <input id="proyek" name="proyek" type="text" class="form-control">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtAddress1Billing" class="col-lg-4 col-form-label">Uraian Penggunaan</label>
                                            <div class="col-lg-8">
                                                <textarea id="uraianpengguna" name="uraianpengguna" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Nilai / DPP</label>
                                            <div class="col-lg-8">
                                                <input  id="iddpp" type="number" class="form-control"  name="iddpp" onkeyup="add_number()"/>
                                                    {{-- <script>
                                                        var cleaveNumeral = new Cleave('.input-numeral', {
                                                        numeral: true,
                                                        numeralThousandsGroupStyle: 'thousand'
                                                        });
                                                    </script> --}}
                                                    {{-- <script type="text/javascript">
            
                                                        var rupiah = document.getElementById('iddpp');
                                                        rupiah.addEventListener('keyup', function(e){
                                                            // tambahkan 'Rp.' pada saat form di ketik
                                                            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                                                            rupiah.value = formatRupiah(this.value, 'Rp. ');
                                                        });
                                                 
                                                        /* Fungsi formatRupiah */
                                                        function formatRupiah(angka, prefix){
                                                            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                                            split   		= number_string.split(','),
                                                            sisa     		= split[0].length % 3,
                                                            rupiah     		= split[0].substr(0, sisa),
                                                            ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
                                                 
                                                            // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                                            if(ribuan){
                                                                separator = sisa ? '.' : '';
                                                                rupiah += separator + ribuan.join('.');
                                                            }
                                                 
                                                            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                                            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                                                        }
                                                    </script> --}}
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">PPN</label>
                                            <div class="col-lg-8">
                                                <input class="form-control input-numera" type="number" id="idppn" class="form-control"  name="idppn" onkeyup="add_number()"/>
                                                    {{-- <script>
                                                        var cleaveNumeral = new Cleave('.input-numera', {
                                                        numeral: true,
                                                        numeralThousandsGroupStyle: 'thousand'
                                                        });
                                                    </script> --}}
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">PPH</label>
                                            <div class="col-lg-4">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control input-numera" type="number" id="idpph" class="form-control"  name="idpph" onkeyup="add_number()"/>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Nominal Kasbon</label>
                                            <div class="col-lg-8">
                                                <input class="form-control input-numer" id="total" name="total" disabled/>
                                                    {{-- <script>
                                                        var cleaveNumeral = new Cleave('.input-numer', {
                                                        numeral: true,
                                                        numeralThousandsGroupStyle: 'thousand'
                                                        });
                                                    </script> --}}
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Nama Vendor</label>
                                            <div class="col-lg-8">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control" nama ="namavendor">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row POC">
                                            <label for="txtNameCard" class="col-lg-4 col-form-label">Tanggal Jatuh Tempo</label>
                                            <div class="col-lg-4">
                                                <input id="txtNameCard" name="txtNameCard" type="number" class="form-control" name="haritempo">
                                            </div>
                                            <div class="col-lg-4">
                                                <input required parsley-type="text" class="form-control"  type="date" value="2022-02-02" id="example-date-input" name="tgltempo">    
                                            </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6 ">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. Invoice</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="noinvoice" type="text" class="form-control input-noi">
                                                    <script>
                                                        var cleave = new Cleave('.input-noi', {
                                                        delimiters: ['/'],
                                                        blocks: [3, 1, 4],
                                                        uppercase: true
                                                    });
                                                    </script>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">SPPH/KOI/LOI</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="spph" type="text" class="form-control input-koi">
                                                    <script>
                                                        var cleave = new Cleave('.input-koi', {
                                                        prefix: 'SISDMIMST',
                                                        delimiter: '/',
                                                        blocks: [9, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">PO Vendor</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="po_vendor" type="text" class="form-control input-v">
                                                    <script>
                                                        var cleave = new Cleave('.input-v', {
                                                        prefix: 'POIMST',
                                                        delimiter: '/',
                                                        blocks: [6, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">PO Customer</label>
                                                <div class="col-lg-8">
                                                    <input id="po_customer" name="po_customer" type="text" class="form-control">
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">SJN</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="sjn" type="text" class="form-control input-sj">
                                                    <script>
                                                        var cleave = new Cleave('.input-sj', {
                                                        prefix: 'SJIMST',
                                                        delimiter: '/',
                                                        blocks: [6, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Harga Jual Ke Customer</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control input-num" name="harga_jual" />
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
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">Perkiraan Barang Datang</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="barang_datang" type="text" class="form-control">
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label">No. PI (FOCUS)</label>
                                                <div class="col-lg-8">
                                                    <input id="txtNameCard" name="nopi" type="text" class="form-control input-pi">
                                                    <script>
                                                        var cleave = new Cleave('.input-pi', {
                                                        prefix: 'PIIMST',
                                                        delimiter: '/',
                                                        blocks: [6, 4, 5],
                                                        uppercase: true
                                                    });
                                                    </script>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label"></label>
                                                <div class="col-lg-8">
                                                    <input  type="text" class="form-control" hidden><br>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="txtNameCard" class="col-lg-4 col-form-label"></label>
                                                <div class="col-lg-12">
                                                    <input  type="text" class="form-control" id="formatkasbon" name="formatkasbon" disabled><br>
                                                </div>
                                            </div><!--end form-group-->
                                        </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-12 text-end mt-2" style="margin-top: -2rem">
                                    <button type="button" class="btn btn-danger">Cancel</button>    
                                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                                </div>
                            </div> 
                    </form>
                    </div>
                </div>
                
                
                  
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
    <script src="{{ URL::asset('assets/plugins/cleave/dist/addons/cleave-phone.i18n.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

@include('kasbons.script')


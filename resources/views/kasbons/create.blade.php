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
                        <form  action="{{ route('kasbons.store') }}" method="post" class="form-parsley form-horizontal form-wizard-wrapper">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Tanggal Masuk</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" name="tglmasuk" type="date" value="{{$tglmasuk}}" id="example-date-input">
                                            </div>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-4 col-form-label">Jam Masuk</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="time" name="jammasuk" value="13:45:00" id="example-time-input">
                                    </div>
                                </div><!--end form-group-->
                            </div><!--end col-->
                            </div>
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
                                        <label for="txtFirstNameShipping" class="col-lg-4 col-form-label" value="">User</label>
                                        <div class="col-lg-8">
                                            <input required parsley-type="text" class="form-control" value="{{ Auth::user()->name }}" id="username" name="username" disabled>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                        </div>
                        <div class="row">
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
                                        <label for="txtEmailAddressShipping" class="col-lg-4 col-form-label">Kode Kasbon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" value="{{$nomer}}" aria-label="Disabled input example" id="kodekasbon" name="kodekasbon" disabled readonly>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col--> 
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


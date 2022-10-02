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
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-body"> 
                <div class="alert alert-danger mb-0" role="alert">
                    <h4 class="alert-heading font-18">Catatan :</h4>
                    <p>{{$kelengkapan->keterangan->catatan}}</p>
                        <h4 class="alert-heading font-18">Kekurangan : </h4>
                        @foreach ($detail as $detail)
                            <label for="">{{$loop->iteration}}.</label>
                            <label for="">{{$detail->kekurangan}}</label><br>
                        @endforeach
                </div>                                     
            </div><!--end card-body-->    
            <div class="col-sm-12">
                <div class="card form-wizard-wrapper">
                    <div class="card-header">
                        <h4 class="card-title" id="1-form-entry">Form Edit Rencana / Realisasi 1</h4>
                        <h4 class="card-title" id="2-form-entry">Form Edit Rencana / Realisasi 2</h4>
                        <h4 class="card-title" id="3-form-entry">Form Edit Rencana / Realisasi 3</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        {!! Form::model($kelengkapan, ['method' => 'PATCH','route' => ['kasbons.update', $kelengkapan->kasbon->id],'class' => 'form-parsley']) !!}
                        {{ csrf_field() }}
                        @include('kasbons.edit-1')
                        @include('kasbons.edit-2')
                        @include('kasbons.edit-3')
                        {!! Form::close() !!}
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
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

@include('kasbons.script')

@section('script')
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/cleave/dist/addons/cleave-phone.i18n.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/cleave/dist/cleave.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        $('#1-form-entry').show();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#form-entry-1').show();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        function form1(){
            $('#form-entry-1').show();
            $('#form-entry-2').hide();
            $('#form-entry-3').hide();
            $('#1-form-entry').show();
            $('#2-form-entry').hide();
            $('#3-form-entry').hide();
        }
        function form2(){
            $('#form-entry-1').hide();
            $('#form-entry-2').show();
            $('#form-entry-3').hide();
            $('#1-form-entry').hide();
            $('#2-form-entry').show();
            $('#3-form-entry').hide();
        }
        function form3(){
            $('#form-entry-1').hide();
            $('#form-entry-2').hide();
            $('#form-entry-3').show();
            $('#1-form-entry').hide();
            $('#2-form-entry').hide();
            $('#3-form-entry').show();
        }      
    </script>
@endsection



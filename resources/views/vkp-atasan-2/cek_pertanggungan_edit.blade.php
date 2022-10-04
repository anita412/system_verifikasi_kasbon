@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/huebee/huebee.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') Forms @endslot
            <!-- @slot('li_3') Wizard @endslot
            @slot('title') Wizard @endslot -->
            @slot('li_3') Verifikasi @endslot
            @slot('title') Verifikasi @endslot
        @endcomponent
            <div class="row">
                <div class="col-12">
                    @error('error')
                        <div class="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="0-form-entry">Show {{$pertanggungan->nokasbon}}</h4>
                            <h4 class="card-title" id="1-form-entry">Dokumen Vendor</h4>
                            <h4 class="card-title" id="2-form-entry">Dokumen Customer</h4>
                            <h4 class="card-title" id="3-form-entry">Dokumen Impor</h4>
                            <h4 class="card-title" id="4-form-entry">Dokumen Pajak</h4>
                            <h4 class="card-title" id="5-form-entry">Dokumen Dinas</h4>
                            <h4 class="card-title" id="6-form-entry">Keterangan</h4>
                       </div><!--end card-header-->
                        <div class="card-body bootstrap-select-1 form-wizard-wrapper">
                            {!! Form::model($pertanggungan, ['method' => 'PATCH','route' => ['vkp-atasan-2.update', $pertanggungan->id],'class' => 'form-parsley']) !!}
                                <input value="{{$pertanggungan->id}}" class="text-muted mb-0" name="id" hidden>
                                {{ csrf_field() }}
                                @include('vkp.edit-cek')
                                @include('vkp.edit-dokumen-vendor')
                                @include('vkp.edit-dokumen-customer')
                                @include('vkp.edit-dokumen-impor')
                                @include('vkp.edit-dokumen-pajak')
                                @include('vkp.edit-dokumen-dinas')
                                @include('vkp.edit-keterangan')
                                {!! Form::close() !!} 
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
           
@endsection

@include('kasbon.script')

@section('script')
<script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/huebee/huebee.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.forms-advanced.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.form-repeater.js') }}"></script>


<script>
    $('#0-form-entry').show();
    $('#1-form-entry').hide();
    $('#2-form-entry').hide();
    $('#3-form-entry').hide();
    $('#4-form-entry').hide();
    $('#5-form-entry').hide();
    $('#6-form-entry').hide();
    $('#form-entry-0').show();
    $('#form-entry-1').hide();
    $('#form-entry-2').hide();
    $('#form-entry-3').hide();
    $('#form-entry-4').hide();
    $('#form-entry-5').hide();
    $('#form-entry-6').hide();

    function form0(){
        $('#form-entry-0').show();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').hide();
        $('#0-form-entry').show();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').hide();
    }
    function form1(){
        $('#form-entry-0').hide();
        $('#form-entry-1').show();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').hide();
        $('#0-form-entry').hide();
        $('#1-form-entry').show();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').hide();
    }
    function form2(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').show();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').hide();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').show();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').hide();
    }
    function form3(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').show();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').hide();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').show();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').hide();
    }
    function form4(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').show();
        $('#form-entry-5').hide();
        $('#form-entry-6').hide();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').show();
        $('#5-form-entry').hide();
        $('#6-form-entry').hide();
    }
    function form5(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').show();
        $('#form-entry-6').hide();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').show();
        $('#6-form-entry').hide();
    }
    function form6(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').show();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').show();
    }
    function form7(){
        $('#form-entry-0').hide();
        $('#form-entry-1').hide();
        $('#form-entry-2').hide();
        $('#form-entry-3').hide();
        $('#form-entry-4').hide();
        $('#form-entry-5').hide();
        $('#form-entry-6').show();
        $('#0-form-entry').hide();
        $('#1-form-entry').hide();
        $('#2-form-entry').hide();
        $('#3-form-entry').hide();
        $('#4-form-entry').hide();
        $('#5-form-entry').hide();
        $('#6-form-entry').show();
    }
</script>
@endsection


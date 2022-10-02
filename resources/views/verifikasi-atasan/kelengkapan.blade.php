


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
                   @slot('li_3') Verifikasi @endslot
                   @slot('title') Verifikasi @endslot
               @endcomponent

            <style>
                td, th, tr, table {
               border: 0 !important;
               border-spacing:0 !important;
             }
             input {
                    text-align: center !important; 
              }
              h5 {
               text-align: center !important; 
              }
           </style>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
            <strong>Well Done 👍</strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row" id="form-entry-1">
            <div class="col-lg-6">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Vendor</h4>
                    </div><!--end card-header-->
                    {!! Form::model($kelengkapan, ['method' => 'PATCH','route' => ['verifikasi-atasan.update', $kelengkapan->id],'class' => 'form-parsley']) !!}
                    <input value="{{$kelengkapan->kasbon->id}}" class="text-muted mb-0" name="id" hidden>
                    {{ csrf_field() }}
                    <div class="card-body"> 
                       @include('verifikasi-atasan.dokumen-vendor')
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Customer</h4>
                    </div><!--end card-header-->
                    <div class="card-body"> 
                       @include('verifikasi-atasan.dokumen-customer')
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Impor</h4>
                    </div><!--end card-header-->
                    <div class="card-body"> 
                        @include('verifikasi-atasan.dokumen-impor')
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Pajak</h4>
                    </div><!--end card-header-->
                    <div class="card-body"> 
                        @include('verifikasi-atasan.dokumen-pajak')
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen Dinas</h4>
                    </div><!--end card-header-->
                    <div class="card-body"> 
                        @include('verifikasi-atasan.dokumen-dinas')
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                        <a href="#" type="button" onclick="form2()" class="btn btn-primary px-4">Next</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="card" id="form-entry-2">
            <div class="card-header">
                <h4 class="card-title">Keterangan</h4>
            </div><!--end card-header-->
            <div class="card-body"> 
                @include('verifikasi-atasan.keterangan')
                {!! Form::close() !!} 
            </div><!--end card-body-->
        </div><!--end card-->

       
@endsection
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
    $('#1-form-entry').show();
    $('#form-entry-1').show();
    $('#form-entry-2').hide();

    function form1(){
        $('#form-entry-1').show();
        $('#form-entry-2').hide();
    }
    function form2(){
        $('#form-entry-1').hide();
        $('#form-entry-2').show();
    }
</script>
@endsection



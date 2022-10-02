@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.css') }}">
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') Forms @endslot
            <!-- @slot('li_3') Wizard @endslot
            @slot('title') Wizard @endslot -->
            @slot('li_3') Entry Kasbon @endslot
            @slot('title') Entry @endslot
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
                    <div class="card form-wizard-wrapper">
                        <div class="card-header">
                            <h4 class="card-title" id="1-form-entry">Form Sppd 1</h4>
                            <h4 class="card-title" id="2-form-entry">Form Sppd 2</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form action="{{ route('sppd.store') }}" method="post" class="form-parsley">
                                {{ csrf_field() }}
                               @include('sppd.sppd-1')
                               @include('sppd.sppd-2')
                            </form>   
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

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

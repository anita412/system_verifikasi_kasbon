@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/lightpick/lightpick.css') }}" rel="stylesheet" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Dastone @endslot
@slot('li_2') Pages @endslot
@slot('li_3') Profile @endslot
@slot('title') Profile @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <!--end card-body-->
            <div class="card-body">
                <div class="dastone-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="dastone-profile-main">
                                <div class="dastone-profile-main-pic">
                                    <img src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '') ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}" alt="" height="110" class="rounded-circle">
                                    <span class="dastone-profile_main-pic-change" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                        <i class="mdi mdi-pencil"></i>
                                    </span>
                                </div>
                                <div class="dastone-profile_user-detail">
                                    <h5 class="dastone-user-name">{{ Auth::user()->name }}</h5>
                                    <p class="mb-0 dastone-user-name-post">{{ Auth::user()->role->name_role }}</p>
                                </div>

                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> phone </b> : +91 23456 78910</li>
                                <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                <li class="mt-2"><i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> Website </b> :
                                    <a href="https://mannatthemes.com" class="font-14 text-primary">https://mannatthemes.com</a>
                                </li>
                            </ul>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end f_profile-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>

            
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
                            <strong>Well Done 👍</strong>{{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                       
                                    <div class="col">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <form action="/updateprofile" method="post" class="form-parsley" id="myForm">
                                  {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nama</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" required parsley-type="text" value="{{old('name', auth()->user()->name)}}" name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Username</label>
                                        <div class="col-lg-9 col-xl-8">
                                    <input class="form-control @error('username') is-invalid @enderror" required parsley-type="text" name='username' value="{{old('username', auth()->user()->username)}}">
                                    @error('username')
                                    <label class="invalid-feedback">
                                    {{$message}}
                                    @enderror
                                    </div>
                                </div>

                               
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">NIP</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <input required parsley-type="text" class="form-control" value="{{old('nip', auth()->user()->nip)}}" name="nip" placeholder="Phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Unit</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{old('unit', auth()->user()->unit->name_unit)}}" placeholder="Email" aria-describedby="basic-addon1" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Role</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{old('role', auth()->user()->role->name_role)}}" placeholder="Email" aria-describedby="basic-addon1" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                                        <button type="button" onclick="myFunction()" class="btn btn-sm btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--end col-->
                    
                    <div class="col-lg-6 col-xl-6 mb-3">   
                        @if (session()->has('successp'))
                        <div class="alert alert-success alert-dismissible fade show border-0 mb-0" role="alert">
                            {{session('successp')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> 
                        @endif
                        <div class="col-12 col-lg-12 m-auto">
                          @if (session()->has('failed'))
                          <div class="alert alert-danger alert-dismissible fade show border-0 mb-0" role="alert">
                            {{session('failed')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> 
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <!--end card-header-->
                            <form action="/updatepassword" method="post" class="form-parsley">
                                {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Password Lama</label>
                                    <div class=" col-lg-9 col-xl-8 form-parsley">
                                        <input required type="password" class="form-control"  placeholder="Password" name="old_password"/>
                                        @error('old_password')
                                    <label class="invalid-feedback">
                                    {{$message}}
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Password Baru</label>
                                    <div class=" col-lg-9 col-xl-8 form-parsley">
                                        <input type="password" id="pass2" class="form-control form-control @error('password') is-invalid @enderror" required placeholder="Password" name="password"/>
                                        @error('password')
                                        <label class="invalid-feedback">
                                        {{$message}}
                                        @enderror
                                   </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Konfirmasi Password</label>
                                    <div class=" col-lg-9 col-xl-8 form-parsley">
                                        <input type="password" class="form-control form-control @error('password_confirmation') is-invalid @enderror" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" name="password_confirmation"/>
                                        @error('password_confirmation')
                                        <label class="invalid-feedback">
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Change Password</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Other Settings</h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                    <label class="form-check-label" for="Email_Notifications">
                                        Email Notifications
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                    <label class="form-check-label" for="API_Access">
                                        API Access
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                </div>
                <!--end row-->
            <!--end tab-pane-->
        </div>
        <!--end tab-content-->
    </div>
    <!--end col-->
</div>

<script>
    function myFunction() {
      document.getElementById("myForm").reset();
    }
    </script>

@endsection

@section('script')


{{-- <script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#avatarError').text('');
        $('#mobilenumberError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#avatarError').text('');
                $('#mobilenumberError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                //$('#nameError').text(response.responseJSON.errors.name);
                $('#avatarError').text(response.responseJSON.errors.avatar);
                $('#mobilenumberError').text(response.responseJSON.errors.mobilenumber);
            }
        });
    });
</script> --}}

<script src="{{ URL::asset('assets/plugins/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/lightpick.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.profile.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.validation.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
@endsection
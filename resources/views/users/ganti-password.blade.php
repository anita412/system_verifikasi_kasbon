@extends('layout.layout')
@section('content')
<style>
    .arrow {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
    }
    
    .down {
      transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
    }
    .invalid-feedback{
      font-size: 10px;
    }
    
    </style>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="multisteps-form mb-9">
<div class="row">
<div class="col-12 col-lg-8 mx-auto my-5">
</div>
</div>
<div class="row">
<div class="col-12 col-lg-8 m-auto">
  @if (session()->has('success'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="col-12 col-lg-8 m-auto">
  @if (session()->has('failed'))
<div class="alert alert-danger alert-dismissible text-white" role="alert">
  {{session('failed')}}
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card" style="margin-top: 50px;">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h5 class=" text-md text-white mb-0" style="text-align: center;">Change Password</h5>
</div>
</div>
<div class="card-body">
  <form action="/updatepassword" method="post">
    {{-- @method('put') --}}
  {{ csrf_field() }}
<div class="multisteps-form__content">
<div class="row mt-3">
  <div class="col-12 col-sm-6">
  <div class="input-group input-group-dynamic">
  <label class="form-label">Current Password</label>
  <input class="multisteps-form__input form-control" type="password" name="old_password">
  @error('current_password')
  <label class="invalid-feedback">
  {{$message}}
  @enderror
  </div>
  </div>
<div class="col-12 col-sm-6 mt-3 mt-sm-0">
  <div class="input-group input-group-dynamic">
  <label class="form-label">Password</label>
  <input class="multisteps-form__input form-control @error('password') is-invalid @enderror" name="password" type="password">
  @error('password')
  <label class="invalid-feedback">
  {{$message}}
  @enderror
  </div>
  </div>
  </div>
  <div class="row mt-3">
  <div class="col-12 col-sm-6">
  <div class="input-group input-group-dynamic">
  <label class="form-label"></label>
  <input class="multisteps-form__input form-control" type="hidden" >
  @error('current_password')
  <label class="invalid-feedback">
  {{$message}}
  @enderror
  </div>
  </div>
  <div class="col-12 col-sm-6 mt-3 mt-sm-0">
  <div class="input-group input-group-dynamic">
  <label class="form-label">Password Confirmation</label>
  <input class="multisteps-form__input form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" >
  @error('password_confirmation')
  <label class="invalid-feedback">
  {{$message}}
  @enderror
  </div>
  </div>
  </div>

  <div class="button-row d-flex mt-4" style="float: left;">
    <a href="/viewprofile" class="btn bg-white-dark ms-auto mb-0 js-btn-next" data-class ="bg-white"> Kembali</a>
    </div>
    <div class="button-row d-flex mt-4">
      <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"> Simpan</button>
      </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer py-4  ">
<div class="container-fluid">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-6 mb-lg-0 mb-4">
<div class="copyright text-center text-sm text-muted text-lg-start">
    
@endsection

@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') SPPD @endslot
            @slot('li_3') List @endslot
            @slot('title') List SPPD @endslot
        @endcomponent

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
            <strong>Well Done 👍</strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">                    
                        <div class="card-header">
                            <h4 class="card-title" style="display: inline;">SPPD</h4>
                             <div class="mt-1 float-end">
                                <a class=" btn btn-sm btn-soft-primary" href="{{route('sppd.create')}}" role="button"><i class="fas fa-plus me-2"></i>New SPPD</a>
                            </div> 
                            <p class="text-muted mb-0">
                            </p>
                        </div>
                        <div class="card-body">
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <th>No SPPD</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($sppd as $sppds)
                                <tr>
                                    <td>{{$sppds->tglmasuk}}</td>
                                    <td>{{$sppds->no_sppd}}</td>
                                    <td>{{$sppds->jumlah}}</td>
                                    <td class="text-end"> 
                                        <a href="{{route('sppd.show',$sppds->id)}}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="mdi mdi-trash-can-outline"></i></button></td>
                                </tr>
                                @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

@endsection
@section('script')
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.datatable.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="assets/plugins/tippy/tippy.all.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
@endsection

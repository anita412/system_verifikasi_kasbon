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
            @slot('li_2') Nonkasbon @endslot
            @slot('li_3') List @endslot
            @slot('title') List Nonkasbon @endslot
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
                            <h4 class="card-title" style="display: inline;">Non Kasbon</h4>
                             <div class="mt-1 float-end">
                                <a class=" btn btn-sm btn-soft-primary" href="{{route('nonkasbon.create')}}" role="button"><i class="fas fa-plus me-2"></i>New Non Kasbon</a>
                            </div> 
                            <p class="text-muted mb-0">
                            </p>
                        </div>
                        <div class="card-body">
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <th>User</th>
                                    <th>No Kasbon</th>
                                    <th>Tujuan Pembayaran</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($nonkasbon as $nonkasbon)
                                @if(isset($nonkasbon->verifikasinonkasbon->status))
                                <tr>
                                    <td>{{$nonkasbon->tglmasuk}}</td>
                                    <td>{{$nonkasbon->user->name}}</td>
                                    <td>{{$nonkasbon->no_nonkasbon}}</td>
                                    <td>{{$nonkasbon->tujuanpembayaran}}</td>
                                    <td>
                                    @if($nonkasbon->verifikasinonkasbon->status == "Dalam Proses")
                                            <label class="badge rounded-pill bg-primary">Dalam Proses</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Revisi")
                                            <label class="badge rounded-pill bg-warning">Revisi</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Ditolak")
                                            <label class="badge rounded-pill bg-danger">Ditolak</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Terverifikasi")
                                            <label class="badge rounded-pill bg-success">Terverifikasi</label>
                                    @endif
                                    </td>
                                    <td class="text-end">
                                        @if($nonkasbon->verifikasinonkasbon->status == "Dalam Proses")
                                        <a href="{{ route('nonkasbon.show',$nonkasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Revisi")
                                        <a href="{{ route('nonkasbon.edit',$nonkasbon->id) }}" class="btn btn-warning btn-sm"><i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="{{ route('nonkasbon.show',$nonkasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Ditolak")
                                        <a href="{{ route('nonkasbon.show',$nonkasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        <a type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDanger_{{$nonkasbon->id}}" data-action="{{ route('nonkasbon.destroy', $nonkasbon->id) }}"><i class="las la-trash font-16"></i></a>
                                        @elseif($nonkasbon->verifikasinonkasbon->status == "Terverifikasi")
                                        <a href="{{ route('nonkasbon.generatePDF',$nonkasbon->id) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="btn btn-danger btn-sm"><i class="mdi mdi-printer"></i></a>
                                        <a href="{{ route('nonkasbon.show',$nonkasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                <div class="modal fade" id="exampleModalDanger_{{$nonkasbon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                    <div class="col-lg-12" style="text-align: center;">
                                                        <h4>Are You Sure Want To Delete ?</h4> 
                                                    </div><!--end col-->                                                 
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">  
                                                <form action="{{ route('nonkasbon.destroy',$nonkasbon->id) }}" method="POST" style="display: inline">
                                                
                                                    @method('delete')
                                                    {{ csrf_field() }}                                                  
                                                    <button type="submit" class="btn btn-soft-danger btn-sm">Yes</button>
                                                </form>  
                                                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->
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

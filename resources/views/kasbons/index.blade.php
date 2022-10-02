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
            @slot('li_2') Kasbon @endslot
            @slot('li_3') List @endslot
            @slot('title') List Kasbon @endslot
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
                            <h4 class="card-title" style="display: inline;">Buttons example</h4>
                            <div class="mt-1 float-end">
                                <a class=" btn btn-sm btn-soft-primary"  href="{{ route('kasbons.create') }}" role="button"><i class="fas fa-plus me-2"></i>New Kasbon</a>
                            </div>
                            <p class="text-muted mb-0">
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No Kasbon</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Kasbon</th>
                                    <th>Nominal Kasbon</th>
                                    <th>No Invoice</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th style="width:0%">Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($kasbons as $kasbons)
                                <tr>
                                    <td>{{$kasbons->nokasbon}}</td>
                                    <td>{{$kasbons->tglmasuk}}</td>
                                    <td>{{$kasbons->jeniskasbon}}</td>
                                    <td>{{$kasbons->total}}</td>
                                    <td>{{$kasbons->noinvoice}}</td>
                                    <td>{{$kasbons->jenis->name}}</td>
                                    <td>
                                        @if($kasbons->status == "Dalam Proses")
                                        <label class="badge rounded-pill bg-primary">{{$kasbons->status}}</label>
                                        @elseif($kasbons->status == "Terverifikasi")
                                        <label class="badge rounded-pill bg-success">{{$kasbons->status}}</label>
                                        @elseif($kasbons->status == "Ditolak")
                                        <label class="badge rounded-pill bg-danger">{{$kasbons->status}}</label>
                                        @elseif($kasbons->status == "Revisi")
                                        <label class="badge rounded-pill bg-warning">{{$kasbons->status}}</label>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        @if($kasbons->status == "Dalam Proses")
                                        @if(isset($kasbon->id_verifikator_kasbon))
                                        <a href="{{ route('kasbons.show',$kasbons->kelengkapan->id) }}"><i class="las la-info-circle text-secondary font-16"></i></a> 
                                        @else
                                        <a href="{{ route('kasbons.show',$kasbons->id) }}"><i class="las la-info-circle text-secondary font-16"></i></a> 
                                        @endif
                                        @elseif($kasbons->status == "Terverifikasi")
                                        <a href="{{ route('kasbons.generatePDF',$kasbons->kelengkapan->id) }}" target="_blank" class="btn btn-danger btn-sm"><i class="mdi mdi-printer"></i></a> 
                                        <a href="{{ route('pertanggungan.insert',$kasbons->id) }}" class="btn btn-success btn-sm"><i class="mdi mdi-send"></i></a> 
                                        @elseif($kasbons->status == "Ditolak")
                                        <a href="{{ route('kasbons.edit',$kasbons->id) }}"><i class="las la-info-circle text-secondary font-16"></i></a>
                                        <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                        @elseif($kasbons->status == "Revisi")
                                        <a href="{{ route('kasbons.edit',$kasbons->kelengkapan->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                        <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
           
            <div class="modal fade" id="exampleModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
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
                            <form action="{{ route('kasbons.destroy',$kasbons->id) }}" method="POST" style="display: inline">
                                @method('delete')
                                {{ csrf_field() }}                                                  
                                <button type="submit" class="btn btn-soft-danger btn-sm">Yes</button>
                            </form>  
                            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-dismiss="modal">Close</button>
                        </div><!--end modal-footer-->
                    </div><!--end modal-content-->
                </div><!--end modal-dialog-->
            </div><!--end modal-->

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
<script>
    $(document).ready(function () {
    $('#datatable2').DataTable({
    order: [[0, 'desc']],
    });
});
</script>
@endsection

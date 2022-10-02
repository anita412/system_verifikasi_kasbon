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
                                    <th>Name</th>
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
                                        <a href={{ route('verifikator.edit',$kasbons->id) }} class="btn btn-outline-primary btn-sm"><i class="mdi mdi-send me-2"></i>Cek Dokumen</a> 
                                        @elseif($kasbons->status == "Terverifikasi")
                                        <a href={{ route('verifikator.edit',$kasbons->id) }} class="btn btn-outline-success btn-sm"><i class="mdi mdi-send me-2"></i>Lihat Dokumen</a> 
                                        @elseif($kasbons->status == "Ditolak")
                                        <a href={{ route('verifikator.edit',$kasbons->id) }} class="btn btn-outline-danger btn-sm"><i class="mdi mdi-send me-2"></i>Lihat Dokumen</a> 
                                        @elseif($kasbons->status == "Revisi")
                                        <a href={{ route('verifikator.edit',$kasbons->id) }} class="btn btn-outline-warning btn-sm"><i class="mdi mdi-send me-2"></i>Lihat Dokumen</a> 
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
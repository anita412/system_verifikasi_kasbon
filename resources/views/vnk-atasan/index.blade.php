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
            @slot('li_2') nonkasbon @endslot
            @slot('li_3') List @endslot
            @slot('title') List nonkasbon @endslot
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
                            <h4 class="card-title" style="display: inline;">nonkasbon</h4>
                            <p class="text-muted mb-0">
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th hidden></th>
                                    <th>Tanggal Masuk</th>
                                    <th>User</th>
                                    <th>No nonkasbon</th>
                                    <th>Tujuan Pembayaran</th>
                                    <th>Status</th>
                                    <th style="width: 0%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($nonkasbon as $nonkasbon)
                                @if(isset($nonkasbon->verifikasinonkasbon->vnk_a_1))
                                <tr>
                                    <td hidden>{{$nonkasbon->created_at}}</td>
                                    <td>{{$nonkasbon->tglmasuk}}</td>
                                    <td>{{$nonkasbon->user->name}}</td>
                                    <td>{{$nonkasbon->no_nonkasbon}}</td>
                                    <td>{{$nonkasbon->tujuanpembayaran}}</td>
                                    <td>
                                    @if($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Dalam Proses")
                                            <label class="badge rounded-pill bg-primary">Dalam Proses</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Revisi")
                                            <label class="badge rounded-pill bg-warning">Menunggu Revisi</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Ditolak")
                                            <label class="badge rounded-pill bg-danger">Ditolak</label>
                                        @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Terverifikasi")
                                            <label class="badge rounded-pill bg-success">Menunggu Verifikasi</label>
                                        @endif</td>
                                    <td class="text-end">
                                        @if(isset($nonkasbon->verifikasinonkasbon->id_vnk_a_1))
                                            @if($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Dalam Proses")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon_edit',$nonkasbon->id) }} class="btn btn-outline-primary btn-sm"><i class="mdi mdi-send me-2"></i>Cek nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Terverifikasi")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon_edit',$nonkasbon->id) }} class="btn btn-outline-success btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Ditolak")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon_edit',$nonkasbon->id) }} class="btn btn-outline-danger btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Revisi")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon_edit',$nonkasbon->id) }} class="btn btn-outline-warning btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @endif
                                        @else
                                            @if($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Dalam Proses")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon',$nonkasbon->id) }} class="btn btn-outline-primary btn-sm"><i class="mdi mdi-send me-2"></i>Cek nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Terverifikasi")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon',$nonkasbon->id) }} class="btn btn-outline-success btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Ditolak")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon',$nonkasbon->id) }} class="btn btn-outline-danger btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @elseif($nonkasbon->verifikasinonkasbon->vnk_a_1 == "Revisi")
                                            <a href={{ route('vnk-atasan.cek_nonkasbon',$nonkasbon->id) }} class="btn btn-outline-warning btn-sm"><i class="mdi mdi-send me-2"></i>Lihat nonkasbon</a> 
                                            @endif
                                    </td>
                                    @endif
                                    @endif
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

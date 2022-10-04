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
                            <h4 class="card-title" style="display: inline;">Kasbon</h4>
                            <div class="mt-1 float-end">
                                <a class=" btn btn-sm btn-soft-primary"  href="{{ route('kasbon.create') }}" role="button"><i class="fas fa-plus me-2"></i>New Kasbon</a>
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
                                    @foreach ($kasbon as $kasbon)
                                    @if($kasbon->id_user == Auth::user()->id)
                                <tr>
                                    <td>{{$kasbon->nokasbon}}</td>
                                    <td>{{$kasbon->tglmasuk}}</td>
                                    <td>{{$kasbon->jeniskasbon}}</td>
                                    <td>Rp. {{number_format($kasbon->total)}}</td>
                                    <td>{{$kasbon->noinvoice}}</td>
                                    <td>{{$kasbon->jenis->name}}</td>
                                    <td>
                                        @if($kasbon->verifikasikasbon->status == "Dalam Proses")
                                            <label class="badge rounded-pill bg-primary">Dalam Proses</label>
                                        @elseif($kasbon->verifikasikasbon->status == "Revisi")
                                            <label class="badge rounded-pill bg-warning">Revisi</label>
                                        @elseif($kasbon->verifikasikasbon->status == "Ditolak")
                                            <label class="badge rounded-pill bg-danger">Ditolak</label>
                                        @elseif($kasbon->verifikasikasbon->status == "Terverifikasi")
                                            <label class="badge rounded-pill bg-success">Terverifikasi</label>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        @if($kasbon->verifikasikasbon->status == "Dalam Proses")
                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @elseif($kasbon->verifikasikasbon->status == "Revisi")
                                        <a href="{{ route('kasbon.edit',$kasbon->id) }}" class="btn btn-warning btn-sm"><i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @elseif($kasbon->verifikasikasbon->status == "Ditolak")
                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                        @elseif($kasbon->verifikasikasbon->status == "Terverifikasi")
                                        @if(isset($kasbon->verifikasikasbon->vkb_a_2))
                                        @if(isset($kasbon->pertanggungan->id))
                                        <a href="{{ route('pertanggungan.show',$kasbon->pertanggungan->id) }} " data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Pertanggungan" class="btn btn-success btn-sm"><i class="mdi mdi-send"></i></a> 
                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @else
                                        <a href="{{ route('pertanggungan.insert',$kasbon->id) }} " data-bs-toggle="tooltip" data-bs-placement="top" title="Ajukan Pertanggungan" class="btn btn-success btn-sm"><i class="mdi mdi-send"></i></a> 
                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                        @endif
                                        @endif
                                        @endif

                                        {{-- @if(isset($kasbon->verifikasikasbon->vkb_a_2))
                                            @if($kasbon->verifikasikasbon->vkb_a_2 == "Terverifikasi")
                                                <a href="{{ route('pertanggungan.insert',$kasbon->id) }} " data-bs-toggle="tooltip" data-bs-placement="top" title="Ajukan Pertanggungan" class="btn btn-success btn-sm"><i class="mdi mdi-send"></i></a> 
                                                    @if(isset($kasbon->pertanggungan->id))
                                                        <a href="{{ route('kasbon.show',$kasbon->id) }} " data-bs-toggle="tooltip" data-bs-placement="top" title="Ajukan Pertanggungan" class="btn btn-success btn-sm"><i class="mdi mdi-send"></i></a> 
                                                    @else
                                                        <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                                    @endif
                                            @elseif($kasbon->verifikasikasbon->vkb_a_2 == "Ditolak")
                                                <a href="{{ route('kasbon.edit',$kasbon->id) }}"><i class="las la-info-circle text-secondary font-16"></i></a>
                                                <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                            @elseif($kasbon->verifikasikasbon->vkb_a_1 == "Dalam Proses" or $kasbon->verifikasikasbon->vkb_a_1 == "Terverifikasi")
                                                    <a href="{{ route('kasbon.show',$kasbon->id) }}"class="btn btn-primary btn-sm"><i class="mdi mdi-information-outline"></i></a>
                                             @endif
                                        @elseif(isset($kasbon->verifikasikasbon->vkb))
                                            @if($kasbon->verifikasikasbon->vkb == "Revisi")
                                                <a href="{{ route('kasbon.edit',$kasbon->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                                <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                            @endif
                                        @elseif(isset($kasbon->verifikasikasbon->vkb_a_1))
                                            @if($kasbon->verifikasikasbon->vkb_a_1 == "Revisi")
                                                <a href="{{ route('kasbon.edit',$kasbon->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                                <button type="submit" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#exampleModalDanger"><i class="las la-trash text-secondary font-16"></i></button>
                                            @endif
                                        @endif --}}
                                    </td>
                                    @endif
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
                            <form action="{{ route('kasbon.destroy',$kasbon->id) }}" method="POST" style="display: inline">
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
<script src="{{ URL::asset('assets/plugins/tippy/tippy.all.min.js') }}"></script>
<script src="assets/plugins/tippy/tippy.all.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script>
    $(document).ready(function () {
    $('#datatable2').DataTable({
    order: [[0, 'desc']],
    });
});
</script>
@endsection


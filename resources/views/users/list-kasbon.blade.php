@extends('layout.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') pages @endslot
            @slot('li_3') Edit Table @endslot
            @slot('title') Edit Table @endslot
        @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Table With Button</h4>
                            <p class="text-muted mb-0">Add toolbar column with edit and delete buttons.</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button class="btn  btn-primary btn-sm mb-3" id="submit_data">Submit</button>
                            <div class="table-responsive">
                                <table class="table  table-bordered table-sm" id="makeEditable">
                                    <thead>
                                        <tr>
                                            <th>No. Kasbon</th>
                                            <th>Kode Kasbon</th>
                                            <th>Jenis Kasbon</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Jatuh Tempo</th>
                                            <th>Uraian Penggunaan</th>
                                            <th>Nominal Kasbon</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PPK/1/II/22</td>
                                            <td>D3</td>
                                            <td>OPR5</td>
                                            <td>01/01/2022</td>
                                            <td>01/04/2022</td>
                                            <td>PELUNASAN PENGUJIAN TEST GENSET DAN PENGECEKAN PANEL</td>
                                            <td>1.000.000</td>
                                            <td><span class="badge badge-soft-success">Approved</span></td>
                                            <td><button>Pertanggungan</button></td>
                                        </tr>
                                        <tr>
                                            <td>PPK/2/II/22</td>
                                            <td>D4</td>
                                            <td>OPR6</td>
                                            <td>22/08/2022</td>
                                            <td>22/11/2022</td>
                                            <td>PELUNASAN PENGUJIAN BUS LISTRIK</td>
                                            <td>23.000.000</td>
                                            <td><span class="badge badge-soft-warning">Proses</span></td>
                                        </tr>
                                        <tr>
                                            <td>PPK/3/II/22</td>
                                            <td>D5</td>
                                            <td>OPR7</td>
                                            <td>18/04/2022</td>
                                            <td>18/07/2022</td>
                                            <td>PELUNASAN PEMBELIAN RODA</td>
                                            <td>45.000.000</td>
                                            <td><span class="badge badge-soft-danger">Ditolak</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>PPK/3/II/22</td>
                                            <td>D5</td>
                                            <td>OPR7</td>
                                            <td>18/04/2022</td>
                                            <td>18/07/2022</td>
                                            <td>PELUNASAN PEMBELIAN RODA</td>
                                            <td>45.000.000</td>
                                            <td><span class="badge badge-soft-warning">Proses</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span class="float-right">
                                <button id="but_add" class="btn btn-success btn-sm">Add New Row</button>
                            </span><!--end table-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div>

          
@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/tiny-editable/mindmup-editabletable.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/tiny-editable/numeric-input-example.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/bootable/bootstable.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.tabledit.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
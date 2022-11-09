@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') Dashboard @endslot
            @slot('title') IMST Dashboard @endslot
        @endcomponent

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title" id="jkasbon">Jumlah Kasbon</h4>
                                <h4 class="card-title" id="jnkasbon">Jumlah NonKasbon</h4>
                                <h4 class="card-title" id="jpertanggungan">Jumlah Pertanggungan</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <select class="form-select" aria-label="Default select example" id="pilihan">
                                        <option value="okasbon" selected>Kasbon</option>
                                        <option value="ononkasbon">Nonkasbon</option>
                                        <option value="opertanggungan">Pertanggungan</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                            <div id="kasbon" class="apex-charts"></div>
                            <div id="nonkasbon" class="apex-charts" ></div>
                            <div id="pertanggungan" class="apex-charts" ></div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="h4">$24,500</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Weekly Sales</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="h4">520</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Orders Placed</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="h4">82.8%</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Conversion Rate</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="h4">$80.5</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Avg. Value</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- end col-->

            <div class="col-lg-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="media">
                                    <img src="{{ URL::asset('assets/images/money-beg.png') }}" alt="" class="align-self-center" height="40">
                                    <div class="media-body align-self-center ms-3">
                                        <h6 class="m-0 font-20">$1850.00</h6>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <p class="mb-0"><span class="text-success"><i class="mdi mdi-trending-up"></i>4.8%</span> Then Last Month</p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    <div class="row">
                        <div class="col-12">
                            <div class="apexchart-wrapper">
                                <div id="dash_spark_1" class="chart-gutters"></div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div> <!--end card-->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Kasbon</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        This Week<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Mont</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="ana_device" class="apex-charts"></div>
                            <h6 class="bg-light-alt py-3 px-2 mb-0">
                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                01 January 2020 to 31 December 2020
                            </h6>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!-- end col-->
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Kasbon</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Tgl Masuk</th>
                                        <th class="border-top-0">No Kasbon</th>
                                        <th class="border-top-0">Nominal</th>
                                        <th class="border-top-0">Status</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    @foreach ($kasbons as $ksb)
                                    <tr>
                                        <td>{{$ksb->tglmasuk}}</td>
                                        <td>{{$ksb->nokasbon}}</td>
                                        <td>Rp. {{number_format($ksb->total)}}</td>
                                        <td>
                                            @if(isset($ksb->verifikasikasbon->id))
                                            @if($ksb->verifikasikasbon->status == "Dalam Proses")
                                                <label class="badge rounded-pill bg-primary">Dalam Proses</label>
                                            @elseif($ksb->verifikasikasbon->status == "Revisi")
                                                <label class="badge rounded-pill bg-warning">Revisi</label>
                                            @elseif($ksb->verifikasikasbon->status == "Ditolak")
                                                <label class="badge rounded-pill bg-danger">Ditolak</label>
                                            @elseif($ksb->verifikasikasbon->status == "Terverifikasi")
                                                <label class="badge rounded-pill bg-success">Terverifikasi</label>
                                            @endif
                                            @endif
                                        </td>
                                    </tr><!--end tr-->
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td> <a href="">View More</a></td>
                                    </tr>
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Most Populer Products</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Sell</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/products/01.png') }}" height="30" class="me-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Camera EDM 5D(White)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A3652</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$50 <del class="text-muted font-10">$70</del></td>
                                        <td>450 <small class="text-muted">(550)</small></td>
                                        <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/products/02.png') }}" height="30" class="me-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Shoes Max-Zon</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A5002</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$99 <del class="text-muted font-10">$150</del></td>
                                        <td>750 <small class="text-muted">(00)</small></td>
                                        <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/products/04.png') }}" height="30" class="me-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Mask N99 [ISI]</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A6598</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$199 <del class="text-muted font-10">$250</del></td>
                                        <td>280 <small class="text-muted">(220)</small></td>
                                        <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="{{ URL::asset('assets/images/products/img-5.png') }}" height="30" class="me-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Bag (Blue)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A9547</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$40 <del class="text-muted font-10">$49</del></td>
                                        <td>500 <small class="text-muted">(1000)</small></td>
                                        <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </td>
                                    </tr><!--end tr-->

                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div>

@endsection
@section('script')

<script>
    var year = <?php echo $year; ?>;
    var kasbon = <?php echo $kasbon; ?>;
    var nonkasbon = <?php echo $nonkasbon; ?>;
    var pertanggungan = <?php echo $pertanggungan; ?>;
</script>
<script>
    $(document).ready(function () {
        $("#nonkasbon").attr("hidden", "hidden"),
        $("#pertanggungan").attr("hidden", "hidden"),
        $("#jpertanggungan").attr("hidden", "hidden"),
        $("#jnkasbon").attr("hidden", "hidden"),
    toggleFields(); 
    $("#pilihan").change(function () {
        toggleFields();
    });

});

function toggleFields() {
    if ($("#pilihan").val() === "ononkasbon")
        $("#nonkasbon").removeAttr("hidden"),
        $("#jnkasbon").removeAttr("hidden"),
        $("#pertanggungan").attr("hidden", "hidden"),
        $("#jpertanggungan").attr("hidden", "hidden"),
        $("#jkasbon").attr("hidden", "hidden"),
        $("#kasbon").attr("hidden", "hidden");

    if ($("#pilihan").val() === "okasbon")
    $("#jkasbon").removeAttr("hidden"),
    $("#jpertanggungan").attr("hidden", "hidden"),
    $("#jnkasbon").attr("hidden", "hidden"),
    $("#kasbon").removeAttr("hidden"),
    $("#pertanggungan").attr("hidden", "hidden"),
    $("#nonkasbon").attr("hidden", "hidden");

    if ($("#pilihan").val() === "opertanggungan")
    $("#jpertanggungan").removeAttr("hidden"),
    $("#jkasbon").attr("hidden", "hidden"),
    $("#jnkasbon").attr("hidden", "hidden"),
    $("#pertanggungan").removeAttr("hidden"),
    $("#nonkasbon").attr("hidden", "hidden"),
    $("#kasbon").attr("hidden", "hidden");
}

</script>
        <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.sales_dashboard.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

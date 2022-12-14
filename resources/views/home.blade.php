@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Dashboard @endslot
            @slot('li_3') Analytics @endslot
            @slot('title') Analytics @endslot
        @endcomponent

        {{-- <div class="row">
            <div class="col-lg-9">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Sessions</p>
                                        <h3 class="m-0">24k</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Avg.Sessions</p>
                                        <h3 class="m-0">00:18</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Bounce Rate</p>
                                        <h3 class="m-0">$2400</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="activity" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Goal Completions</p>
                                        <h3 class="m-0">85000</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="briefcase" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end col--> --}}
       

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Browser Used & Traffic Reports</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive browser_users">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Channel</th>
                                        <th class="border-top-0">Sessions</th>
                                        <th class="border-top-0">Prev.Period</th>
                                        <th class="border-top-0">% Change</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="" class="text-primary">Organic search</a></td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td>566<small class="text-muted">(92%)</small></td>
                                        <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Direct</a></td>
                                        <td>2545<small class="text-muted">(47%)</small></td>
                                        <td>498<small class="text-muted">(81%)</small></td>
                                        <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Referal</a></td>
                                        <td>1836<small class="text-muted">(38%)</small></td>
                                        <td>455<small class="text-muted">(74%)</small></td>
                                        <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Email</a></td>
                                        <td>1958<small class="text-muted">(31%)</small></td>
                                        <td>361<small class="text-muted">(61%)</small></td>
                                        <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Social</a></td>
                                        <td>1566<small class="text-muted">(26%)</small></td>
                                        <td>299<small class="text-muted">(49%)</small></td>
                                        <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                    </tr><!--end tr-->
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
                                <h4 class="card-title">Browser Used & Traffic Reports</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive browser_users">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Browser</th>
                                        <th class="border-top-0">Sessions</th>
                                        <th class="border-top-0">Bounce Rate</th>
                                        <th class="border-top-0">Transactions</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ URL::asset('assets/images/browser_logo/chrome.png') }}" alt="" height="16" class="me-2">Chrome</td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td> 52.80%</td>
                                        <td>566<small class="text-muted">(92%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="{{ URL::asset('assets/images/browser_logo/micro-edge.png') }}" alt="" height="16" class="me-2">Microsoft Edge</td>
                                        <td>2545<small class="text-muted">(47%)</small></td>
                                        <td> 47.54%</td>
                                        <td>498<small class="text-muted">(81%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="{{ URL::asset('assets/images/browser_logo/in-explorer.png') }}" alt="" height="16" class="me-2">Internet-Explorer</td>
                                        <td>1836<small class="text-muted">(38%)</small></td>
                                        <td> 41.12%</td>
                                        <td>455<small class="text-muted">(74%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="{{ URL::asset('assets/images/browser_logo/opera.pn') }}g" alt="" height="16" class="me-2">Opera</td>
                                        <td>1958<small class="text-muted">(31%)</small></td>
                                        <td> 36.82%</td>
                                        <td>361<small class="text-muted">(61%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="{{ URL::asset('assets/images/browser_logo/chrome.png') }}" alt="" height="16" class="me-2">Chrome</td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td> 52.80%</td>
                                        <td>566<small class="text-muted">(92%)</small></td>
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
        <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.analytics_dashboard.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

@extends('layout.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Tables @endslot
            @slot('li_3') Datatables @endslot
            @slot('title') Datatables @endslot
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
                            <h4 class="card-title" style="display: inline;">Default Datatable</h4>
                            <div class="mt-1 float-end">
                                <a class=" btn btn-sm btn-soft-primary"  href="{{ route('users.create') }}" role="button"><i class="fas fa-plus me-2"></i>New User</a>
                            </div>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>NIP</th>
                                    <th>Unit</th>
                                    <th>Role</th>
                                    <th class="text-end">Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($user as $user)
                                    <tr>
                                        <td><i class="fas fa-user-circle fa-lg"></i> {{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->nip}}</td>
                                        <td>{{$user->unit->name}}</td>
                                        <td> @if(!empty($user->getRoleNames()))
                                          @foreach($user->getRoleNames() as $v)
                                          @if($v == "User")
                                          <span class="badge badge-soft-info">{{ $v }}</span>
                                          @elseif($v == "Admin")
                                          <span class="badge badge-soft-purple">{{ $v }}</span>
                                          @elseif($v == "Verifikator")
                                          <span class="badge badge-soft-warning">{{ $v }}</span>
                                          @endif
                                          @endforeach
                                        @endif</td>
                                        <td class="text-end">
                                            <a href="{{ route('users.edit',$user->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST" style="display: inline">
                                              @method('delete')
                                              {{ csrf_field() }}
                                            <button type="submit" style="border: none; background: none;"><i class="las la-trash text-secondary font-16"></i></button>
                                          </form>  
                                        </td>
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
@endsection

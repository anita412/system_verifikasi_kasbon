@extends('layout.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') Roles @endslot
            @slot('li_3') List @endslot
            @slot('title') List Roles @endslot
        @endcomponent
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 b-round" role="alert">
            <strong>Well Done 👍</strong>{{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="display: inline;">Striped rows</h4>
                                <div class="mt-1 float-end">
                                    <a class=" btn btn-sm btn-soft-primary"  href="{{ route('roles.create') }}" role="button"><i class="fas fa-plus me-2"></i>New Role</a>
                                </div>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th style="width:70%">Permissions</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $roles)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{$roles->name}}</td>
                                        <td>@if(!empty($roles->getPermissionNames()))
                                            @foreach($roles->getPermissionNames() as $v)
                                            <label class="badge rounded-pill bg-primary">{{ $v }}</label>
                                            @endforeach
                                            @endif</td>
                                        <td class="text-end">
                                            <a href="{{ route('roles.edit',$roles->id) }}"><i class="las la-pen text-secondary font-16"></i></a>
                                            <form action="{{ route('roles.destroy',$roles->id) }}" method="POST" style="display: inline">
                                              @method('delete')
                                              {{ csrf_field() }}
                                            <button type="submit" style="border: none; background: none;"><i class="las la-trash text-secondary font-16"></i></button>
                                          </form>  
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table><!--end /table-->
                            </div><!--end /tableresponsive-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

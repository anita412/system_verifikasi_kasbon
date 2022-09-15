@extends('layout.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') IMST @endslot
            @slot('li_2') List @endslot
            @slot('li_3') User @endslot
            @slot('title') List User @endslot
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
                                    <a class=" btn btn-sm btn-soft-primary"  href="{{ route('users.create') }}" role="button"><i class="fas fa-plus me-2"></i>New User</a>
                                </div>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
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

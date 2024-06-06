@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Users</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body overflow-x-auto">
                            @if(count($users)>0)
                                <h4 class="card-title">Users</h4>
                                <p class="card-description"> All users <code>.table-striped</code>
                                </p>

                                <table id="gems-table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Role </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="py-1">

                                                {{--images are not showing ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}

                                                {{--<img src="{{ $user->getFirstMediaUrl('users') }}" alt="image" />--}}
                                                {{--<img src="{{ asset('images/gems').'/'.$gem->image }}" alt="image" />--}}
                                            </td>
                                            <td> {{ $user->name }} </td>
                                            {{--
                                            <td> {!! Str::limit($gem->name,15,'...') !!} </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>--}}
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->role }} </td>
                                            <td>
                                                <a href="{{ route('users.edit',['user' => $user->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                                                <form method="POST" action="{{ route('users.destroy', [$user->id]) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')"> <i class="fas fa-trash"></i> </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h3 class="text-center text-danger"> No users found </h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

        @section('scripts')
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
            <script>
                $(document).ready(function() {
                    $('#gems-table').DataTable();
                } );
            </script>
@endsection

@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Types </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Types</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Types</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body overflow-x-auto">
                            @if(count($types)>0)
                                <h4 class="card-title">Types</h4>
                                <p class="card-description"> All types <code>.table-striped</code>
                                </p>

                                <table id="gems-table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th class="mw-100"> Description </th>
                                        <th> Slug </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($types as $type)
                                        <tr>
                                            <td> {{ $type->name }} </td>
                                            <td> {{ Str::limit($type->description, 80, '...') }} </td>
                                            <td> {{ $type->slug }} </td>
                                            <td>

                                                <a href="{{ route('types.edit',['type' => $type->slug]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                                                <form method="POST" action="{{ route('types.destroy', [$type->slug]) }}">
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
                                <h3 class="text-center text-danger"> No types found </h3>
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
                    $('#types-table').DataTable();
                } );
            </script>
@endsection

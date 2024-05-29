@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Colours </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Colours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Colours</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body overflow-x-auto">
                            @if(count($colours)>0)
                                <h4 class="card-title">Colours</h4>
                                <p class="card-description"> All colours <code>.table-striped</code>
                                </p>

                                <table id="gems-table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Slug </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($colours as $colour)
                                        <tr>
                                            <td> {{ $colour->name }} </td>
                                            <td> {{ $colour->slug }} </td>
                                            <td>

                                                <a href="{{ route('colours.edit',['colour' => $colour->slug]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                                                <form method="POST" action="{{ route('colours.destroy', [$colour->slug]) }}">
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
                                <h3 class="text-center text-danger"> No colours found </h3>
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
                    $('#colours-table').DataTable();
                } );
            </script>
@endsection

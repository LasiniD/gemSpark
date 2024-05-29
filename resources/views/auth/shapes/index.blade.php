@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Shapes </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shapes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Shapes</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body overflow-x-auto">
                            @if(count($shapes)>0)
                                <h4 class="card-title">Shapes</h4>
                                <p class="card-description"> All shapes <code>.table-striped</code>
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
                                    @foreach($shapes as $shape)
                                        <tr>
                                            <td> {{ $shape->name }} </td>
                                            <td> {{ $shape->slug }} </td>
                                            <td>

                                                <a href="{{ route('shapes.edit',['shape' => $shape->slug]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                                                <form method="POST" action="{{ route('shapes.destroy', [$shape->slug]) }}">
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
                                <h3 class="text-center text-danger"> No shapes found </h3>
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
                    $('#shapes-table').DataTable();
                } );
            </script>
@endsection

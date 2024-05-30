@extends('layouts.authLayout')

@section('contentAuth')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Gems </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Gems</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Gems</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body overflow-x-auto">
                                @if(count($gems)>0)
                                <h4 class="card-title">Gems</h4>
                                <p class="card-description"> All gems <code>.table-striped</code>
                                </p>

                                    <table id="gems-table" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th> Image </th>
                                            <th> Name </th>
                                            <th> Price </th>
                                            <th> From </th>
                                            <th> Carat weight </th>
                                            <th> Type </th>
                                            <th> Stock </th>
                                            <th> Minimum Stock </th>
                                            <th> Availability </th>
                                            <th> Actions </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($gems as $gem)
                                            <tr>
                                                <td class="py-1">

                                                    {{--images are not showing ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}

                                                    <img src="{{ $gem->getFirstMediaUrl('images') }}" alt="image" />
                                                    {{--<img src="{{ asset('images/gems').'/'.$gem->image }}" alt="image" />--}}
                                                </td>
                                                <td> {{ $gem->name }} </td>
                                                {{--
                                                <td> {!! Str::limit($gem->name,15,'...') !!} </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>--}}
                                                <td> {{ $gem->price }} </td>
                                                <td> {{ $gem->where_from }} </td>
                                                <td> {{ $gem->carat_weight }} </td>
                                                <td> {{ $gem->type->name }} </td>
                                                <td> {{ $gem->stock }} </td>
                                                <td> {{ $gem->min_stock }} </td>
                                                <td> {{ $gem->is_available == 1 ? 'In Stock' : 'Out Of Stock' }} </td>
                                                <td>

                                                    <a href="{{ route('gems.show',$gem->slug) }}" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a>
                                                    <a href="{{ route('gems.edit',['gem' => $gem->slug]) }}" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i> </a>
                                                    <form method="POST" action="{{ route('gems.destroy', [$gem->slug]) }}">
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
                                    <h3 class="text-center text-danger"> No gems found </h3>
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

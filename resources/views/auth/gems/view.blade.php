@extends('layouts.authLayout')

@section('contentAuth')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Gems </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('gems.index') }}">Gems</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create gems</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">View Gem</h4>
                            <p class="card-description"> Gem/view </p>

                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <label class="form-control">{{ $gems->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <label class="form-control"><img width="200px" height="200px" alt="" src="{{ $gems->getFirstMediaUrl('images') }}"></label>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <label class="form-control">{{ $gems->price }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Where From</label>
                                    <label class="form-control">{{ $gems->where_from }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Carat Weight</label>
                                    <label class="form-control">{{ $gems->carat_weight }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Stock Quantity</label>
                                    <label class="form-control">{{ $gems->stock }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Minimum Stock Quantity</label>
                                    <label class="form-control">{{ $gems->min_stock }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <label class="form-control">{{ $gems->slug }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <label class="form-control">{{ $types->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Colour</label>
                                    <label class="form-control">{{ $colours->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label>Shape</label>
                                    <label class="form-control">{{ $shapes->name }}</label>
                                </div>

                                {{--<div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-select" id="exampleSelectGender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>--}}

                                {{--<div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                </div>--}}
                                {{--<div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>--}}

                                <a class="btn btn-gradient-primary me-2">Edit</a>
                                <a href="{{ route('gems.index') }}" class="btn btn-light">Back</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

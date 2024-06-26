@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Gems </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('gems.index') }}">Gems</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update gems</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a gem</h4>
                            <p class="card-description"> Gem/edit </p>
                            <form method="post" action="{{ route('gems.update', ['gem' => $gems->slug]) }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $gems->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleImage1">Upload</label>
                                    <input type="file" name="file" class="form-control" id="exampleImage1" placeholder="File upload" value="{{ $gems->getFirstMediaUrl('images') }}">
                                    <img alt="" src="{{ $gems->getFirstMediaUrl('images') }}" width="200px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice1">Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputPrice1" placeholder="Price" value="{{ $gems->price }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFrom1">Where From</label>
                                    <input type="text" name="from" class="form-control" id="exampleInputFrom1" placeholder="Where-from" value="{{ $gems->where_from }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputWeight1">Carat Weight</label>
                                    <input type="number" name="c_weight" class="form-control" id="exampleInputWeight1" placeholder="Carat-weight" value="{{ $gems->carat_weight }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStock1">Stock Quantity</label>
                                    <input type="number" name="stock" class="form-control" id="exampleInputStock1" placeholder="Stock" value="{{ $gems->stock }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMinStock1">Minimum Stock Quantity</label>
                                    <input type="number" name="min_stock" class="form-control" id="exampleInputMinStock1" placeholder="Minimum-Stock" value="{{ $gems->min_stock }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSlug1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="exampleSlug1" placeholder="Slug" value="{{ $gems->slug }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectType">Type</label>
                                    <select class="form-select" name="type_id" id="exampleSelectType">
                                        @if(count($types) > 0)
                                            @foreach($types as $type)
                                                <option @selected(old('type_id') == $type->id) value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectColour">Colour</label>
                                    <select class="form-select" name="colour_id" id="exampleSelectColour">
                                        @if(count($colours) > 0)
                                            @foreach($colours as $colour)
                                                <option @selected(old('colour_id') == $colour->id) value="{{$colour->id}}">{{$colour->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectShape">Shape</label>
                                    <select class="form-select" name="shape_id" id="exampleSelectShape">
                                        @if(count($shapes) > 0)
                                            @foreach($shapes as $shape)
                                                <option @selected(old('shape_id') == $shape->id) value="{{$shape->id}}">{{$shape->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
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

                                <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

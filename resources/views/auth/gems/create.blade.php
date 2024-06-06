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
                    <h4 class="card-title">Create a new gem</h4>
                    <p class="card-description"> Gem/create </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('gems.store') }}" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleImage1">Upload</label>
                            <input type="file" name="file" class="form-control" id="exampleImage1" placeholder="File upload" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPrice1">Price</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPrice1" placeholder="Price" value="{{ old('price') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFrom1">Where From</label>
                            <input type="text" name="from" class="form-control" id="exampleInputFrom1" placeholder="Where-from" value="{{ old('from') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputWeight1">Carat Weight</label>
                            <input type="number" name="c_weight" class="form-control" id="exampleInputWeight1" placeholder="Carat-weight" value="{{ old('c_weight') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStock1">Stock Quantity</label>
                            <input type="number" name="stock" class="form-control" id="exampleInputStock1" placeholder="Stock" value="{{ old('stock') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMinStock1">Minimum Stock Quantity</label>
                            <input type="number" name="min_stock" class="form-control" id="exampleInputMinStock1" placeholder="Minimum-Stock" value="{{ old('min_stock') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSlug1">Slug</label>
                            <input type="text" name="slug" class="form-control" id="exampleSlug1" placeholder="Slug" value="{{ old('slug') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectType">Type</label>
                            <select class="form-select" name="type_id" id="exampleSelectType">
                                <option>Choose</option>
                                @if(count($types) > 0)
                                    @foreach($types as $type)
                                        <option @selected(old('type') == $type->id) value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectColour">Colour</label>
                            <select class="form-select" name="colour_id" id="exampleSelectColour">
                                <option>Choose</option>
                                @if(count($colours) > 0)
                                    @foreach($colours as $colour)
                                        <option @selected(old('colour') == $colour->id) value="{{$colour->id}}">{{$colour->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectShape">Shape</label>
                            <select class="form-select" name="shape_id" id="exampleSelectShape">
                                <option>Choose</option>
                                @if(count($shapes) > 0)
                                    @foreach($shapes as $shape)
                                        <option @selected(old('shape') == $shape->id) value="{{$shape->id}}">{{$shape->name}}</option>
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

                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>


        </div>
    </div>
            </div>
        </div>
    </div>
@endsection

        {{--<script>
            $('#exampleSlug1').on('keyup', function(){
                // set the #name-text textContent as the #name-input field value
                $('#exampleInputName1').text($(this).val());
            });
            // on every name field key stroke
        </script>--}}

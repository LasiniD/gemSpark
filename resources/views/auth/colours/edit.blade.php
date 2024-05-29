@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Colours </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('colours.index') }}">Colours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update colours</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a colour</h4>
                            <p class="card-description"> Colour/edit </p>
                            <form method="post" action="{{ route('colours.update', ['colour' => $colours->slug]) }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $colours->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSlug1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="exampleSlug1" placeholder="Slug" value="{{ $colours->slug }}" required>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary me-2">Edit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

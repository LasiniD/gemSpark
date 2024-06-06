@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create users</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create a new user</h4>
                            <p class="card-description"> User/create </p>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('users.store') }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleImage1">Upload</label>
                                    <input type="file" name="file" class="form-control" id="exampleImage1" placeholder="File upload">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" {{--value="{{ old('email') }}"--}} required>
                                </div>
                                <div class="form-group">
                                    <label for="examplePassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="examplePassword" placeholder="Password" {{--value="{{ old('password') }}"--}} required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRole">Role</label>
                                    <select class="form-select" name="role" id="exampleInputRole">
                                        <option>Choose</option>
                                        <option @selected(old('role') == 'ADMIN') value="admin">Admin</option>
                                        <option @selected(old('role') == 'DELIVERY') value="delivery">Delivery</option>
                                    </select>
                                    </div>

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

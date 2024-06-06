@extends('layouts.authLayout')

@section('contentAuth')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update users</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit a user</h4>
                            <p class="card-description"> Users/edit </p>
                            <form method="post" action="{{ route('users.update', ['user' => $users->id]) }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="exampleImage1">Upload</label>
                                    <input type="file" name="file" class="form-control" id="exampleImage1" placeholder="File upload" value="{{--{{ $users->getFirstMediaUrl('users') }}--}}">
                                    <img alt="" src="{{--{{ $gems->getFirstMediaUrl('images') }}--}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $users->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="{{ $users->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFrom1">Role</label>
                                    <select class="form-select" name="role" id="exampleInputRole">
                                        <option>Choose</option>
                                        <option @selected($users->role == 'ADMIN') value="ADMIN">Admin</option>
                                        <option @selected($users->role == 'DELIVERY') value="DELIVERY">Delivery</option>
                                        <option @selected($users->role == 'USER') value="USER">User</option>
                                    </select>
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

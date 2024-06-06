@extends('layouts.authLayout')

@section('contentAuth')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/auth/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">TOTAL GEMS <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                            </h4>
                            <h2 class="mb-5">{{ count($gems) }}</h2>
                            {{--<h6 class="card-text">Increased by 60%</h6>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/auth/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">TOTAL USERS <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                            </h4>
                            <h2 class="mb-5">{{ count($users) }}</h2>
                            {{--<h6 class="card-text">Decreased by 10%</h6>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body p-0 d-flex">
                            <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Admin Board</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                    <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                    <span>{{ auth()->user()->name }}</span>
                                </div>
                                <div class="d-flex align-items-center text-muted font-weight-light">
                                    <i class="mdi mdi-clock icon-sm me-2"></i>
                                    <span>{{ date(now()) }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 pe-1">
                                    <img src="{{ asset('assets/auth/images/dashboard/img_1.jpg') }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('assets/auth/images/dashboard/img_4.jpg') }}" class="mw-100 w-100 rounded" alt="image">
                                </div>
                                <div class="col-6 ps-1">
                                    <img src="{{ asset('assets/auth/images/dashboard/img_2.jpg') }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('assets/auth/images/dashboard/img_3.jpg') }}" class="mw-100 w-100 rounded" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-dark">Todo List</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Call John </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Print Statements </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection

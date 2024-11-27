@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

@if (session('info'))
<div class="alert alert-warning">
    <strong>{{ session('info') }}</strong>
</div>
@endif

<div class="row">
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3 g-3">
                    <div class="col">
                        <div class="card radius-10 bg-tiffany mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-file-earmark-break-fill"></i>
                                </div>
                                <h3 class="text-white">{{ $branches }}</h3>
                                <p class="mb-0 text-white">Total Branch</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-danger mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-hdd-fill"></i>
                                </div>
                                <h3 class="text-white">{{ $companies }}</h3>
                                <p class="mb-0 text-white">Total Company</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-orange mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-file-earmark-check-fill"></i>
                                </div>
                                <h3 class="text-white">{{ $all_manager }}</h3>
                                <p class="mb-0 text-white">Total Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-success mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                                <h3 class="text-white">{{ $all_staff }}</h3>
                                <p class="mb-0 text-white">Total Staff</p>
                                @else
                                <h3 class="text-white">{{ App\Models\User::where('role', 'Staff')->where('branch_id', Auth::user()->branch_id)->count() }}</h3>
                                <p class="mb-0 text-white">Total Staff</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-purple mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-tags-fill"></i>
                                </div>
                                @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                                <h3 class="text-white">{{ $all_courier }}</h3>
                                <p class="mb-0 text-white">Total Courier</p>
                                @else
                                <h3 class="text-white">
                                    {{ App\Models\CourierSummary::where('sender_branch_id', Auth::user()->branch_id)->count() }}
                                </h3>
                                <p class="mb-0 text-white">Sender Courier</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-dark mb-0">
                            <div class="card-body text-center">
                                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                                    <i class="bi bi-chat-left-quote-fill"></i>
                                </div>
                                @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                                <h3 class="text-white">{{ $all_message }}</h3>
                                <p class="mb-0 text-white">All Message</p>
                                @else
                                <h3 class="text-white">
                                    {{ App\Models\CourierSummary::where('receiver_branch_id', Auth::user()->branch_id)->count() }}
                                </h3>
                                <p class="mb-0 text-white">Receiver Courier</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
        <div class="card radius-10 w-100">
            <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Courier All</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-lg-flex align-items-center justify-content-center gap-4">
                    @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                    <div id="chart3"></div>
                    @endif
                    <ul class="list-group list-group-flush">
                        @if (Auth::user()->role == 'Super Admin' || Auth::user()->role == 'Admin')
                        <li class="list-group-item"><i class="bi bi-circle-fill text-orange me-1"></i>
                            Processing: <span class="me-1">{{ App\Models\CourierSummary::where('courier_status', 'Processing')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-primary me-1"></i>
                            On the way: <span class="me-1">{{ App\Models\CourierSummary::where('courier_status', 'On the way')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-danger me-1"></i>
                            Shipped: <span class="me-1">{{ App\Models\CourierSummary::where('courier_status', 'Shipped')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Delivered: <span class="me-1">{{ App\Models\CourierSummary::where('courier_status', 'Delivered')->count() }}</span>
                        </li>
                        @else
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Send Processing Courier: <span class="me-1">{{ App\Models\CourierSummary::where('sender_branch_id', Auth::user()->branch_id)->where('courier_status', 'Processing')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Send On the way Courier: <span class="me-1">{{ App\Models\CourierSummary::where('sender_branch_id', Auth::user()->branch_id)->where('courier_status', 'On the way')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Delivery On the way Courier: <span class="me-1">{{ App\Models\CourierSummary::where('receiver_branch_id', Auth::user()->branch_id)->where('courier_status', 'On the way')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Delivery Processing Courier: <span class="me-1">{{ App\Models\CourierSummary::where('receiver_branch_id', Auth::user()->branch_id)->where('courier_status', 'Shipped')->count() }}</span>
                        </li>
                        <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i>
                            Delivered Courier: <span class="me-1">{{ App\Models\CourierSummary::where('sender_branch_id', Auth::user()->branch_id)->orWhere('receiver_branch_id', Auth::user()->branch_id)->where('courier_status', 'Delivered')->count() }}</span>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--end row-->
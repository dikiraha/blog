@extends('admin.layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">Welcome {{ Auth::user()->name }}! </h4>
                        <p class="pb-0">Administrator</p>
                        <h4 class="text-primary mb-1"></h4>
                        <a href="{{ route('admin.portal.list') }}" class="btn btn-sm btn-primary">List Portal</a>
                    </div>

                </div>
            </div>
            <!--/ Congratulations card -->

            <!-- Transactions -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Website</h5>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded shadow">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Articles</div>
                                        <h5 class="mb-0">{{ $total_articles }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Users</div>
                                        <h5 class="mb-0">{{ $total_users }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->

            <!--/ Data Tables -->
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush

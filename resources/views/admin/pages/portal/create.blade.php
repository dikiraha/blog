@extends('admin.layouts.main')

@section('title', 'Create Portal')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-header">Create Portal</h5>
                        <a href="{{ route('admin.portal.list') }}" class="btn btn-primary m-3">List
                            Portal</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.portal.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">Topic</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <textarea name="description" id="description" class="form-control" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="photo">Photo</label>
                                <div class="col-sm-10">
                                    <input type="file" id="photo" name="photo" class="form-control"
                                        accept="image/*" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush

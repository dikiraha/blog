@extends('website.blog.layouts.main')

@section('title', 'Portal')

@section('content')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Portal</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12 col-xl-12 col-xxl-12">
                <!-- Experience Section-->
                <section>
                    <!-- Experience Card 1-->
                    @foreach ($portals as $portal)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $portal->title }}</div>
                                            <div class="small fw-bolder">{{ $portal->created_name }}</div>
                                            <div class="small text-muted">{{ $portal->created_at->format('d F Y') }}</div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-2 text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-2 rounded-4">
                                            <img src="{{ asset('blog/photo/' . $portal->photo) }}" alt=""
                                                class="img-fluid rounded-4">
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-8">
                                        <div>{{ $portal->description }}</div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-end">
                                    <div class="col-lg-6 text-lg-end">
                                        <a href="{{ url('portal/article/' . $portal->uuid) }}" class="btn btn-success">Read
                                            more ...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Experience Card 2-->
                </section>
            </div>
        </div>
    </div>
@endsection

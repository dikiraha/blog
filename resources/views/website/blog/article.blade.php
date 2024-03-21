@extends('website.blog.layouts.main')

@section('title', 'Portal')

@section('content')
    <div class="container px-5 my-5">
        <button onclick="window.history.back()" class="btn m-3" style="background-color: #8a8d93; color: white;">
            Back
        </button>
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $portal->title }}</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12 col-xl-12 col-xxl-12">
                <!-- Experience Section-->
                <section>
                    <!-- Experience Card 1-->
                    @foreach ($articles as $article)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col-lg-12 text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $article->title }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div>{{ $article->description }}</div>
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

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('website.home') }}"><span class="fw-bolder text-primary">DIKIRAHA</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{ route('website.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('website.profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('website.portal') }}">Post Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.ubpkarawang.ac.id" target="_blank">UBP
                        Karawang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">Login
                        Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

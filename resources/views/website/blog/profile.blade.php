@extends('website.blog.layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Profile</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Jan 2022 - Present</div>
                                        <div class="small fw-bolder">IT Development</div>
                                        <div class="small text-muted">PT. Aisin Indonesia Automotive</div>
                                        <div class="small text-muted">KIIC, Karawang</div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div>Bekerja di 2 section, yaitu Infrastructure System dan Information System. Jobdest
                                        yang dilakukan adalah memastikan Hardware, Software, dan Network di perusahaan
                                        berjalan dengan baik.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Nov 2020 - Oct 2021</div>
                                        <div class="small fw-bolder">Quality Control</div>
                                        <div class="small text-muted">PT. Yamaha Motor Parts Manufacturing Indonesia</div>
                                        <div class="small text-muted">KIIC, Karawang</div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div>Melakukan inspeksi pada part, khusunya adalah bagian Head Cyclinder Motor Yamaha
                                        dan Mobil Toyota. Pengecekan harus dilakukan dengan teliti agar nilai quality tetap
                                        terjaga.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Oct 2018 - Jan 2019</div>
                                        <div class="small fw-bolder">IT Support</div>
                                        <div class="small text-muted">PT. Steel Pipe Industry of Indonesia</div>
                                        <div class="small text-muted">KIM, Karawang</div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div>Praktek Kerja Lapangan ketika SMK, melakukan support terhadap device IT ketika ada
                                        problem.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5 mb-3">
                                <div class="col-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2023 - Present</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Universitas Buana Perjuangan Karawang</div>
                                            <div class="small text-muted">Karawang</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Teknik Informatika</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2017 - 2020</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">SMKN 1 Karawang</div>
                                            <div class="small text-muted">Karawang</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Teknik Komputer dan Jaringan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center gx-5 mb-3">
                                <div class="col-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2014 -2017</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">SMPN 5 Karawang Barat</div>
                                            <div class="small text-muted">Karawang</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2008 - 2014</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">SDN Karawang Kulon 2</div>
                                            <div class="small text-muted">Karawang</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                            Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">IT
                                            Troubleshooting</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                            Statistical Analysis</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web
                                            Development</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network
                                            Security</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe
                                            Software Suite</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User
                                            Interface Design</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                            JavaScript</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Kotlin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

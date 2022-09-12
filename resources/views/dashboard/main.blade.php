@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>



                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                                    <div class="card-body">
                                        <!-- Vertically centered Modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#verticalycentered">
                                            Daftar Hari Senin
                                        </button>
                                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Vertically Centered</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda akan di daftarkan sahur pada hari Senin tanggal 22-22-2222
                                                        Apakah anda yakin?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tidak sekarang</button>
                                                        <button type="button" class="btn btn-primary">Ya daftarkan
                                                            saya sekarang</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- End Vertically centered Modal-->

                                    </div>

                                    <div class="card-body">
                                        <!-- Vertically centered Modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#kamis">
                                            Daftar Hari Kamis
                                        </button>
                                        <div class="modal fade" id="kamis" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Vertically Centered</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda akan di daftarkan sahur pada hari Kamis tanggal 22-22-2222
                                                        Apakah anda yakin?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tidak sekarang</button>
                                                        <button type="button" class="btn btn-primary">Ya daftarkan
                                                            saya sekarang</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- End Vertically centered Modal-->

                                    </div>


                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nim</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Prodi</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($daftar as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td>{{ $item->nim }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->prodi }}</td>
                                                    <td>{{ $item->semester }}</td>
                                                    @if ($item->status == 'approved')
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    @endif
                                                    @if ($item->status == 'pending')
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                    @endif
                                                    @if ($item->status == 'rejected')
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->
@endsection

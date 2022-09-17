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
                                <div class="card-body">
                                    <h5 class="card-title">Rekap puasa <span>| Minggu ini</span></h5>

                                    @if (session()->has('success'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            {{ session()->get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session()->has('error'))
                                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                            {{ session()->get('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @auth
                                        <div class="card-body">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#verticalycentered">
                                                Daftar Puasa
                                            </button>
                                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Daftar Puasa Untuk Mendapatkan Jatah Sahur
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apabila anda mendatar untuk hari senin maka anda akan di daftarkan
                                                            sahur pada hari Senin tanggal {{ $monday }}
                                                        </div>
                                                        <div class="modal-body">
                                                            Apabila anda mendatar untuk hari kamis maka anda akan di daftarkan
                                                            sahur pada hari Kamis tanggal {{ $thursday }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tidak sekarang</button>

                                                            <form action="/daftar" method="post">
                                                                @csrf
                                                                <input type="hidden" name="tanggal"
                                                                    value="{{ $monday }}">
                                                                <input type="hidden" name="hari" value="senin">
                                                                <button type="submit" class="btn btn-primary">Daftar Hari
                                                                    Senin</button>
                                                            </form>

                                                            <form action="/daftar" method="post">
                                                                @csrf
                                                                <input type="hidden" name="tanggal"
                                                                    value="{{ $thursday }}">
                                                                <input type="hidden" name="hari" value="kamis">
                                                                <button type="submit" class="btn btn-primary">Daftar Hari
                                                                    Kamis</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!-- End Vertically centered Modal-->

                                        </div>
                                    @endauth

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nim</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Prodi</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Status</th>
                                                @if (isset(auth()->user()->is_admin))
                                                    @if (auth()->user()->is_admin == 1)
                                                        <th scope="col">asction</th>
                                                    @endif
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($puasa as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td>{{ $item->user->nim }}</td>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->user->prodi }}</td>
                                                    <td>{{ $item->user->semester }}</td>
                                                    @if ($item->status == 'accepted')
                                                        <td><span class="badge bg-success">Accepted</span></td>
                                                    @endif
                                                    @if ($item->status == 'pending')
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                    @endif
                                                    @if ($item->status == 'rejected')
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    @endif
                                                    @if (isset(auth()->user()->is_admin))
                                                        @if (auth()->user()->is_admin == 1)
                                                            <td>
                                                                <form action="/adm/acc/{{ $item->id }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="status" value="accepted">
                                                                    <button type="submit"
                                                                        class="btn btn-primary bi bi-calendar2-check"></button>
                                                                </form>
                                                                <br>
                                                                <form action="/adm/reject/{{ $item->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="status" value="rejected">
                                                                    <button type="submit"
                                                                        class="btn btn-danger bi bi-calendar-x"></button>
                                                                </form>
                                                            </td>
                                                        @endif
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

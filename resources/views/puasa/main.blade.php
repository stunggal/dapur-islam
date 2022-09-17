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
                                    <h5 class="card-title">Rekap puasaku <span>| Minggu ini</span></h5>

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

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nim</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Prodi</th>
                                                <th scope="col">Semester</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($puasa as $item)
                                                @php
                                                    $i++;
                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $i }}</th>
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
                                                    <td>
                                                        <form action="/puasa/delete/{{ $item->id }}" method="post">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger bi bi-trash"></button>
                                                        </form>
                                                    </td>
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

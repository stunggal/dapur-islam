@extends('layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2>{{ $user->name }}</h2>
                            <h3>{{ $user->username }}</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="" method="post" class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="username" type="text" class="form-control" id="username"
                                                    value="{{ $user->username }}" required>
                                                <div class="invalid-feedback">
                                                    Please select a valid username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                    value="{{ $user->name }}" required>
                                                <div class="invalid-feedback">
                                                    Please select a valid name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nim" class="col-md-4 col-lg-3 col-form-label">Nim</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nim" type="number" class="form-control" id="nim"
                                                    value="{{ $user->nim }}" required>
                                                <div class="invalid-feedback">
                                                    Please select a valid nim.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="prodi" class="col-md-4 col-lg-3 col-form-label">Prodi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select class="form-select" id="prodi" name="prodi" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option value="pai">pai</option>
                                                    <option value="pai">pba</option>
                                                    <option value="pai">tbi</option>
                                                    <option value="saa">saa</option>
                                                    <option value="afi">afi</option>
                                                    <option value="iqt">iqt</option>
                                                    <option value="pm">pm</option>
                                                    <option value="hes">hes</option>
                                                    <option value="mnj">mnj</option>
                                                    <option value="ei">ei</option>
                                                    <option value="agro">agro</option>
                                                    <option value="ti">ti</option>
                                                    <option value="tip">tip</option>
                                                    <option value="hi">hi</option>
                                                    <option value="ilkom">ilkom</option>
                                                    <option value="kkk">kkk</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid prodi.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="semester" class="col-md-4 col-lg-3 col-form-label">Smester</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="semester" type="number" class="form-control" id="semester"
                                                    value="{{ $user->semester }}" required>
                                                <div class="invalid-feedback">
                                                    Please select a valid semester.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

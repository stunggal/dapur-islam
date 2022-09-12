<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }} - Dapur Islam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">Dapur Islam</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Silahkan Daftarkan Diri Anda Sesuai Dengan Data</p>
                            </div>

                            <form action="" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="yourName" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>

                                <div class="col-12">
                                    <label for="nim" class="form-label">Your NIM</label>
                                    <input type="number" name="nim" class="form-control" id="nim" required>
                                    <div class="invalid-feedback">Please enter a valid NIM!</div>
                                </div>

                                <div class="col-12">
                                    <label for="prodi" class="form-label">Prodi</label>
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
                                        Please select a valid state.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="semester" class="form-label">Your Semester</label>
                                    <input type="number" name="semester" class="form-control" id="semester" required>
                                    <div class="invalid-feedback">Please enter a valid Semester</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" name="username" class="form-control" id="yourUsername"
                                            required>
                                        <div class="invalid-feedback">Please choose a username.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                        required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox"
                                            value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the terms
                                            and
                                            conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</body>

</section>
<!-- Vendor JS Files -->
<script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/chart.js/chart.min.js"></script>
<script src="/assets/vendor/echarts/echarts.min.js"></script>
<script src="/assets/vendor/quill/quill.min.js"></script>
<script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

</body>

</html>

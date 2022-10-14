<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Absensi Peserta Didik</title>

    <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script href="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font: 1rem/1.5 var(--bs-font-poppins);
            background-image: url('assets/img/doodle-background.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-img {
            background-image: url('assets/img/bg-login.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position-x: 200px;
        }

        .my-bg {
            background-color: var(--bs-indigo);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-item-center">
            <div class="col-lg-10 col-md-10 col-sm-12 py-md-5">
                <div class="row shadow">
                    <div
                        class="col-lg-6 col-md-6 col-sm-12 card-none-color p-4 p-md-5 order-1 order-md-0 rounded-start bg-light bg-img">
                        <div class="text-center text-md-start">
                            <img src="assets/img/logo.png" class="img-fluid mb-3 ml-md-4 ml-sm-5" alt="Logo"
                                width="75px">
                            <p class="mb-0">Selamat Datang</p>
                            <h4 style="font-weight: bolder;">di Aplikasi ABSENSI Peserta Didik SMKN 1 Jakarta</h4>
                            <p style="font-size: small; color: grey;">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nesciunt, aperiam?</p>
                        </div>


                        <form id="form" name="" class="mb-3" action="" method="">
                            <div class="mb-3">
                                <label for="username" class="form-label" style="font-size: small"> Email Sekolah /
                                    Username <span style="color: red;">*</span></label>
                                <input id="username" name="username" class="form-control" tabindex="1"
                                    style="font-size: small;" placeholder="Masukkan Email Sekolah atau Username Anda"
                                    type="text" value="" autocomplete="false">
                            </div>

                            <div class="form-group small">
                                <label for="password" class="font-weight-bold" style="font-size: small">Kata Sandi <span
                                        style="color: red;">*</span></label>
                                <div class="input-group mt-2 mb-2 mr-sm-2">
                                    <input id="password" name="password" class="form-control rounded-end" tabindex="2"
                                        style="font-size: small;" placeholder="Masukkan kata sandi Anda" type="password"
                                        value="" autocomplete="off">
                                </div>
                            </div>



                            <div class="d-grid gap-2 mt-3">
                                <button id="btn-login" class="btn btn-primary">MASUK</button>
                            </div>

                            <div style="position: relative; font-size: small;" class="mt-3 text-center">
                                <span class="text-primary mr-auto"> <a href="#" class="text-decoration-none">Reset kata
                                        sandi?</a></span>
                                <div class="mt-1">
                                    <span class="text-primary"> <a href="#"
                                            class="text-decoration-none">Daftar akun?</a></span>
                                </div>
                            </div>

                            <input type="hidden" name="lt" value="LT-24523391-4SmpAh0ViuJRT3sNHtbyThYxVbVUE0">
                            <input type="hidden" name="execution" value="e1s1">
                            <input type="hidden" name="_eventId" value="submit">
                        </form>

                        <p style="font-size: x-small; color: grey;" class="mb-0 mt-5">
                            &copy<span id="date"></span> Aplikasi Absensi SMKN 1 Jakarta</p>

                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-sm-12 my-bg bg-gradient p-4 p-md-5 order-0 order-md-1 rounded-end">
                        <div class="carousel slide mt-md-4" data-bs-ride="carousel">
                        </div>
                        <div>
                            <div class="carousel-img">
                                <img class="img-fluid" width="450" src="assets/img/image-login.png" alt="image-login">
                            </div>
                            <div class="carousel-text d-none d-md-block text-center" style="margin-top: 50px;">
                                <h4 class="text-white">
                                    <strong>Masuk Dengan Akun Anda
                                    </strong>
                                </h4>
                                <p class="text-white">Anda dapat melakukan absensi online dengan realtime</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <footer>
        <div class="container mx-auto sponsor pt-2" style="display: block; margin-bottom: 0rem !important;">
            <div class="pos-bottom pos-left pos-right p-3 mt-0 mx-auto text-center" style="font-size: small;"> ©2022
                e-absensi by&nbsp;
                <a href="http://smkn1jakarta.sch.id" title="SMK Negeri 1 Jakarta" target="_blank"
                    class="text-dark opacity-75 fw-500" style="font-size: small;">SMK Negeri 1 Jakarta</a>
                <div class="hash-version">
                    <span class="text-muted">Hak cipta dilindungi</span>
                </div>
            </div>
    </footer>

    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("date").innerHTML = year;
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ ('assets/css/registration.css') }}">
</head>

<body>


    <!-- Navbar -->
    <div class="container-fluit position-sticky w-100" id="navbarContainer">
        <nav class="navbar navbar-expand-lg navbar-dark container d-flex justify-content-between">
            <a class="navbar-brand" href="index.html">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22.3823" cy="22.3823" r="22.3823" fill="white" />
                    <path
                        d="M19.979 15.0189C20.3582 15.0189 20.6662 15.1453 20.9032 15.3981C21.1402 15.6509 21.2587 15.9669 21.2587 16.346V30.1625C21.2587 30.5733 21.1165 30.9209 20.8321 31.2053C20.5635 31.4739 20.2239 31.6082 19.8131 31.6082C19.6077 31.6082 19.3944 31.5766 19.1732 31.5134C18.9678 31.4344 18.8098 31.3317 18.6992 31.2053L9.38555 19.3795L10.0017 19.0003V30.281C10.0017 30.6602 9.87532 30.9762 9.62254 31.229C9.38555 31.4818 9.06956 31.6082 8.67458 31.6082C8.2954 31.6082 7.98731 31.4818 7.75032 31.229C7.51333 30.9762 7.39484 30.6602 7.39484 30.281V16.4645C7.39484 16.0538 7.52913 15.7141 7.79772 15.4455C8.08211 15.1611 8.42969 15.0189 8.84047 15.0189C9.06166 15.0189 9.29075 15.0663 9.52774 15.1611C9.76473 15.2401 9.93852 15.3665 10.0491 15.5403L19.0784 27.058L18.6755 27.3423V16.346C18.6755 15.9669 18.794 15.6509 19.031 15.3981C19.268 15.1453 19.584 15.0189 19.979 15.0189Z"
                        fill="#00785D" />
                    <path
                        d="M32.2397 15.0189C33.7564 15.0189 34.886 15.3744 35.6286 16.0854C36.3712 16.7963 36.7424 17.847 36.7424 19.2373C36.7424 19.9799 36.5608 20.6355 36.1974 21.2043C35.834 21.7573 35.2968 22.1918 34.5858 22.5078C33.8749 22.808 32.998 22.958 31.9553 22.958L32.0501 21.8916C32.5398 21.8916 33.1007 21.9627 33.7327 22.1049C34.3647 22.2313 34.9729 22.4683 35.5575 22.8158C36.1579 23.1476 36.6477 23.6216 37.0268 24.2378C37.4218 24.8382 37.6193 25.6123 37.6193 26.5603C37.6193 27.603 37.4455 28.4562 37.0979 29.1198C36.7661 29.7833 36.3238 30.2968 35.7708 30.6602C35.2178 31.0236 34.6253 31.2764 33.9934 31.4186C33.3614 31.545 32.7531 31.6082 32.1686 31.6082H26.2675C25.8567 31.6082 25.5092 31.4739 25.2248 31.2053C24.9562 30.9209 24.8219 30.5733 24.8219 30.1625V16.4645C24.8219 16.0538 24.9562 15.7141 25.2248 15.4455C25.5092 15.1611 25.8567 15.0189 26.2675 15.0189H32.2397ZM31.8131 17.8154H27.5947L27.9027 17.4362V21.7257L27.6184 21.5124H31.8842C32.3423 21.5124 32.7531 21.3623 33.1165 21.0621C33.4799 20.7619 33.6616 20.3275 33.6616 19.7587C33.6616 19.0793 33.4878 18.5895 33.1402 18.2894C32.8084 17.9734 32.366 17.8154 31.8131 17.8154ZM32.0027 24.3089H27.6895L27.9027 24.1193V29.1198L27.6658 28.8828H32.1686C32.8953 28.8828 33.472 28.6932 33.8986 28.314C34.3252 27.919 34.5384 27.3344 34.5384 26.5603C34.5384 25.8493 34.3963 25.3358 34.1119 25.0199C33.8275 24.7039 33.4878 24.5064 33.0928 24.4274C32.6978 24.3484 32.3344 24.3089 32.0027 24.3089Z"
                        fill="#FECA37" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="index.html#beranda">Beranda <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.html#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.html#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.html#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <!-- tambah pasien -->
    <div class="tambahPasien container-fluit text-center text-warning py-5" style="background-image: url({{ asset('assets/img/tambah-pasien-bg.svg') }});" >
        <h1>Tambah Pasien</h1>
    </div>

    <div class="container-sm py-5 form">
        <table class="table table-borderless w-100 m-auto">
        <!-- <table class="table table-bordered w-100 m-auto"> -->
            <tr>
                <td class=""><a href="/" class="text-decoration-none text-dark"><i class="bi bi-arrow-left"></i> Kembali</a></td>
            </tr>
            <form action="">
                <tr class="trForm">
                    <td>Upload Profile</td>
                    <td>
                        <div class="square d-flex flex-column justify-content-center align-items-center">
                            <input type="file">
                            <p>*Max file 5mb</p>
                        </div>
                    </td>
                </tr>
                <tr class="trForm">
                    <td>ID Pasien</td>
                    <td><input type="text"></td>
                </tr>
                <tr class="trForm">
                    <td>Nama</td>
                    <td><input type="text"></td>
                </tr>
                <tr class="trForm">
                    <td>NIK</td>
                    <td><input type="text"></td>
                </tr>
                <tr class="trForm">
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="#jk" id="lk">
                        <label for="lk" class="mr-3">Laki-laki</label>
                        <input type="radio" name="#jk" id="pr">
                        <label for="pr">Perempuan</label>
                    </td>
                </tr>
                <tr class="trForm">
                    <td>Alamat Kab, Jalan</td>
                    <td><input type="text"></td>
                </tr>
                <tr class="trForm">
                    <td>NO Telepon</td>
                    <td><input type="number"></td>
                </tr>
                <tr class="trForm">
                    <td></td>
                    <td><button type="submit" class="btn btn-warning">Simpan</button></td>
                </tr>
            </form>
        </table>
    </div>


    <!-- Footer -->
    <div class="container pt-5">
        <footer class="text-center">
            <div class="icons mb-4">
                <a href=""><i class="bi bi-instagram text-dark mx-3"></i></a>
                <a href=""><i class="bi bi-youtube text-dark mx-3"></i></a>
                <a href=""><i class="bi bi-tiktok text-dark mx-3"></i></a>
                <a href=""><i class="bi bi-facebook text-dark mx-3"></i></a>
            </div>
            <p class="mb-5">Nano Herbal adalah Perusahaan Herbal Farmasi </p>
            <hr>
            <p> &#9400; Copyright 2023 - NanoHerbal.id</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
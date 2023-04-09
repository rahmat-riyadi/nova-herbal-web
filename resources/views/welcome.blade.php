<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nano Herbal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome-page.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/icons/rounded-logo.svg') }}" />
</head>

<body>

    <!-- Navbar -->
    <div class="container-fluit position-sticky w-100" id="navbarContainer">
        <nav class="navbar navbar-expand-lg navbar-dark container d-flex justify-content-between">
            <a class="navbar-brand" href="#beranda">
                <img width="70px" src="{{ asset('assets/img/new_logo_w.svg') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Hero -->
    <div class="hero container-fluid d-flex flex-column justify-content-start align-items-center text-light overflow-hidden" id="beranda" style="background-image: url({{ asset('assets/img/heroBg.svg') }});" >
        <h1 class="text-center mt-5">Bahan Baku Murni, Seluruhnya</h1>
        <h1 class="text-center ">Berasal dari Bahan Alam</h1>
        <p class="text-center mb-4">NanoHerbal adalah Perusahaan Herbal Farmasi</p>
        <a href="index2.html" class="btn btn-warning mb-5">Daftar Pasien</a>
        <img src="{{ asset('assets/img/hero.svg') }}" alt="Hero" class="heroImg" style="width: 50%; min-width: 320px;">
    </div>

    <!-- Produk -->
    {{-- <div class="produk container py-5" id="produk">
        <h1 class="text-center mb-5">Produk Kami</h1>
        <div class="row justify-content-between">
            <div class="col-12 col-md-6 col-lg-3 col-sm-6 my-2 d-flex justify-content-center px-2">
                <div class="card w-100" style="width: 18rem;">
                    <img src="img/produk.svg" class="card-img-top" alt="Ifalmin">
                    <div class="card-body">
                        <h5 class="card-title">Ifalmin</h5>
                        <p class="card-text ">Efektif mengobati kista, mioma uteri, tumor, kanker, tiroid dan prostat.
                            Mengandung senyawa anti-oksidan dan anti-inflomasi yang berguna untuk mengatasi seluruh
                            keluhan kesehatan berupa peradangan dan pembengkakan.</p>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 col-sm-6 my-2 d-flex justify-content-center px-2">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{ asset('assets/img/produk.svg') }}" class="card-img-top" alt="Ifalmin">
                    <div class="card-body">
                        <h5 class="card-title">Ifalmin</h5>
                        <p class="card-text">Efektif mengobati kista, mioma uteri, tumor, kanker, tiroid dan prostat.
                            Mengandung senyawa anti-oksidan dan anti-inflomasi yang berguna untuk mengatasi seluruh
                            keluhan kesehatan berupa peradangan dan pembengkakan.</p>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 col-sm-6 my-2 d-flex justify-content-center px-2">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{ asset('assets/img/produk.svg') }}" class="card-img-top" alt="Ifalmin">
                    <div class="card-body">
                        <h5 class="card-title">Ifalmin</h5>
                        <p class="card-text">Efektif mengobati kista, mioma uteri, tumor, kanker, tiroid dan prostat.
                            Mengandung senyawa anti-oksidan dan anti-inflomasi yang berguna untuk mengatasi seluruh
                            keluhan kesehatan berupa peradangan dan pembengkakan.</p>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 col-sm-6 my-2 d-flex justify-content-center px-2">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{ asset('assets/img/produk.svg') }}" class="card-img-top" alt="Ifalmin">
                    <div class="card-body">
                        <h5 class="card-title">Ifalmin</h5>
                        <p class="card-text">Efektif mengobati kista, mioma uteri, tumor, kanker, tiroid dan prostat.
                            Mengandung senyawa anti-oksidan dan anti-inflomasi yang berguna untuk mengatasi seluruh
                            keluhan kesehatan berupa peradangan dan pembengkakan.</p>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-whatsapp"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testimoni -->
    {{-- <div class="container testimoni py-5" id="testimoni">
        <h1 class="text-center mb-5">Testimoni</h1>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card m-auto text-light">
                            <div class="card-body d-flex p-5">
                                <div class="info w-100 d-flex flex-column justify-content-between">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit assumenda odio veritatis expedita itaque magnam, iste perferendis optio eaque, ratione reiciendis officiis. Sunt ducimus quidem inventore tenetur aspernatur facilis ipsam.</p>
                                    <div class="name">
                                        <p class="text-warning mb-0">Syarwan Hanifah</p>
                                        <p>Kelapa Dinas</p>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/icons/user.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card m-auto text-light">
                            <div class="card-body d-flex p-5 justify-content-center">
                                <div class="info w-100 d-flex flex-column justify-content-between">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit assumenda odio veritatis expedita itaque magnam, iste perferendis optio eaque, ratione reiciendis officiis. Sunt ducimus quidem inventore tenetur aspernatur facilis ipsam.</p>
                                    <div class="name">
                                        <p class="text-warning mb-0">Syarwan Hanifah</p>
                                        <p>Kelapa Dinas</p>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/icons/user.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card m-auto text-light">
                            <div class="card-body d-flex p-5">
                                <div class="info w-100 d-flex flex-column justify-content-between">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit assumenda odio veritatis expedita itaque magnam, iste perferendis optio eaque, ratione reiciendis officiis. Sunt ducimus quidem inventore tenetur aspernatur facilis ipsam.</p>
                                    <div class="name">
                                        <p class="text-warning mb-0">Syarwan Hanifah</p>
                                        <p>Kelapa Dinas</p>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/icons/user.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                    data-slide="prev">
                    <i class="bi bi-arrow-left-circle-fill text-warning" style="font-size: 1.8em;"></i>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                    data-slide="next">
                    <i class="bi bi-arrow-right-circle-fill text-warning" style="font-size: 1.8em;"></i>
                </button>
            </div>
        </div>
    </div> --}}

    <!-- Kontak -->
    <div class="kontak container-fluit py-5" id="kontak">
        <h1 class="text-center mb-5">Kontak</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20.5" cy="20" r="20" fill="#00785D"/>
                        <path d="M30.5 29.25H10.5C10.09 29.25 9.75 29.59 9.75 30C9.75 30.41 10.09 30.75 10.5 30.75H30.5C30.91 30.75 31.25 30.41 31.25 30C31.25 29.59 30.91 29.25 30.5 29.25Z" fill="#FECA37"/>
                        <path d="M25.5 10H15.5C12.5 10 11.5 11.79 11.5 14V30H29.5V14C29.5 11.79 28.5 10 25.5 10ZM18.5 25.25H15.5C15.09 25.25 14.75 24.91 14.75 24.5C14.75 24.09 15.09 23.75 15.5 23.75H18.5C18.91 23.75 19.25 24.09 19.25 24.5C19.25 24.91 18.91 25.25 18.5 25.25ZM18.5 20.75H15.5C15.09 20.75 14.75 20.41 14.75 20C14.75 19.59 15.09 19.25 15.5 19.25H18.5C18.91 19.25 19.25 19.59 19.25 20C19.25 20.41 18.91 20.75 18.5 20.75ZM18.5 16.25H15.5C15.09 16.25 14.75 15.91 14.75 15.5C14.75 15.09 15.09 14.75 15.5 14.75H18.5C18.91 14.75 19.25 15.09 19.25 15.5C19.25 15.91 18.91 16.25 18.5 16.25ZM25.5 25.25H22.5C22.09 25.25 21.75 24.91 21.75 24.5C21.75 24.09 22.09 23.75 22.5 23.75H25.5C25.91 23.75 26.25 24.09 26.25 24.5C26.25 24.91 25.91 25.25 25.5 25.25ZM25.5 20.75H22.5C22.09 20.75 21.75 20.41 21.75 20C21.75 19.59 22.09 19.25 22.5 19.25H25.5C25.91 19.25 26.25 19.59 26.25 20C26.25 20.41 25.91 20.75 25.5 20.75ZM25.5 16.25H22.5C22.09 16.25 21.75 15.91 21.75 15.5C21.75 15.09 22.09 14.75 22.5 14.75H25.5C25.91 14.75 26.25 15.09 26.25 15.5C26.25 15.91 25.91 16.25 25.5 16.25Z" fill="#FECA37"/>
                    </svg>
                    <h5 class="my-3">Kantor</h5>
                    <p class="text-center">Ruko 1 blok C/13 Citraland, Jl. Tun Abdul Razak Sulawesi Selatan</p>
                </div>
                <div class="col-10 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20.5" cy="20" r="20" fill="#00785D"/>
                        <path d="M30.5 29.25H10.5C10.09 29.25 9.75 29.59 9.75 30C9.75 30.41 10.09 30.75 10.5 30.75H30.5C30.91 30.75 31.25 30.41 31.25 30C31.25 29.59 30.91 29.25 30.5 29.25Z" fill="#FECA37"/>
                        <path d="M25.5 10H15.5C12.5 10 11.5 11.79 11.5 14V30H17.5V23.94C17.5 23.42 17.92 23 18.44 23H22.57C23.08 23 23.51 23.42 23.51 23.94V30H29.51V14C29.5 11.79 28.5 10 25.5 10ZM23 17.25H21.25V19C21.25 19.41 20.91 19.75 20.5 19.75C20.09 19.75 19.75 19.41 19.75 19V17.25H18C17.59 17.25 17.25 16.91 17.25 16.5C17.25 16.09 17.59 15.75 18 15.75H19.75V14C19.75 13.59 20.09 13.25 20.5 13.25C20.91 13.25 21.25 13.59 21.25 14V15.75H23C23.41 15.75 23.75 16.09 23.75 16.5C23.75 16.91 23.41 17.25 23 17.25Z" fill="#FECA37"/>
                    </svg>
                    <h5 class="my-3">Kantor</h5>
                    <p class="text-center">Ruko 1 blok C/13 Citraland, Jl. Tun Abdul Razak Sulawesi Selatan</p>
                </div>
                <div class="col-10 col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20.5" cy="20" r="20" fill="#00785D"/>
                        <g clip-path="url(#clip0_105_1143)">
                        <path d="M31.0722 26.4935L28.6333 24.8674L26.4651 23.4223C26.0467 23.1439 25.4844 23.2352 25.1755 23.6317L23.8339 25.3564C23.5457 25.7306 23.0273 25.8382 22.614 25.6094C21.7037 25.103 20.6272 24.6262 18.252 22.248C15.8768 19.8697 15.397 18.7963 14.8906 17.886C14.6618 17.4727 14.7693 16.9543 15.1436 16.6661L16.8683 15.3245C17.2648 15.0157 17.3561 14.4534 17.0777 14.0349L15.6769 11.9335L14.0064 9.42779C13.7221 9.00129 13.153 8.87324 12.7134 9.13685L10.7869 10.2926C10.2662 10.5994 9.88351 11.0947 9.718 11.6759C9.19117 13.5967 9.08495 17.834 15.8757 24.6247C22.6664 31.4154 26.9032 31.3088 28.824 30.7819C29.4052 30.6165 29.9006 30.2338 30.2073 29.7131L31.3631 27.7866C31.6267 27.347 31.4987 26.7779 31.0722 26.4935Z" fill="#FECA37"/>
                        <path d="M22.017 12.4137C25.5766 12.4176 28.4613 15.3023 28.4652 18.8619C28.4652 19.0714 28.635 19.2412 28.8446 19.2412C29.054 19.2412 29.2239 19.0714 29.2239 18.8619C29.2195 14.8835 25.9955 11.6595 22.0171 11.6551C21.8076 11.6551 21.6378 11.8249 21.6378 12.0344C21.6377 12.2438 21.8075 12.4137 22.017 12.4137Z" fill="#FECA37"/>
                        <path d="M22.017 14.6895C24.3202 14.6922 26.1867 16.5587 26.1894 18.8618C26.1894 19.0713 26.3592 19.2412 26.5687 19.2412C26.7782 19.2412 26.948 19.0714 26.948 18.8618C26.9449 16.1398 24.7391 13.934 22.017 13.9308C21.8075 13.9308 21.6377 14.1007 21.6377 14.3102C21.6377 14.5197 21.8075 14.6895 22.017 14.6895Z" fill="#FECA37"/>
                        <path d="M22.017 16.9654C23.064 16.9666 23.9123 17.815 23.9136 18.8619C23.9136 19.0714 24.0834 19.2412 24.2929 19.2412C24.5024 19.2412 24.6722 19.0714 24.6722 18.8619C24.6705 17.3962 23.4828 16.2085 22.0171 16.2068C21.8076 16.2068 21.6378 16.3766 21.6378 16.5861C21.6377 16.7956 21.8075 16.9654 22.017 16.9654Z" fill="#FECA37"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_105_1143">
                        <rect width="22" height="22" fill="white" transform="translate(9.5 9)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <h5 class="my-3">Kantor</h5>
                    <p class="text-center mb-0">T : 082259300771</p>
                    <p class="text-center">E : NanoHerbal@gmail.com</p>
                </div>
            </div>
        </div>
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
            <p class="mb-5 " style="font-weight: 300;">Nano Herbal adalah Perusahaan Herbal Farmasi </p>
            <hr>
            <p>	&#9400; Copyright 2023 - NanoHerbal.id</p>
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
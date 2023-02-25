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
    <div class="produk container py-5" id="produk">
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
    </div>

    <!-- Testimoni -->
    {{-- <div class="container-fluid testimoni py-5" id="testimoni">
        <h1 class="text-center mb-5">Testimoni</h1>
        <div class="carousel-container">
            @for ($i = 1; $i < 5; $i++)
            <div class="caro-item p-5" style="background-image: url({{ asset('assets/icons/testimoni-bg.svg') }});" >
                <div style="height: 100%;" >
                    <div class="d-flex flex-lg-row flex-sm-column-reverse" style="height: 100%;" >
                        <div class="right-side justify-content-between ">
                            <p class="m-0 font-size-h3 text-white" >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eveniet. Rem, repellendus consequuntur. Consequuntur nobis facilis quae amet magnam assumenda molestiae quaerat, corrupti vitae impedit nostrum, tenetur culpa? Est, obcaecati!
                            </p>
                            <div class="testi-user">
                                <p class="font-size-h5 text-white"> <span style="color: #FECA37;" class="font-weight-light" >Syafwan Hanifah</span><br> Kepala Dinas</p>
                            </div>
                        </div>
                        <div class="left-side" >
                            <div style="background-image: url({{ asset('assets/icons/user.jpg') }});" class="box-img"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div> --}}

    <div class="container testimoni py-5" id="testimoni">
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
    </div>

    

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
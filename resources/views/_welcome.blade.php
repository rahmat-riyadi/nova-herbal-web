<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nano Herbal</title>

        <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/welcome-page.css') }}" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="{{ asset('assets/icons/rounded-logo.svg') }}" />
    </head>
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading" >

        {{-- <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="assets/media/logos/logo-letter-3.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div> --}}

        <div class="container-fluid py-5 d-flex align-items-stretch justify-content-between bg-primary header-fixed">
            <!--begin::Left-->
            <div class="navbar navbar-expand-lg d-flex justify-content-between " style="width: 100%;">
                <!--begin::Page Title-->
                <img src="{{ asset('assets/icons/rounded-logo.svg') }}" alt="">
                <!--end::Page Title-->
                <!--begin::Header Menu Wrapper-->
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                    <!--begin::Header Menu-->
                    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                        <!--begin::Header Nav-->
                        <ul class="menu-nav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-text text-white">Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="index.html" class="menu-link">
                                    <span class="menu-text text-white">Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="index.html" class="menu-link ">
                                    <span class="menu-text text-white">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Header Nav-->
                    </div>
                    <!--end::Header Menu-->
                </div>
                <!--end::Header Menu Wrapper-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="kt_header_mobile_toggle">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <div class="fas fa-bars icon-xl text-white"></div>
                </button>
            </div>
            <!--end::Left-->
        </div>

        <div class="container-xxl p-0">
            <div class="hero bg-primary position-relative pt-20" >
    
                <p class="text-center font-weight-bolder text-white hero-text" >Bahan Baku Murni, Seluruhnya <br> Berasal dari Bahan Alam</p>
                <p class="text-center text-white font-size-h6 font-size-xl-h3 text-small">NanoHerbal adalah Perusahaan Herbal Farmasi </p>
                
                <div class="d-flex mt-6">
                    <a href="" class="btn m-auto font-weight-bolder py-3 px-6" style="background-color:#FECA37;">
                        Daftar Pasien
                    </a>
                </div>

                <img src="{{ asset('assets/icons/hero.svg') }}" class="position-absolute" alt="">
            </div>

            <div class="testimoni bg-white pt-20">
                <h3 class="text-center font-weight-bolder font-size-h1 mb-10">Testimoni</h3>

                <div class="carousel-container">
                    @for ($i = 1; $i < 5; $i++)
                    <div class="caro-item bg-primary p-15" style="background-image: url({{ asset('assets/icons/testimoni-bg.svg') }});" >
                        <div style="height: 100%;" >
                            <div class="d-flex flex-lg-row flex-sm-column-reverse" style="height: 100%;" >
                                <div class="right-side  justify-content-between ">
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
            </div>

        </div>

        <div class="contact d-flex flex-column bg-white py-20 align-items-center">

            <div class="d-flex" style="width: fit-content;">
                <img src="{{ asset('assets/icons/ig.svg') }}" alt="">
                <img class="mx-5" src="{{ asset('assets/icons/yt.svg') }}" alt="">
                <img class="mr-5" src="{{ asset('assets/icons/tiktok.svg') }}" alt="">
                <img src="{{ asset('assets/icons/fb.svg') }}" alt="">
            </div>

            <p class="text-center font-size-h6 font-size-xl-h3 mt-10">NanoHerbal adalah Perusahaan Herbal Farmasi </p>

        </div>

        <div class="footer bg-white py-5 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="font-weight-bolder mr-2">© Copyright 2023 - NanoHerbal.id</span>
                    {{-- <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Nano Herbal</a> --}}
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Container-->
        </div>


        <script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>    

    </body>
</html>

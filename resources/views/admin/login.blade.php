<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Nano Herbal | Login</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('assets/css/pages/login/classic/login-2.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assets/icons/rounded-logo.svg') }}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
                <!--begin::Content-->
				<div class="order-1 order-lg-1 bg-primary bgi-no-repeat flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url({{ asset('assets/icons/login-bg.png') }}); background-position: bottom center; background-size: 100%;">
					<!--begin::Content body-->
					<div class="d-flex flex-column flex-lg-center mt-10">
						<div class="d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ asset('assets/icons/rounded-logo.svg') }}" width="70px" alt="">
							<h3 class="display-4 font-weight-bold my-7 text-white" style="color: #FECA37 !important;">Selamat Datang</h3>
							<p class="font-weight-bold font-size-lg text-white text-center opacity-80">The ultimate Bootstrap, Angular 8, React &amp; VueJS admin theme
							<br />framework for next generation web apps.</p>
						</div>
					</div>
					<!--end::Content body-->
				</div>
				<!--end::Content-->
				<!--begin::Aside-->
				<div class="login-aside order-2 order-lg-2 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin::Aside body-->
						<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
							<!--begin::Signin-->
							<div class="login-form login-signin">
								<div class="text-center mb-10 mb-lg-15">
									<h2 class="font-weight-bolder font-size-h1">Login</h2>
									<p class="text-muted font-weight-bold">Silahkan Masukkan Username dan <br> Password anda</p>
								</div>

								@if (session()->has('loginFailed'))
									
                                <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                                    <div class="alert-text">{{ session('loginFailed') }}</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                        </button>
                                    </div>
                                </div>
								@endif

								<!--begin::Form-->
								<form class="form" action="/admin/login" method="post" id="">

                                    @csrf

									<div class="form-group py-3 m-0">
                                        <label >Email</label>
                                        <input type="text" name="email" class="form-control form-control-solid" />
									</div>
									<div class="form-group py-3 m-0">
                                        <label class="">Password</label>
                                        <div class="input-icon input-icon-right">
                                            <input type="password" name="password" class="form-control form-control-solid pass" />
                                            <span><i id="visibleBtn" class="fas fa-eye"></i></span>
                                        </div>
									</div>
									<div class="form-group py-3 m-0">
                                        <button class="btn btn-block mt-5 font-weight-bold" style="background-color: #FECA37;" >
                                            Masuk
                                        </button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
						</div>
						<!--end::Aside body-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('assets/js/pages/custom/login/login-general.js?v=7.0.5') }}"></script>
		<!--end::Page Scripts-->

		<script>

			const visibleBtn = document.querySelector('#visibleBtn')
			const passInput = document.querySelector('.pass')

			visibleBtn.addEventListener('click', () => {

				visibleBtn.classList.toggle('fa-eye')
				visibleBtn.classList.toggle('fa-eye-slash')

				if(visibleBtn.classList.contains('fa-eye-slash')){
					passInput.type = "text"
				} else {
					passInput.type = "password"
				}

			})

		</script>
	</body>
	<!--end::Body-->
</html>
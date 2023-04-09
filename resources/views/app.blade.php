
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Nano Herbal | Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/additional.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assets/img/new_logo.svg') }}" />

		<meta name="csrf-token" content="{{ csrf_token() }}" />

		@livewireStyles
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{ asset('assets/img/new_logo.svg') }}" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
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
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				@include('partials.sidebar')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					@include('partials.header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						@php
							$route = Route::current()->getName();
						@endphp
						@if ($route == 'dashboard' || $route == 'patient')
							@include('partials.subheader')
						@endif
						<!--end::Subheader-->
						<!--begin::Modal-->
						<div class="modal fade" id="subheader7Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Select Location</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<div id="kt_subheader_leaflet" style="height:450px; width: 100%;"></div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
										<button id="submit" type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Apply</button>
									</div>
								</div>
							</div>
						</div>
						<!--end::Modal-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							@yield('content')
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">{{ Carbon\Carbon::now()->year }}©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Nano Herbal</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->

		{{-- <audio src="{{ asset('assets/notif_sound/ip_wa.mp3') }}" id="notif-sound" hidden></audio> --}}

		<!-- begin::User Panel-->
		@include('components.user-panel')
		<!-- end::User Panel-->

		<!--begin::Search Panel-->
		@livewire('medicine-panel')
		<!--end::Search Panel-->
		
		<!--begin::Scrolltop-->
		@include('partials.scrollTop')
		<!--end::Scrolltop-->

		@livewireScripts

		<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
		<script>

			var audio = new Audio("{{ asset('assets/notif_sound/ip_wa.mp3') }}")

			Pusher.logToConsole = true;

			var pusher = new Pusher('ca320183e7c7905cb965', {
				cluster: 'ap1'
			});

			var channel = pusher.subscribe('public-channel');

			channel.bind('patient-added-event', () => {
				Livewire.emitTo('patients-table', 'refresh')
			})

			channel.bind('new-medicine-event', () => {
				Livewire.emitTo('patients-table', 'refresh')
				Livewire.emitTo('current-patient-table', 'refresh')
				Livewire.emitTo('history-table', 'refresh')

				const role = "{{ auth()->user()->role }}"

				if(role == 'admin')
					audio.play()

			})

			channel.bind('medicine-done-event', () => {
				Livewire.emitTo('patients-table', 'refresh')
				Livewire.emitTo('current-patient-table', 'refresh')
				Livewire.emitTo('history-table', 'refresh')

				const role = "{{ auth()->user()->role }}"

				console.log(role)

				if(role == 'superadmin')
					audio.play()

			})

			channel.bind('patient-event', () => {
				Livewire.emitTo('current-patient-table', 'refresh')
				Livewire.emitTo('history-table', 'refresh')
				Livewire.emitTo('disease-table', 'refresh')
				Livewire.emitTo('lab-result-table', 'refresh')
				Livewire.emitTo('patient-note', 'refresh')
			})

			const deleteData = (e) => {
				let action = $(e).data('href')
				let data = {_method: 'delete'}

				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false
					})
					swalWithBootstrapButtons.fire({
						title: 'Apakah anda yakin?',
						icon: 'question',
						showCancelButton: true,
						confirmButtonText: 'Ya, hapus',
						cancelButtonText: 'Tidak, batal!',
						reverseButtons: true
					}).then((result) => {
						if (result.isConfirmed) {
							$.post(action,data)
								.done(function(res){
									if (res.message=="successfully") {
										swalWithBootstrapButtons.fire({
											title: 'deleted',
											text: 'Your data has been deleted.',
											icon: 'success'
										})
										.then( () => {
											if(res.from == 'patient'){
												history.go(-1)
											} else {
												location.reload()
											}
										})
									}
								})
								.fail(function(res) {

									console.log(res)

									swalWithBootstrapButtons.fire(
										'',
										'Data tidak dapat di hapus (Data sedang di pakai).',
										'warning'
									)
								})
						}
					})
            }


		</script>
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5') }}"></script>
		<script src="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.js?v=7.0.5') }}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('assets/js/pages/widgets.js?v=7.0.5') }}"></script>

		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>

		@stack('script')

		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
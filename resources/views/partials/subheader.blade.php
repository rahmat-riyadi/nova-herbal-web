<div 
    class="subheader py-5 py-lg-15 gutter-b subheader-transparent" 
    id="kt_subheader"
    @if (Route::current()->getName() == 'createPatient')
        style="background-color: #00785D; background-position: center bottom; background-repeat: no-repeat; background-image: url({{ asset('assets/icons/form-pattern.svg') }}); min-height: 25vh; max-height: 25vh;"
    @else
        style="background-color: #00785D; background-position: right bottom; background-size: auto 100%; background-repeat: no-repeat; background-image: url({{ asset('assets/icons/subheader.svg') }}); min-height: 25vh; max-height: 25vh;"
    @endif
>
    <div class="container d-flex flex-column">
        <!--begin::Title-->

        @if (Route::current()->getName() == 'createPatient')

            <h2 class="m-auto" style="color: #FECA37;" >
                Tambah Pasien
            </h2>

        @else
            
            @if(Str::contains(Route::current()->getName(), 'patient'))
            <div class="d-flex align-items-sm-end flex-column flex-sm-row mb-5">
                <h2 class="text-white mr-5 mb-0">
                    Daftar Pasien
                </h2>
            </div>
            @endif
            <!--end::Title-->
            <!--begin::Search Bar-->
            <div class="d-flex justify-content-between align-items-md-center mb-2 flex-column flex-md-row">
                <div class="bg-white rounded p-2 d-flex flex-grow-1 flex-sm-grow-0" style="min-width: 440px;">
                    <!--begin::Form-->
                    <form class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1">
                        <!--begin::Input-->
                        <div class="d-flex flex-grow-1 align-items-center py-3 py-sm-0 px-sm-3">
                            <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <input type="text" class="form-control border-0 font-weight-bold pl-2 flex-grow-1" placeholder="Job Title" />
                        </div>
                        <!--end::Input-->

                        @if(!Str::contains(Route::current()->getName(), 'patient'))
                            <button type="submit" class="btn btn-dark font-weight-bold btn-hover-light-primary mt-3 mt-sm-0 px-7">Search</button>
                        @endif
                    </form>
                    <!--end::Form-->
                </div>
                <!--begin::Advanced Search-->
                @if(Str::contains(Route::current()->getName(), 'patient'))
                <div class="mt-4 my-md-0">
                    <a href="/admin/{{ Route::current()->getName() }}/create" style="background-color: #FECA37; border: none;" class="btn font-weight-bold btn-hover-light-dark mt-3 mt-sm-0 px-4">
                        <i class="flaticon2-add-1 text-dark icon-nm mr-1" ></i>
                        Tambah Pasien
                    </a>
                </div>
                @endif
                <!--end::Advanced Search-->
            </div>

        @endif

        <!--end::Search Bar-->
    </div>
</div>
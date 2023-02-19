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
            @if (!Str::contains(Request::url(), 'show'))
            <div class="d-flex justify-content-between align-items-md-center mb-2 flex-column flex-md-row">
                <div class="bg-white rounded p-2 d-flex flex-grow-1 flex-sm-grow-0" style="min-width: 440px;">
                    <!--begin::Form-->
                    <form class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1">
                        <!--begin::Input-->
                        @livewire('search-input')
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

        @endif

        <!--end::Search Bar-->
    </div>
</div>
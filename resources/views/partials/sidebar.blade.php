<div class="aside aside-left d-flex flex-column" id="kt_aside">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('assets/icons/logo.svg') }}" class="max-h-30px" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Nav Wrapper-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
        <!--begin::Nav-->
        <ul class="nav flex-column">
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
                <a href="/admin" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @if(Route::current()->getName() == 'index') active @endif">
                    {{-- <i class="flaticon2-protection icon-lg"></i> --}}
                    <img width="30px" src="{{ asset('assets/icons/dashboard.svg') }}" alt="">
                </a>
            </li>

            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Pasien">
                <a href="/admin/patient" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @if(Str::contains(Route::current()->uri, 'patient')) active @endif">
                    {{-- <i class="flaticon2-protection icon-lg"></i> --}}
                    <img width="30px" src="{{ asset('assets/icons/patient.svg') }}" alt="">
                </a>
            </li>

            {{-- <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
                <a href="/admin" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @if(Str::contains(Route::current()->uri, 'patient')) active @endif">
                    <img width="30px" src="{{ asset('assets/icons/patient.svg') }}" alt="">
                </a>
            </li> --}}
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Nav Wrapper-->
</div>
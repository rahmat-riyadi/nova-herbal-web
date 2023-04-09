<div id="kt_quick_search" style="z-index: 1002;" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between mb-5">
        <h3 class="font-weight-bold m-0">Pengaturan Obat</h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_search_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Container-->
        <div class="quick-search quick-search-offcanvas quick-search-has-result" >
            <!--begin::Wrapper-->
            <div class="quick-search-wrapper pt-5">
                <div class="quick-search-result">
                    <!--begin::Section-->
                    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">Daftar Obat {{ $keyword }}</div>
                    <div class="mb-10">
                        
                        @foreach ($medicines as $medicine)
                        <!--begin::Item-->
                        <div class="d-flex align-items-center justify-content-between flex-grow-1 mb-1">
                            <div class="d-flex mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                                    <span class="label label-dot label-success mr-3"></span>
                                    {{ $medicine->name }}
                                </a>
                            </div>
                            <button class="btn btn-icon  btn-hover-icon-danger" >
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </button>
                        </div>
                        <!--end::Item-->
                        @endforeach

                        <div class="d-flex align-items-center justify-content-between flex-grow-1 mb-1" data-toggle="collapse" data-target="#collapseOne3" >
                            <div class="d-flex mt-2 mb-2">
                                <a href="#" class="font-weight-bold text-primary text-hover-primary" >
                                    <span class="label label-dot label-success mr-3"></span>
                                    Tambah Obat
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
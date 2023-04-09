<div id="kt_header" class="header bg-white header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->

        <div class="d-flex align-items-stretch mr-2"></div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="topbar-item">
                <p class="m-0 font-weight-bolder mr-5" >{{ auth()->user()->name }}</p>
                <div class="btn btn-icon w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <div class="symbol mr-3">

                        @if (empty(auth()->user()->image))
                            @php
                                $words = explode(' ',auth()->user()->name);
                                $initial = '';
                                for ($i=0; $i < 2; $i++) { 
                                    $initial .= mb_substr($words[$i] ?? '', 0, 1);
                                }
                            @endphp
                            <div class="symbol-label font-size-h1">{{ $initial }}</div>
                        @else
                            <img alt="Pic" style="object-fit: cover" src="{{ asset('storage/'. auth()->user()->image) }}"/>
                        @endif
                        
                    </div>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
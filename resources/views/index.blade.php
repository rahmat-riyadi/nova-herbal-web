@extends('app')

@section('content')

<div class="container">
    <!--begin::Dashboard-->

    <div class="row">

        <div class="col-4">
            <div class="card rounded-lg card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right bottom; background-size: 40% auto; background-image: url({{ asset('assets/icons/card-bg.svg') }})">
                <!--begin::Body-->
                <div class="card-body my-4 py-6">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="font-weight-bolder font-size-h2 m-0 ">8.972</p>
                            <p class="font-weight-bold m-0 mt-1" >Total Semua Pasien</p>
                        </div>
                        <img style="height:60px;"  src="{{ asset('assets/icons/people.svg') }}" alt="">
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
        <div class="col-4">
            <div class="card rounded-lg card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right bottom; background-size: 40% auto; background-image: url({{ asset('assets/icons/card-bg.svg') }})">
                <!--begin::Body-->
                <div class="card-body my-4 py-6">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="font-weight-bolder font-size-h2 m-0 ">127</p>
                            <p class="font-weight-bold m-0 mt-1" >Total Pasien Bulan Ini</p>
                        </div>
                        <img style="height:60px;"  src="{{ asset('assets/icons/profile2user.svg') }}" alt="">
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>

        <div class="col-4">
            <div class="card rounded-lg card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right bottom; background-size: 40% auto; background-image: url({{ asset('assets/icons/card-bg.svg') }})">
                <!--begin::Body-->
                <div class="card-body my-4 py-6">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="font-weight-bolder font-size-h2 m-0 ">5</p>
                            <p class="font-weight-bold m-0 mt-1" >Total Pasien Hari Ini</p>
                        </div>
                        <img style="height:60px;"  src="{{ asset('assets/icons/profile.svg') }}" alt="">
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>

    </div>

    <!--begin::Row-->
    <div class="row">
        <div class="col">
            <!--begin::Advance Table Widget 10-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body py-0">

                    <div class="d-flex pb-5 pt-10">
                        <h3 class="card-label">Daftar Pasien Hari Ini</h3>
                    </div>

                    <!--begin::Table-->
                    @livewire('patients-table')
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 10-->
        </div>
    </div>
    <!--end::Row-->
    <!--end::Dashboard-->
</div>
    
@endsection
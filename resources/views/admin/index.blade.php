@extends('app')

@section('content')

<div class="container">
    <!--begin::Dashboard-->

    <div class="row">

        @livewire('total-patient-card')

        @livewire('monthly-patient-card')

        @livewire('current-patient-card')

    </div>

    <!--begin::Row-->
    <div class="row">
        <div class="col">
            <!--begin::Advance Table Widget 10-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body py-0">

                    @if (session()->has('message'))
                        @include('components.alert')
                    @endif

                    <div class="d-flex pb-5 pt-10">
                        <h3 class="card-label">Daftar Pasien Hari Ini</h3>
                    </div>

                    <!--begin::Table-->
                    @livewire('current-patient-table')
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
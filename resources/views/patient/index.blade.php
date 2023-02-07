@extends('app')

@section('content')

<div class="container">
    <div class="card card-custom">
        <div class="card-body">

            <h3 class="card-label">Daftar Pasien</h3>

            <ul class="nav nav-tabs nav-bold nav-tabs-line mb-2">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#all_patient">
                        <span class="nav-icon"><i class="flaticon2-avatar" ></i></span>
                        Semua
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#current_patient">
                        <span class="nav-icon"><i class="flaticon2-user" ></i></span>
                        Hari Ini
                    </a>
                </li>
            </ul>

            @if (session()->has('success'))
            <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ session('success') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @endif
            <!--begin: Datatable-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all_patient" role="tabpanel" aria-labelledby="all_patient">
                    @livewire('patients-table')
                </div>
                <div class="tab-pane fade" id="current_patient" role="tabpanel" aria-labelledby="current_patient">
                    @livewire('current-patient-table')
                </div>
            </div>
            <!--end: Datatable-->
        </div>
    </div>

</div>
    
@endsection
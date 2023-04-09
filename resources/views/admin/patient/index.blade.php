@extends('app')

@section('content')

<div class="container">
    <div class="card card-custom">
        <div class="card-body">

            <h3 class="card-label">Daftar Pasien</h3>

            @if (session()->has('message'))
                @include('components.alert')
            @endif

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

@push('script')

<script>

    const handleDeletePatient = () => {

        const id = document.querySelector('.delete-patient').getAttribute('data-id')
        const form = document.querySelector('.delete-patient-form')
        form.action = `/admin/patient/delete/${id}`
        form.submit()

    }

</script>
    
@endpush
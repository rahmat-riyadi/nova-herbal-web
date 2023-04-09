@extends('app')

@section('content')

<div class="container pt-10">
    <div class="card card-custom">
        <div class="card-header border-0 py-5">
            <h3 class="card-title d-flex align-items-center">
                <img width="45px" src="{{ asset('assets/icons/drug.svg') }}" alt="">
                <span class="card-label ml-6 font-weight-bolder text-dark">Riwayat Obat : {{ $patients->name }}</span>
            </h3>
            <div class="card-toolbar">
                <a href="/admin/patient/show/{{ $patients->id }}" class="btn btn-outline-secondary font-weight-bold">Kembali</a>
            </div>
        </div>
        <div class="card-body" style="padding-top: 0">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            @if (session()->has('message'))
                @include('components.alert', ['message' => 'message'])
            @endif
            <!--begin: Datatable-->
            @livewire('history-table', ['patients_id' => $patients->name, 'patients' => $patients])
            <!--end: Datatable-->
        </div>
    </div>

    @include('components.history-form-modal')

</div>
    
@endsection

@push('script')

<script>

    const handleClickDone = () => {
        const id = document.querySelector('#doneBtn').getAttribute('data-id')
        Livewire.emit('changeStatus', id)
    }

    const handleEditHistory = (btn) => {

        const comingTime = btn.getAttribute('data-history-coming-time')
        const medicine = btn.getAttribute('data-history-medicine')
        const capsulColor = btn.getAttribute('data-history-capsul-color')
        const price = btn.getAttribute('data-history-price')
        const patientId = btn.getAttribute('data-patient-id')
        const historyId = btn.getAttribute('data-history-id')

        document.querySelector("[name='coming_time']").value = comingTime
        document.querySelector("[name='medicine']").value = medicine
        document.querySelector("[name='capsul_color']").value = capsulColor ?? ''
        document.querySelector("[name='price']").value = price

        document.querySelector('#historyModalTitle').innerHTML = 'Ubah Obat'

        document.querySelector('.history-form').action = `/admin/patient/update/medicine/${patientId}/${historyId}`

    }

    const handleDeleteHistory = (btn) => {
        const action = btn.getAttribute('data-href')
        const form = document.querySelector('.delete-history-form')
        form.action = action
    }


</script>

    
@endpush
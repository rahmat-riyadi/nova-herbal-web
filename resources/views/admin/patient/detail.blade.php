@extends('app')

@section('content')

<div class="container pt-10">
    <!--begin::Profile-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto w-md-280px w-300px" >
            <!--begin::Card-->
            <div class="card card-custom">

                <!--begin::Body-->

                <div class="card-header bgi-no-repeat d-flex py-10" style="background-color: #00785D; background-size: auto 100%; background-position: center; background-image: url({{ asset('assets/icons/profil-bg.svg') }});">
                    <div class="text-center m-auto">
                        <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-3">
                            @php
                                $words = explode(' ',$patients->name);
                                $initial = '';
                                for ($i=0; $i < 2; $i++) { 
                                    $initial .= mb_substr($words[$i] ?? '', 0, 1);
                                }
                            @endphp
                            <div class="symbol-label font-size-h1">{{ $initial }}</div>
                        </div>
                        <h4 class="font-weight-bold my-2 text-white">{{ $patients->name }}</h4>
                        <p class="text-white" >234</p>
                        <span class="label label-warning label-inline font-weight-bold label-lg py-5 text-dark font-size-lg">
                            {{ $patients->gender }}
                        </span>
                    </div>
                </div>

                <div class="card-body pt-15">

                    <div class="row mb-3">
                        <div class="col">
                            <p class="text-muted">Umur</p>
                        </div>
                        <div class="col">
                            <p class="text-dark">{{ $patients->age ?? '-' }} tahun</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p class="text-muted">Nik</p>
                        </div>
                        <div class="col">
                            <p class="text-dark">{{ $patients->nik }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col ">
                            <p class="text-muted ">Alamat</p>
                        </div>
                        <div class="col">
                            <p class="text-dark">{{ $patients->address }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <p class="text-muted">No. Telepon</p>
                        </div>
                        <div class="col">
                            <p class="text-dark">{{ $patients->phone }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <p class="text-muted">Pekerjaan</p>
                        </div>
                        <div class="col">
                            <p class="text-dark">{{ $patients->job ?? '-' }}</p>
                        </div>
                    </div>

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid ml-8">

            <!--begin::Riwayat Penyakit Table-->
            <div class="card card-custom gutter-b">

                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Riwayat Penyakit</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" data-toggle="modal" data-target="#diseaseModal" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">

                    @if (session()->has('diseaseMessage'))
                        @include('components.alert', ['message' => 'diseaseMessage'])
                    @endif

                    <!--begin::Table-->
                   @livewire('disease-table', ['diseases' => $patients->disease])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Riwayat Penyakit Table-->

            <!--begin::Riwayat Obat Table-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Riwayat Obat</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" data-toggle="modal" data-target="#historyModal" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">

                    @if (session()->has('message'))
                        @include('components.alert', ['message' => 'message'])
                    @endif
                    <!--begin::Table-->
                    @livewire('history-table', ['patients_id' => $patients->id])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Riwayat Obat Table-->

            <!--begin::Hasil Lab Table-->
            <div class="card card-custom gutter-b">

                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Hasil Laboratorium</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" data-toggle="modal" data-target="#labModal" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">

                    @if (session()->has('labMessage'))
                        @include('components.alert', ['message' => 'labMessage'])
                    @endif

                    <!--begin::Table-->
                    @livewire('lab-result-table', ['patients' => $patients])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>

            <div class="card card-custom gutter-b">

                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Catatan</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" data-toggle="modal" data-target="#noteModal" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">

                    @if (session()->has('noteMessage'))
                        @include('components.alert', ['message' => 'noteMessage'])
                    @endif

                    <!--begin::Table-->
                    @livewire('patient-note', ['patients' => $patients])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Hasil lab Table-->

        </div>
        <!--end::Content-->
    </div>
    <!--end::Profile-->

    @include('components.history-form-modal')
    
    @include('components.disease-form-modal')

    @include('components.note-form-modal')

    @include('components.lab-form-modal')

    @include('components.detail-lab-modal')


</div>
    
@endsection

@push('script')

<script>

    const imgInput = document.querySelector('#imgInputClick')  
    const changeButton = document.querySelector('#changeButton')  
    const imgModalPrev = document.querySelector('#imageModalPrev')

    const deleteDiseaseBtn = document.querySelector('.delete-disease-btn')

    changeButton.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
    })

    imgInput.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
    })

    const viewImage = (btn) => {
        const img = btn.getAttribute('data-image')        
        imgModalPrev.src = img
    }


    const previewImage = (input) => {

        // const image = document.querySelector('#image')
        const imgPrev = document.querySelector('.img-prev')

        imgInput.style.display = 'none'
        imgPrev.classList.remove('d-none')
        changeButton.classList.remove('d-none')
            
        const oFReader = new FileReader()
        oFReader.readAsDataURL(input.files[0])

        
        oFReader.onload = function(oFREvent) {
            imgPrev.src = oFREvent.target.result
        }
    }

    const handleEditLabPhoto = (btn) => {

        document.querySelector('#labModalTitle').innerHTML = 'Ubah Hasil Laboratorium'

        const imgPrev = document.querySelector('.img-prev')
        const form = document.querySelector('.lab-form')

        imgInput.style.display = 'none'
        imgPrev.classList.remove('d-none')
        changeButton.classList.remove('d-none')
        imgPrev.src = btn.getAttribute('data-lab-img')

        const patientId = btn.getAttribute('data-patient-id')
        const labId = btn.getAttribute('data-lab-id')

        form.action = `/admin/patient/update/lab-result/${patientId}/${labId}`

    }

    const handleDeleteLabPhoto = () => {
        const labId = document.querySelector('.delete-lab-btn').getAttribute('data-lab-id')
        const patientId = document.querySelector('.delete-lab-btn').getAttribute('data-patient-id')
        const form = document.querySelector('.delete-lab-form')
        form.action = `/admin/patient/delete/lab-result/${patientId}/${labId}`

        console.log(labId)
        console.log(patientId)
        console.log(form.action)
        form.submit()
    }

    const handleEditDisease = (btn) => {

        const diseaseName = btn.getAttribute('data-disease-name')
        const note = btn.getAttribute('data-disease-note')
        const patientId = btn.getAttribute('data-patient-id')
        const diseaseId = btn.getAttribute('data-disease-id')

        document.querySelector("[name='disease']").value = diseaseName
        document.querySelector("[name='notes']").value = note

        document.querySelector('#diseaseModalTitle').innerHTML = 'Ubah Riwayat Penyakit'
        document.querySelector('.disease-form').action = `/admin/patient/update/disease-history/${patientId}/${diseaseId}`

    }

    const handleDeleteDisase = () => {
        const diseaseId = document.querySelector('.delete-disease-btn').getAttribute('data-disease-id')
        const patientId = document.querySelector('.delete-disease-btn').getAttribute('data-patient-id')
        const form = document.querySelector('.delete-disease-form')
        form.action = `/admin/patient/delete/disease-history/${patientId}/${diseaseId}`
        form.submit()
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
        document.querySelector("[name='capsul_color']").value = capsulColor
        document.querySelector("[name='price']").value = price

        document.querySelector('#historyModalTitle').innerHTML = 'Ubah Obat'

        document.querySelector('.history-form').action = `/admin/patient/update/medicine/${patientId}/${historyId}`

    }

    const handleDeleteHistory = () => {
        const diseaseId = document.querySelector('.delete-history-btn').getAttribute('data-history-id')
        const patientId = document.querySelector('.delete-history-btn').getAttribute('data-patient-id')
        const form = document.querySelector('.delete-history-form')
        form.action = `/admin/patient/delete/medicine/${patientId}/${diseaseId}`
        form.submit()
    }

    const handleEditNote = (btn) => {

        const note = btn.getAttribute('data-note')
        const noteDate = btn.getAttribute('data-note-date')
        const noteId = btn.getAttribute('data-note-id')
        const patientId = btn.getAttribute('data-patient-id')

        document.querySelector("[name='date']").value = noteDate 
        document.querySelector("[name='note']").value = note
        // document.querySelector("[name='patients_id']").value = patientId
        // document.querySelector("[name='price']").value = price

        document.querySelector('#noteModalTitle').innerHTML = 'Ubah Catatan'

        document.querySelector('.note-form').action = `/admin/patient/update/note/${patientId}/${noteId}`
    }

    const handleDeleteNote = () => {
        const noteId = document.querySelector('.delete-note-btn').getAttribute('data-note-id')
        const patientId = document.querySelector('.delete-note-btn').getAttribute('data-patient-id')
        const form = document.querySelector('.delete-note-form')
        form.action = `/admin/patient/delete/note/${patientId}/${noteId}`
        form.submit()
    }

    const handleClickDone = () => {
        const id = document.querySelector('#doneBtn').getAttribute('data-id')
        Livewire.emit('changeStatus', id)
    }

    $('#diseaseModal').on('hide.bs.modal', function(e){
        document.querySelector('#diseaseModalTitle').innerHTML = 'Tambah Riwayat Penyakit'
        document.querySelector('.disease-form').action = `/admin/patient/create/disease-history/{{ $patients->id }}`
        document.querySelector("[name='disease']").value = ''
        document.querySelector("[name='notes']").value = ''
    })

    $('#historyModal').on('hide.bs.modal', function(e){
        document.querySelector('#historyModalTitle').innerHTML = 'Tambah Obat'
        document.querySelector('.history-form').action = `/admin/patient/create/medicine/{{ $patients->id }}`
        document.querySelector("[name='coming_time']").value = ''
        document.querySelector("[name='medicine']").value = ''
        document.querySelector("[name='capsul_color']").value = ''
        document.querySelector("[name='price']").value = ''
    })

    $('#noteModal').on('hide.bs.modal', function(e){
        document.querySelector('#noteModalTitle').innerHTML = 'Tambah Catatan'
        document.querySelector('.note-form').action = `/admin/patient/create/note/{{ $patients->id }}`
        document.querySelector("[name='date']").value = ''
        document.querySelector("[name='note']").value = ''
    })


</script>


    
@endpush
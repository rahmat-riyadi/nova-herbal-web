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

                <div class="card-header bgi-no-repeat d-flex py-10" style="background-color: #00785D; background-size: auto; background-position: center; background-image: url({{ asset('assets/img/profil-bg.png') }});">
                    <div class="text-center m-auto">
                        <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-3">
                            @php
                                $words = explode(' ',$patients->name);
                                $initial = '';
                                for ($i=0; $i < 2; $i++) { 
                                    $initial .= mb_substr($words[$i] ?? '', 0, 1);
                                }
                            @endphp
                            <div class="symbol-label font-size-h1" style="color: #00785D;" >{{ $initial }}</div>
                        </div>
                        <h4 class="font-weight-bold my-2 text-white">{{ $patients->name }}</h4>
                        <p class="text-white" >234</p>
                        <span class="label label-warning label-inline font-weight-bold label-lg py-5 text-dark font-size-lg">
                            {{ $patients->gender }}
                        </span>
                    </div>
                </div>

                <div class="card-body pt-15" style="padding-left: 15px;padding-right:15px;" >

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
                <div class="card-header border-0 py-5 ">
                    <h3 class="card-title d-flex align-items-center">
                        <img width="45px" src="{{ asset('assets/icons/virus.svg') }}" alt="">
                        <span class="card-label font-weight-bolder text-dark ml-6">Riwayat Penyakit</span>
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
                   @livewire('disease-table', ['name' => $patients->name, 'patients' => $patients])
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
                        <img width="45px" src="{{ asset('assets/icons/drug.svg') }}" alt="">
                        <span class="card-label ml-6 font-weight-bolder text-dark">Riwayat Obat</span>
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
                    @livewire('history-table', ['patients_id' => $patients->name, 'patients' => $patients])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
                <div class="card-footer align-items-center d-flex justify-content-between py-3">
                    <span class="font-size-lg" >total Kedatangan : {{ $total }}</span>
                    <a href="/admin/patient/medicine/{{ $patients->id }}" class="btn btn-outline-secondary font-weight-bold">Selengkapnya</a>
                </div>
            </div>
            <!--end::Riwayat Obat Table-->

            <!--begin::Hasil Lab Table-->
            <div class="card card-custom gutter-b">

                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <img width="45px" src="{{ asset('assets/img/mikroskop.svg') }}" alt="">
                        <span class="card-label ml-6 font-weight-bolder text-dark">Hasil Laboratorium</span>
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
                        <img width="45px" src="{{ asset('assets/img/note.svg') }}" alt="">
                        <span class="ml-6 card-label font-weight-bolder text-dark">Catatan</span>
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

    let stream

    const deleteDiseaseBtn = document.querySelector('.delete-disease-btn')

    changeButton.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
    })

    imgInput.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
    })

    const viewImage = (btn) => {
        const img = btn.getAttribute('data-image')        
        const note = document.createTextNode(btn.getAttribute('data-note'))        
        const detail = document.querySelector('.lab-detail-note')


        detail.appendChild(note)

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
        const note = btn.getAttribute('data-note')

        const labNote = document.querySelector('.lab-note')

        labNote.value = note


        form.action = `/admin/patient/update/lab-result/${patientId}/${labId}`

    }

    const handleDeleteLabPhoto = (btn) => {
        const action = btn.getAttribute('data-href')
        const form = document.querySelector('.delete-lab-form')
        form.action = action
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

    const handleDeleteDisase = (btn) => {
        const action = btn.getAttribute('data-href')
        const form = document.querySelector('.delete-disease-form')
        form.action = action
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

    const handleDeleteNote = (btn) => {
        const action = btn.getAttribute('data-href')
        const form = document.querySelector('.delete-note-form')
        form.action = action
    }

    const handleClickDone = () => {
        const id = document.querySelector('#doneBtn').getAttribute('data-id')
        Livewire.emit('changeStatus', id)
    }

    const onCameraClick = async () => {
        const video = document.querySelector("#video");

        video.style.display = 'block'

        stream = await navigator.mediaDevices.getUserMedia({ 
            video: {
                width: { ideal: 1280 },
                height: { ideal: 1024 },
            }, 
            audio: false 
        })
        video.srcObject = stream

        const settings = stream.getVideoTracks()[0].getSettings();

        canvas.width = settings.width
        canvas.height = settings.height
    }

    const onCapture = () => {

        const video = document.querySelector("#video")
        const canvas = document.querySelector('#canvas')
        const retakeBtn = document.querySelector('#retake')
        const saveBtn = document.querySelector('#savePic')
        const captureBtn = document.querySelector('#capturePic')

        captureBtn.classList.add('d-none')
        retakeBtn.classList.remove('d-none')
        saveBtn.classList.remove('d-none')

        canvas.getContext('2d').translate(canvas.width, 0)
        canvas.getContext('2d').scale(-1,1)
        canvas.getContext('2d').drawImage(video, 0, 0)

        video.style.display = 'none'
        canvas.style.display = 'block'

        stream.getTracks().forEach( stream => stream.stop() )
    }

    const onRetake = async () => {
        const video = document.querySelector("#video");
        const capture = document.querySelector("#capture");
        const canvas = document.querySelector('#canvas')
        const retakeBtn = document.querySelector('#retake')
        const saveBtn = document.querySelector('#savePic')
        const captureBtn = document.querySelector('#capturePic')

        retakeBtn.classList.add('d-none')
        saveBtn.classList.add('d-none')
        captureBtn.classList.remove('d-none')

        canvas.style.display = 'none'
        video.style.display = 'block'

        const stream = await navigator.mediaDevices.getUserMedia({ 
            video: {
                width: { ideal: 1280 },
                height: { ideal: 1024 },
            }, 
            audio: false 
        })

        video.srcObject = stream
    }

    const onSavePic = () => {
        const canvas = document.querySelector('#canvas')
        const input = document.querySelector("[name='image']")
        const form = document.querySelector('.lab-form')
        const img = document.querySelector('.img-prev')
        const changeButton = document.querySelector('#changeButton')
        const captureBtn = document.querySelector('#capturePic')
        const saveBtn = document.querySelector('#savePic')

        saveBtn.classList.add('d-none')
        captureBtn.classList.remove('d-none')
        changeButton.classList.remove('d-none')
        img.classList.remove('d-none')

        const date = new Date()
        canvas.toBlob( blob => {
            const name = "user-capture" + date + Math.random() * 100
            const file = new File( [ blob ], name.replace(' ', '-'))
            const dT = new DataTransfer();
            dT.items.add( file );
            input.files = dT.files;
        })

        imgInput.style.display = 'none'

        img.src = canvas.toDataURL('image/png')

    }

    const onCancel = () => {
        stream.getTracks().forEach( stream => stream.stop())
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

    $('#camera').on('show.bs.modal', function(e){
        onCameraClick()
    })


</script>


    
@endpush
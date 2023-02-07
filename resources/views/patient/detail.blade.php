@extends('app')

@section('content')

<div class="container">
    <!--begin::Profile 2-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
            <!--begin::Card-->
            <div class="card card-custom">

                {{-- {{ dd($patients) }} --}}

                <!--begin::Body-->

                <div class="card-header bgi-no-repeat d-flex py-10" style="background-color: #00785D; background-size: auto 100%; background-position: center; background-image: url({{ asset('assets/icons/profil-bg.svg') }});">
                    <div class="text-center m-auto">
                        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                            <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                        </div>
                        <h4 class="font-weight-bold my-2 text-white">{{ $patients->name }}</h4>
                        <p class="text-white" >234</p>
                        <span class="label label-warning label-inline font-weight-bold label-lg py-5 text-dark font-size-h6">
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
                            <p class="text-dark">{{ $patients->age }} tahun</p>
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

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Advance Table Widget 5-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Riwayat Obat</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah Obat</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    @livewire('history-table', ['patients_id' => $patients->id])
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 5-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title d-flex align-items-center">
                        <span class="card-label font-weight-bolder text-dark">Hasil Laboratorium</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn font-weight-bolder font-size-sm" style="background-color: #FECA37;">Tambah Hasil Obat</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive" style="max-height: 350px;" >
                        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="pl-0" style="min-width: 130px">Tanggal</th>
                                    <th style="min-width: 120px;" class="pl-0">Gambar Hasil Lab</th>
                                    <th class="pr-0 text-right" style="min-width: 160px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients->labResults as $labResult)
                                <tr>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">21/01/2023</a>
                                    </td>
                                    <td class="pl-0">
                                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">1</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Profile 2-->
</div>
    
@endsection

@push('script')

<script>

    var Table = function() {

        var historyTable = function() {

            var datatable = $('#history_table').KTDatatable({

                data: {
				    saveState: {cookie: false},
                },

                layout: {
                    scroll: true,
                    height: 300,
                    footer: false,
                },

                sortable: true,

                columns:[
                    {
                        field: 'id_patient',
                        title: 'Nomor Kartu',
                    },
                    {
                        field: 'id_patient',
                        title: 'Nomor Kartu',
                    },
                    {
                        field: 'id_patient',
                        title: 'Nomor Kartu',
                    },
                ]


            });
        };

        var labTable = function() {

            var datatable = $('#lab_table').KTDatatable({

                layout: {
                    scroll: true,
                    height: 300,
                    footer: false,
                },

                sortable: true,


            });
        };

        return {
                // public functions
                init: function() {
                    // historyTable();
                    // labTable();
                },
            };
        }();

    jQuery(document).ready(function() {
        Table.init();
    });


</script>
    
@endpush
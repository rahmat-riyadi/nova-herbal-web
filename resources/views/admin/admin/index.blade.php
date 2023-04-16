@extends('app')

@section('content')

<div class="container pt-10">
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Admin Management</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="/admin/admin/create" class="btn btn-primary btn-hover-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Tambah Data</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body" style="padding-top: 0">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            @if (session()->has('message'))
                @include('components.alert', ['message' => 'message'])
            @endif
            <!--begin: Datatable-->
            <div class="table-responsive">
                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                    <thead>
                        <tr class="text-uppercase">
                            <th class="pl-0" style="min-width: 30px">No. </th>
                            <th style="min-width: 150px">Nama</th>
                            <th style="min-width: 120px">Email</th>
                            <th style="min-width: 150px">Role</th>
                            <th class="pr-0 text-right" style="min-width: 160px">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $key => $item)
                            <tr>
                                <td class="pl-0">
                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">{{ $key+1 }}</a>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $item->name }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $item->email }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $item->role }}</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="/admin/admin/show/{{ $item->id }}" class="btn btn-light btn-text-success btn-hover-text-success font-weight-bold mr-2">Lihat</a>
                                    <a href="javascript:;" data-href="/admin/admin/delete/{{ $item->id }}" onclick="deleteData(this)" class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold mr-2">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end: Datatable-->
        </div>
    </div>
</div>
    
@endsection
<div class="table-responsive" style="max-height: 350px;" >

    @if (count($patients->labResults) > 0)
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
                <td class="pl-0 ">
                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ Carbon\Carbon::parse($labResult->created_at)->format('d-m-Y') }}</span>
                </td>
                <td class="pl-0">
                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">
                        <img src="{{ asset('storage/'. $labResult->image) }}" alt="" class="m-4" style="width: 70px; height: 70px; object-fit: cover;" >
                    </span>
                </td>
                <td class="pr-0 text-right">
                    <a 
                        href="javascript:;" 
                        onclick="viewImage(this)" 
                        class="btn btn-sm btn-light btn-icon mr-2" 
                        title="Detail" 
                        data-toggle="modal" 
                        data-target="#labImageModal" 
                        data-image="{{ asset('storage/'. $labResult->image) }}"
                    >
                        <span class="svg-icon svg-icon-dark svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo4\dist/../src/media/svg/icons\General\Visible.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                    </a>
                    <a 
                        href="javascript:;" 
                        class="btn mr-2 btn-sm btn-light btn-icon " 
                        title="Edit" 
                        data-toggle="modal" 
                        data-target="#labModal"
                        data-patient-id="{{ $labResult->patients_id }}"
                        data-lab-id="{{ $labResult->id }}"
                        data-lab-img="{{ asset('storage/'.$labResult->image) }}"
                        onclick="handleEditLabPhoto(this)"
                    >
                        <span class="svg-icon svg-icon-success svg-icon-md">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a href="javascript:;" class="btn btn-sm btn-light btn-icon delete-lab-btn" title="Delete" data-toggle="modal" data-target="#confirmDeleteLabResutl" data-patient-id="{{ $labResult->patients_id }}" data-lab-id="{{ $labResult->id }}" >
                        <span class="svg-icon svg-icon-danger svg-icon-md">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <div class="modal fade" id="confirmDeleteLabResutl" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;" >
                    <h5 class="modal-title">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body py-3" style="border: none;" >
                    <p class="m-0 font-weight-normal font-size-h6" >yakin ingin hapus data ?</p>
                </div>
                <div class="modal-footer " style="border: none;">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Batal</button>
                    <button type="button" onclick="handleDeleteLabPhoto()" class="btn btn-danger ">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <form action="" class="delete-lab-form" method="post">
        @csrf
    </form>
</div>
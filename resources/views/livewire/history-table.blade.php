<div class="table-responsive" style="max-height: 450px;" >

    @if (count($histories) > 0)
    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
        <thead>
            <tr class="text-uppercase">
                <th class="pl-0" style="min-width: 150px">Tanggal Datang</th>
                <th class="pl-0" style="min-width: 150px">Waktu Datang</th>
                <th style="min-width: 210px">Nama Obat</th>
                <th style="min-width: 150px">Warna Capsul</th>
                <th style="min-width: 150px">Nominal Satuan</th>
                <th style="min-width: 130px">status</th>
                <th class="pr-0 text-right" style="min-width: 160px">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($histories as $history)
            <tr>
                <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">
                        {{ Carbon\Carbon::parse($history->coming_time)->format('d-m-Y') }}
                    </a>
                </td>
                <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">
                        {{ Carbon\Carbon::parse($history->created_at)->format('H:i:s') }}
                    </a>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $history->medicine }}</span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $history->capsul_color }}</span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bold d-block font-size-lg">Rp. {{ number_format($history->price) }}</span>
                </td>
                <td>
                    <span class="label label-lg label-light-{{ $history->status == 'Selesai' ? 'success' : 'warning' }} label-pill label-inline mr-2">
                        {{ $history->status }}
                    </span>
                </td>
                <td class="pr-0 text-right">
                    <a 
                        href="javascript:;" 
                        class="btn mr-2 btn-sm btn-light btn-icon " 
                        title="Selesai"
                        @if ($history->status != 'Selesai')
                            data-id="{{ $history->id }}"
                            id="doneBtn"
                            data-toggle="modal" 
                            data-target="#finishConfirm" 
                            disabled
                        @endif
                    >
                        <span 
                            class="svg-icon svg-icon-{{ $history->status == 'Selesai' ? 'light' : 'warning' }} svg-icon-md" 
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                    <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a 
                        href="javascript:;" 
                        class="btn mr-2 btn-sm btn-light btn-icon " 
                        title="Edit" 
                        data-toggle="modal" 
                        data-target="#historyModal"
                        data-patient-id="{{ $history->patients_id }}"
                        data-history-id="{{ $history->id }}"
                        data-history-coming-time="{{ Carbon\Carbon::parse($history->coming_time)->format('Y-m-d') }}"
                        data-history-medicine="{{ $history->medicine }}"
                        data-history-capsul-color="{{ $history->capsul_color }}"
                        data-history-price="{{ $history->price }}"
                        onclick="handleEditHistory(this)"
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
                    <a href="javascript:;" class="btn btn-sm btn-light btn-icon delete-history-btn" title="Delete" data-toggle="modal" data-target="#confirmDeleteHistory" data-patient-id="{{ $history->patients_id }}" data-history-id="{{ $history->id }}" >
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

    <div class="modal fade" id="finishConfirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;" >
                    <h5 class="modal-title">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body py-3" style="border: none;" >
                    <p class="m-0 font-weight-bold font-size-h4" >Apakah anda yakin ?</p>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" onclick="handleClickDone()" data-dismiss="modal" class="btn btn-primary">Ya, Selesai</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmDeleteHistory" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
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
                    <button type="button" onclick="handleDeleteHistory()" class="btn btn-danger ">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <form action="" class="delete-history-form" method="post">
        @csrf
    </form>

</div>
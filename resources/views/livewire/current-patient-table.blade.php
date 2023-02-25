<div>
    <div class="table-responsive" style="max-height: 450px;">
        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
            <thead>
                <tr class="text-uppercase">
                    <th class="pl-0" style="min-width: 30px">No. </th>
                    <th style="min-width: 30px">Nomor kartu</th>
                    <th style="min-width: 120px">Nama</th>
                    <th style="min-width: 180px">Waktu Kedatangan</th>
                    <th style="min-width: 150px">Status</th>
                    <th class="pr-0 text-right" style="min-width: 160px">action</th>
                </tr>
            </thead>
            <tbody>
    
                {{-- {{ dd($patients) }} --}}
    
                @foreach ($patients as $i => $patient)
                    <tr>
                        <td class="pl-0">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">{{ $i+1 }}</a>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $patient->id_patient }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $patient->name }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ Carbon\Carbon::parse($patient->coming_time)->format('d-m-Y')}}</span>
                        </td>
                        <td>
                            <span class="label label-lg label-light-{{ $patient->status == 'Selesai' ? 'success' : 'warning' }} label-pill label-inline mr-2">
                                {{ $patient->status }}
                            </span>
                        </td>
                        <td class="pr-0 text-right">
                            {{-- @if ($patient->status == 'Menunggu')
                                <button 
                                    class="btn btn-light btn-text-primary btn-hover-text-primary font-weight-bold mr-2"
                                    wire:click="changeStatus({{ $patient->id }})"
                                >
                                    Selesai
                                </button>
                            @endif --}}
                            <a href="/admin/patient/show/{{ $patient->patients_id }}" class="btn btn-light btn-text-success btn-hover-text-success font-weight-bold mr-2">Lihat</a>
                            <a href="#" data-id={{ $patient->patients_id }} class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold mr-2 delete-patient"  data-toggle="modal" data-target="#confirmDeletePatient" >Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination-container d-flex justify-content-end mt-10">
        {{ $patients->links('components.pagination') }}
    </div>

    <div class="modal fade" id="confirmDeletePatient" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
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
                    <button type="button" onclick="handleDeletePatient()" class="btn btn-danger ">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <form action="" class="delete-patient-form" method="post">
        @csrf
    </form>
    
</div>
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
                            <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ Carbon\Carbon::parse($patient->coming_time)->diffForHumans()}}</span>
                        </td>
                        <td>
                            <span class="label label-lg label-light-{{ $patient->status == 'Selesai' ? 'success' : 'warning' }} label-pill label-inline mr-2">
                                {{ $patient->status }}
                            </span>
                        </td>
                        <td class="pr-0 text-right">
                            @if ($patient->status == 'Menunggu')
                                <button 
                                    class="btn btn-light btn-text-primary btn-hover-text-primary font-weight-bold mr-2"
                                    wire:click="changeStatus({{ $patient->id }})"
                                >
                                    Selesai
                                </button>
                            @endif
                            <a href="/admin/patient/show/{{ $patient->patients_id }}" class="btn btn-light btn-text-success btn-hover-text-success font-weight-bold mr-2">Lihat</a>
                            <a href="#" class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold mr-2">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination-container d-flex justify-content-end mt-10">
        {{ $patients->links('components.pagination') }}
    </div>
    
</div>
<div class="table-responsive">
    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
        <thead>
            <tr class="text-uppercase">
                <th class="pl-0" style="min-width: 30px">No. </th>
                <th style="min-width: 150px">Nomor kartu</th>
                <th style="min-width: 120px">Nama</th>
                <th style="min-width: 150px">Nik</th>
                <th style="min-width: 130px">Alamat</th>
                <th class="pr-0 text-right" style="min-width: 160px">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $key => $patient)
                <tr>
                    <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg">{{ $key+1 }}</a>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $patient->id_patient }}</span>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $patient->name }}</span>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">{{ $patient->nik }}</span>
                    </td>
                    <td>
                        {{ $patient->address }}
                    </td>
                    <td class="pr-0 text-right">
                        <a href="/admin/patient/show/{{ $patient->id }}" class="btn btn-transparent-success font-weight-bold mr-2">Lihat</a>
                        <a href="#" class="btn btn-transparent-danger font-weight-bold mr-2">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
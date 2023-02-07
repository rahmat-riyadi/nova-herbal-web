<div class="table-responsive" style="max-height: 350px;" >
    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
        <thead>
            <tr class="text-uppercase">
                <th class="pl-0" style="min-width: 150px">Tanggal Datang</th>
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
                    <button 
                        class="btn btn-{{ $history->status == 'Selesai' ? 'light' : 'primary' }} btn-hover-primary" 
                        {{ $history->status == 'Selesai' ? 'disabled' : '' }}
                        wire:click="changeStatus({{ $history->id }})"
                    >
                        Selesai
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
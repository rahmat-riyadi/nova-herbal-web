<div class="modal fade" id="diseaseModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="diseaseModalTitle">Tambah Riwayat Penyakit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="flaticon2-cross text-warning"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="disease-form" action="/admin/patient/create/disease-history/{{ $patients->id }}" method="post">

                    @csrf

                    <input type="hidden" name="patients_id" value="{{ $patients->id }}" >

                    <div class="form-group">
                        <label>Nama Penyakit</label>
                        <input type="text" name="disease" class="form-control form-control-solid" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Catatan</label>
                        <textarea name="notes" class="form-control form-control-solid" required rows="3"></textarea>
                    </div>

                    <div class="d-flex">
                        <button type="submit" style="background-color: #FECA37;" class="btn font-weight-bold">Simpan</button>
                        <button type="button" class="btn btn-outline-dark font-weight-bold ml-5" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
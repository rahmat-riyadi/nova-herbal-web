<div class="modal fade" id="labModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="labModalTitle">Tambah Hasil Laboratorium</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="flaticon2-cross text-warning"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="lab-form" action="/admin/patient/create/lab-result/{{ $patients->id }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" name="patients_id" value="{{ $patients->id }}" >

                    <div class="form-group ">
                        <label id="labModalTitle" >Upload Gambar</label>
                        <input type="file" onchange="previewImage(this)" name="image" id="imageInput" hidden>
                        <img src="" alt="" class="img-prev d-none" style="width: 100%; max-height: 550px; object-fit: cover;" >
                        <div>
                            <div class="dropzone dropzone-default" id="imgInputClick">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Klik untuk upload.</h3>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="changeButton" class="btn btn-secondary d-none font-weight-bold mt-3">Ganti Gambar</button>
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
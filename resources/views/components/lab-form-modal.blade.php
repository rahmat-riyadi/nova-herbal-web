<div>
    <div class="modal fade" id="labModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
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
                        <div class="form-group flex-grow-1">
                            <label>Catatan</label>
                            <textarea name="note" class="form-control lab-note form-control-solid" rows="3"></textarea>
                        </div>
                        <div class="d-flex">
                            <button type="submit" style="background-color: #FECA37;" class="btn font-weight-bold">Simpan</button>
                            <button type="button" data-toggle="modal" data-target="#camera" style="background-color: #FECA37;" class="ml-5 btn font-weight-bold">Kamera</button>
                            <button type="button" class="btn btn-outline-dark font-weight-bold ml-5" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="camera" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body d-flex" style="height: 90vh;" >
                    <div class="right-side flex-fill bg-dark" style="height: 100%;">
                        <video style="display: none; width: 100%; height: 100%;transform: scale(-1,1); -webkit-transform: scale(-1, 1);" class="border-1" id="video" id="video" autoplay></video>
                        <canvas id="canvas" style="display: none; height: 100%; object-fit: contain; width: 100%; " ></canvas>
                    </div>
                    <div class="d-flex flex-column justify-content-center ml-5" style="height: 100%;">
                        <button onclick="onRetake()" id="retake" class="btn btn-lg btn-icon btn-circle btn-warning d-none" >
                            <i class="fas fa-sync-alt" ></i>
                        </button>
                        <button onclick="onCapture()" id="capturePic" class="btn btn-lg btn-icon btn-circle btn-success my-5" >
                            <i class="fas fa-circle" ></i>
                        </button>
                        <button data-dismiss="modal" onclick="onSavePic()" id="savePic" class="btn btn-lg btn-icon btn-circle btn-success my-5 d-none" >
                            <i class="fas fa-check" ></i>
                        </button>
                        <button data-dismiss="modal" onclick="onCancel()" class="btn btn-lg btn-icon btn-circle btn-secondary" >
                            <i class="fas fa-chevron-left" ></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('app')

@section('content')

<div class="container">
    <form action="{{ empty($patients) ? route('storePatient') : 'admin/patient/update/'. $patients['id'] }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 py-6 pb-0">
                <div class="card-title">
                    <a href="#" class="btn btn-link-dark font-weight-bold font-size-h5">
                        <i class="fa la-arrow-left text-dark" ></i>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-lg-2 align-self-center">Upload Profil</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="dropzone dropzone-default" id="kt_dropzone_1">
                            <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Pilih File</h3>
                                <span class="dropzone-msg-desc">*Maks file 3 mb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">ID Pasien</label>
                    <div class="col-lg-6">
                        <input type="text" name="id_patient" value="{{ $patients['id_patient'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" value="{{ $patients['name'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Umur</label>
                    <div class="col-lg-6">
                        <input type="text" name="age" value="{{ $patients['age'] ?? '' }}" class="form-control" />
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nik</label>
                    <div class="col-lg-6">
                        <input type="text" name="nik" value="{{ $patients['nik'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label" >Jenis Kelamin</label>
                    <div class="radio-inline col-lg-6 col-form-label">
                        <label class="radio radio-square">
                            <input value="Laki - Laki" type="radio" name="gender"/>
                            <span></span>
                            Laki - Laki
                        </label>
                        <label class="radio radio-square">
                            <input value="Perempuan" type="radio" name="gender"/>
                            <span></span>
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Alamat</label>
                    <div class="col-lg-6">
                        <input type="text" name="address" value="{{ $patients['address'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">No Telepon</label>
                    <div class="col-lg-6">
                        <input type="text" name="phone" value="{{ $patients['phone'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-2 offset-2" >
                        <button type="submit" class="btn" style="background-color: #FECA37;" >
                            Simpan
                        </button>
                    </div>
                </div>                

            </div>
        </div>
    </form>
</div>
    
@endsection
@extends('app')

@section('content')

<div class="container">
    <form action="{{ empty($user) ? route('storeAdmin') : 'admin/admin/update/'. $user['id'] }}" method="post">
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
                        <input type="text" name="name" value="{{ $user['name'] ?? '' }}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama</label>
                    <div class="col-lg-6">
                        <input type="text" name="email" value="{{ $user['email'] ?? '' }}" class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nik</label>
                    <div class="col-lg-6">
                        <input type="text" name="email" value="{{ $user['email'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label" >Jenis Kelamin</label>
                    <div class="radio-inline col-lg-6 col-form-label">
                        <label class="radio radio-square">
                            <input type="radio" name="radios13_1"/>
                            <span></span>
                            Laki - Laki
                        </label>
                        <label class="radio radio-square">
                            <input type="radio" name="radios13_1"/>
                            <span></span>
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Alamat</label>
                    <div class="col-lg-6">
                        <input type="text" name="email" value="{{ $user['email'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">No Telepon</label>
                    <div class="col-lg-6">
                        <input type="text" name="email" value="{{ $user['email'] ?? '' }}" class="form-control" />
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
@extends('app')

@section('content')

<div class="container pt-10">
    <form action="{{ empty($patients) ? route('storePatient') : '/admin/patient/update/'. $patients['id'] }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 py-6 pb-0">
                <div class="card-title">
                    <a href="/admin/patient" class="btn btn-link-dark font-weight-bold font-size-h5">
                        <i class="fa la-arrow-left text-dark" ></i>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
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
                        <input type="number" name="age" value="{{ $patients['age'] ?? '' }}" class="form-control" />
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
                            <input value="Laki - Laki" type="radio" name="gender" {{ !empty($patients) ? ($patients['gender'] == 'Laki - Laki') ? 'checked' : '' : '' }} />
                            <span></span>
                            Laki - Laki
                        </label>
                        <label class="radio radio-square">
                            <input value="Perempuan" type="radio" name="gender" {{ !empty($patients) ? ($patients['gender'] == 'Perempuan') ? 'checked' : '' : '' }} />
                            <span></span>
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Pekerjaan</label>
                    <div class="col-lg-6">
                        <input type="text" name="job" value="{{ $patients['job'] ?? '' }}" class="form-control" />
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
                    <div class="col-lg-1 offset-2" >
                        <button type="submit" class="btn" style="background-color: #FECA37;" >
                            Simpan
                        </button>
                    </div>
                    @if (!empty($patients))
                    <div class="col" >
                        <a href="/admin/patient/delete/{{ $patients->id }}" type="submit" class="btn btn-danger" >
                            Hapus
                        </a>
                    </div>
                    @endif
                </div>
                

            </div>
        </div>
    </form>
</div>
    
@endsection
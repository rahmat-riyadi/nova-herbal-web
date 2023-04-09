@extends('app')

@section('content')

<div class="container pt-10">
    <form action="{{ empty($medicine) ? route('storeMedicine') : '/admin/medicine/update/'. $medicine['id'] }}" method="post" >
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 py-6 pb-0">
                <div class="card-title">
                    <a href="/admin/medicine" class="btn btn-link-dark font-weight-bold font-size-h5">
                        <i class="fa la-arrow-left text-dark" ></i>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Jenis Obat</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" value="{{ $medicine['name'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Deskripsi</label>
                    <div class="col-lg-6">
                        <input type="text" name="description" value="{{ $medicine['description'] ?? '' }}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 offset-2" >
                        <button type="submit" class="btn" style="background-color: #FECA37;" >
                            Simpan
                        </button>
                    </div>
                    @if (!empty($medicine))
                    <div class="col" >
                        <a href="/admin/medicine/delete/{{ $medicine->id }}" class="btn btn-danger" >
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
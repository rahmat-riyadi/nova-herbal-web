@extends('app')

@section('content')

<div class="container">
    <form action="{{ empty($user) ? route('storeAdmin') : 'admin/admin/update/'. $user['id'] }}" method="post">
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 py-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Tambah Admin
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="/admin/admin" class="btn btn-secondary font-weight-bolder mr-5">Kembali</a>
                    <button type="submit"  class="btn btn-primary font-weight-bolder">Simpan</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama:</label>
                    <div class="col-lg-6">
                        <input type="text" name="name" value="{{ $user['name'] ?? '' }}" class="form-control" placeholder="Masukkan Nama"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Email:</label>
                    <div class="col-lg-6">
                        <input type="text" name="email" value="{{ $user['email'] ?? '' }}" class="form-control" placeholder="Masukkan Email"/>
                    </div>
                </div>

                @if (empty($user))
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Kata Sandi:</label>
                        <div class="col-lg-6">
                            <input type="text" name="password" value="{{ $user['password'] ?? '' }}" class="form-control" placeholder="Masukkan Kata Sandi"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Konfirmasi Kata Sandi:</label>
                        <div class="col-lg-6">
                            <input type="text" name="confirm_password" value="{{ $user['confirm_password'] ?? '' }}" class="form-control" placeholder="Konfirmasi Kata Sandi"/>
                        </div>
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Role</label>
                    <div class="col-lg-6 col-form-label">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-primary">
                                <input value="admin" type="radio" name="role" {{ !empty($user['role']) ?  $user['role'] == 'admin' ? 'checked' : '' : ''  }} />
                                <span></span>
                                Admin
                            </label>
                            <label class="radio radio-outline radio-primary">
                                <input value="superadmin" type="radio" name="role" {{ !empty($user['role']) ?  $user['role'] == 'superadmin' ? 'checked' : '' : ''  }}  />
                                <span></span>
                                Super Admin
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    
@endsection
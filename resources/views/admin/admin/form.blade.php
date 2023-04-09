@extends('app')

@section('content')

<div class="container pt-10">


    <form action="{{ empty($user) ? route('storeAdmin') : '/admin/admin/update/'. $user['id'] }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 py-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Tambah Admin
                </div>
                <div class="card-toolbar">
                    {{-- <a href="/admin/admin" class="btn btn-secondary font-weight-bolder mr-5">Kembali</a>
                    <button type="submit"  class="btn btn-primary btn-hover-primary font-weight-bolder">Simpan</button> --}}
                </div>
            </div>
            <div class="card-body">

                @if (session()->has('message'))
                    @include('components.alert', ['message' => 'message'])
                @endif

                <div class="form-group row align-items-center">
                    <label class="col-lg-2 col-form-label">Gambar</label>
                    <div class="col-lg-6" >
                        <input type="file" onchange="previewImage(this)" name="image" id="imageInput" hidden>

                        @if (empty($user) || empty($user->image))
                        <div class="dropzone dropzone-default" id="imgInputClick">
                            <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Upload File</h3>
                                <span class="dropzone-msg-desc">Klik disini untuk upload</span>
                            </div>
                        </div>
                        <img src="" alt="" class="img-prev d-none" style="width: 230px; max-height: 300px; object-fit: cover;" >
                        @else
                            <img src="{{ asset('storage/'. $user['image']) }}" alt="" class="img-prev" style="width: 230px; max-height: 300px; object-fit: cover;" >
                            <button type="button" id="changeButton" class="btn ml-3 btn-secondary font-weight-bold mt-3">
                                Ganti Gambar
                            </button>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nama:</label>
                    <div class="col-lg-6">
                        <input required type="text" name="name" value="{{ $user['name'] ?? '' }}" class="form-control" placeholder="Masukkan Nama"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Email:</label>
                    <div class="col-lg-6">
                        <input type="text" required name="email" value="{{ $user['email'] ?? '' }}" class="form-control" placeholder="Masukkan Email"/>
                    </div>
                </div>

                @if (empty($user))
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Kata Sandi:</label>
                        <div class="col-lg-6">
                            <input type="text" required name="password" value="{{ $user['password'] ?? '' }}" class="form-control" placeholder="Masukkan Kata Sandi"/>
                        </div>
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Role</label>
                    <div class="col-lg-6 col-form-label">
                        <div class="radio-inline">
                            <label class="radio radio-outline radio-primary">
                                <input required value="admin" type="radio" name="role" {{ !empty($user['role']) ?  $user['role'] == 'admin' ? 'checked' : '' : ''  }} />
                                <span></span>
                                Admin
                            </label>
                            <label class="radio radio-outline radio-primary">
                                <input required value="superadmin" type="radio" name="role" {{ !empty($user['role']) ?  $user['role'] == 'superadmin' ? 'checked' : '' : ''  }}  />
                                <span></span>
                                Super Admin
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 offset-2" >
                        <button type="submit" class="btn btn-primary btn-hover-primary"  >
                            Simpan
                        </button>
                    </div>
                    <div class="col" >
                        <a href="/admin/admin" class="btn btn-secondary mr-5">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    
@endsection

@push('script')

<script>

    const imgInput = document.querySelector('#imgInputClick')
    const changeButton = document.querySelector('#changeButton') 
    
    imgInput?.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
    })

    changeButton?.addEventListener('click', () => {
        document.querySelector('#imageInput').click()
})

    const previewImage = (input) => {

        const imgPrev = document.querySelector('.img-prev')
    
        if(imgInput != null){
            imgInput.style.display = 'none'
        }
        imgPrev.classList.remove('d-none')
            
        const oFReader = new FileReader()
        oFReader.readAsDataURL(input.files[0])
    
        
        oFReader.onload = function(oFREvent) {
            imgPrev.src = oFREvent.target.result
        }
    }

</script>

    
@endpush
<div class="col-4">
    <div class="card rounded-lg card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right bottom; background-size: 40% auto; background-image: url({{ asset('assets/icons/card-bg.svg') }})">
        <!--begin::Body-->
        <div class="card-body my-4 py-6">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <p class="font-weight-bolder font-size-h2 m-0 ">{{ $total }}</p>
                    <p class="font-weight-bold m-0 mt-1" >Total Pasien Hari Ini</p>
                </div>
                <img style="height:60px;"  src="{{ asset('assets/icons/profile.svg') }}" alt="">
            </div>
        </div>
        <!--end::Body-->
    </div>
</div>
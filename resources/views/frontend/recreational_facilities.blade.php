@include('frontend.layouts.header')

<div class="container-fluid">
    <div class="container">
        <div class="row mt-4">
            @foreach ($facilities['internal'] as $key => $internal)
                    <div class="px-5 py-3 col-3">
                        <img src="{{ asset('storage/'.$internal->image) }}" alt="internal_pic" class="mb-2">
                        <div class="h5 mb-2">{{ $internal->name }}</div>
                        <div>{{ $internal->content }}</div>
                    </div>
            @endforeach
        </div>
    </div>
    <div class="row" style="margin-top: 90px;">
        <div class="position-relative">
            <img src="{{ asset('assets/img/facilities/facilities.jpg') }}" alt=""
            class="w-100 vh-100" style="opacity: 0.8; object-fit:cover;">
            <div class="position-absolute w-100" style="top: 20%">
                <h1 class="text-center">Recreational Facilities</h1>
            </div>
            <div class="container mt-0">
                <div class="position-absolute w-100 d-flex " style="top: 30%">
                    @foreach ($facilities['external'] as $external)
                        <div class="col-3 p-2">
                            <img src="{{ asset('storage/'.$external->image) }}" alt="external_pic" class="w-100 mb-2">
                            <div class="text-white h4 text-center mb-2">{{ $external->name }}</div>
                            <div class="text-white">{{ $external->content }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


{{-- @include('frontend.layouts.footer') --}}

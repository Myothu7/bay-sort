@include('frontend.layouts.header')
<div class="container">
    <div class="row mt-5">
        @foreach ($accommodation as $val)
            <div class="col-6 mb-3 position-relative">
                <div class="position-absolute top-0 w-100 text-center mt-4">
                    <h7 class="d-inline py-1 px-3 text-white" style="background-color: #627e34">
                         {{Str::upper($val->name)}} <i class="fa-solid fa-minus"></i> {{ Str::upper($val->type) }}
                    </h7>
                </div>
                <div class="position-absolute bottom-0 w-100 text-center">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="me-3">
                            <i class="fa-solid fa-person-shelter fa-1x text-white"></i>
                            <span class="text-white">{{ $val->guest }} Guests</span>
                        </div>
                        <div class="me-3">
                            <i class="fa-solid fa-stairs fa-1x text-white"></i>
                            <span class="text-white">{{ $val->height }} Ft2</span>
                        </div>
                        <div>
                            <i class="fa-regular fa-star fa-1x text-white"></i>
                            <span class="text-white">From</span>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('storage/'.$val->image) }}" alt="pic" class="w-100" vh="100">
            </div>
        @endforeach
    </div>
</div>
@include('frontend.layouts.footer')

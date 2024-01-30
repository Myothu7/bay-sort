@include('frontend.layouts.header')
    <div class="container">
        <div class="row mt-5">
            @foreach ($nearby_attraction as $val)
                <div class="col-lg-6 mb-5">
                    @if ($val->id % 2 != 0)
                        <img src="{{ asset('storage/'.$val->image) }}" alt="">
                    @else
                        <div class="p-5">
                            <h5>{{ $val->name }}</h5>
                            <p>{{ $val->content }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 mb-5">
                    @if ($val->id % 2 != 0)
                        <div class="p-5">
                            <h5>{{ $val->name }}</h5>
                            <p>{{ $val->content }}</p>
                        </div>
                    @else
                        <img src="{{ asset('storage/'.$val->image) }}" alt="">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@include('frontend.layouts.footer')
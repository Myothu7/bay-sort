<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mandalay Bay Resort</title>
    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <body>
    {{-- header --}}
   <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="py-2 px-4">
                <a href="" class="text-decoration-none text-black">Team & Condition</a>
            </div>
            <div class="py-2 px-4">
                <a href="" class="text-decoration-none text-black">Book Now</a>
            </div>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <a href="{{ route('index') }}">
                <img src="https://mdybayresort.com/wp-content/uploads/2022/04/MDY-Bay-resort-logo-01.png" alt="" width="100" height="100">
            </a>
            <div class="">
                <a href="{{ route('accommodation') }}" class="text-decoration-none text-black">Accommodation</a>
            </div>
            <div class="">
                <a href="" class="text-decoration-none text-black">Bar & Restaurant</a>
            </div>
            <div class="">
                <a href="{{ route('shop') }}" class="text-decoration-none text-black">Shop with me</a>
            </div>
            <div class="">
                <a href="{{ route('health') }}" class="text-decoration-none text-black">Health & Fitness</a>
            </div>
            <div class="">
                <a href="{{route('facilities')}}" class="text-decoration-none text-black">Recreational Facilities</a>
            </div>
            <div class="">
                <a href="{{ route('nearby_attraction') }}" class="text-decoration-none text-black">Nearby Attractions</a>
            </div>
            <div class="">
                <a href="{{ route('about_us') }}" class="text-decoration-none text-black">About Us</a>
            </div>
            <div class="">
                <a href="{{ route('contact') }}" class="text-decoration-none text-black">Contact</a>
            </div>
        </div>
   </div>
   {{-- end header --}}

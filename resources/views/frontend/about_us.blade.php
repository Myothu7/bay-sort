@include('frontend.layouts.header')
    <div class="container mt-5">
        <h5 class="mb-3">About Us</h5>
        <div class="mb-5">
            <p>Mandalay Bay Resort is located on Mandalay Pyin Oo Lwin Road & Yeywa Hydropower Project Road, Pwin Oo Lwin Township (Maymyo) in Mandalay region and it takes 45-minute drive from Mandalay & 1 hour drive from Mandalay International Airport.</p>
            <p>Mandalay Bay Resort lies within 23 acres of landscaped gardens, combining the breathtaking beauty of unspoiled nature of the surrounding area. The hotel possesses a sophisticated contemporary design of traditional Myanmar forms with International high-end style.  Our guests will receive the quality of the services along with the breath-taking views of the area.</p>
            <p>Total 60 furnished rooms will welcome you in an elegant & familial atmosphere. 20 Ingyin rooms will offer you with a clean & safe atmosphere with basic room standard, 14 Gandamar rooms have direct access to a private terrace overlooking the picturesque Shan Mountains & nature oriented Doth-htar-waddy River. 14 Kumudra rooms are overlooking the gardens of Mandalay Waterboom and the Shan mountains with a private terrace and spacious bathroom. 10 Bungalows extend a spacious private terrace & a stunning breath taking views which is directly attached to Waterboom service. Marlar, which is a new separate two-story building positioned to enjoy uninterrupted views of the breath-taking Shan Mountains range & Doth-hta-waddy River , bringing nature right to your doorstep.</p>
            <p>The nature oriented and stylish restaurants and bars offer an unforgettable experience. From casual family friendly dining to chill-out lounges and bars, also a modern food court after adventurous water park, Mandalay Bay Resort offers unique food to satiate your taste buds.</p>
            <p>Our Bee Shop – Convenience Store & Souvenir Shop serve our guests with beer, soft drinks, coffee or tea, ready-made snack foods, skin cares & cosmetics, medicines, clothes & swimming costumes, daily necessities and more.</p>
            <p>Our recreational facilities await to extend services of boat trip, Canoe riding & Jet Ski experiences at Doth hta Waddy River, and we offer SPA Service, Fitness Center for our guests.</p>
            <p>Make it happen your adventurous day at Mandalay Waterboom, an international water park with water pools & different slides awaits for your adventure.</p>
            <p>Whether it is sightseeing, a weekend getaway or just the cultural and entertainment delights, you are always in the right place with a Mandalay Bay Resort Hotel.</p>
        </div>
        <div class="row mb-4">
            <div class="col-4 position-relative">
                <img src="{{ asset('assets/img/about-us/bar.jpg') }}" alt="" class="w-100" style="opacity: 0.9;">
                <div class="position-absolute w-100 text-center" style="bottom: 10%;">
                    <div class="text-white h5">BAR & RESTAURANT</div>
                    <div class="text-white h6">BREAKFAST & DINNER</div>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img src="{{ asset('assets/img/about-us/spa.jpg') }}" alt="" class="w-100" style="opacity: 0.9;">
                <div class="position-absolute w-100 text-center" style="bottom: 10%;">
                    <div class="text-white h5">SPA & WELLNESS</div>
                    <div class="text-white h6">OPEN DAILY</div>
                </div>
            </div>
            <div class="col-4 position-relative">
                <img src="{{ asset('assets/img/about-us/accommodation.jpg') }}" alt="" class="w-100" style="opacity: 0.9;">
                <div class="position-absolute w-100 text-center" style="bottom: 10%;">
                    <div class="text-white h5">BEST SUITES</div>
                    <div class="text-white h6">COOL VIEW</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row">
                    @foreach ($facilities['internal'] as $facility)
                        <div class="col-6 mb-3">
                            <div class="d-flex">
                                <img src="{{asset('storage/'.$facility->image)}}" alt="">
                                <div class="d-flex flex-column aligin-items-center px-4 py-3">
                                    <div>{{$facility->name}}</div>
                                    <div>{{$facility->content}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-center mb-5 mt-5">
            <div style="background-color: #627e34" class="px-3 py-2 d-inline">
                <a href="{{route('facilities')}}" class="text-white text-decoration-none">
                    CHECK ALL SERVICE
                </a>
            </div>
        </div>
    </div>
@include('frontend.layouts.footer')

<div class="page-section" id="dosen">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Dosen</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($dataDosen as $dosen)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="foto-dosen/{{ $dosen->photo }}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $dosen->nama }}</p>
                            <span class="text-sm text-grey">{{ $dosen->jurusan }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

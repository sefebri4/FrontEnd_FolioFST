@foreach($mahasiswa as $mhs)
<div class="col-lg-3 wow fadeInUp" data-wow-delay="0.0s">
    <div class="team-item">
        <div class="team-img">
            <img src="{{ asset('storage/' . $mhs->foto) }}" alt="{{ $mhs->nama }}">
        </div>
        <div class="team-text">
            <h2>{{ $mhs->nama }}</h2>
            <h4>Mahasiswa</h4>
            <p>
                Mahasiswa {{ $mhs->programStudi->nama }} <br>
                Angkatan {{ $mhs->angkatan }}
            </p>
            <div class="team-social">
                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="team-btn">
                <a class="btn" href="#">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
@endforeach

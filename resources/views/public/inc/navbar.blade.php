<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand">FolioFST</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu">
                        <a href="{{ url('/dekan') }}" class="dropdown-item">Dekan</a>
                        <a href="{{ url('/dosen') }}" class="dropdown-item">Dosen</a>
                        <a href="{{ url('/mahasiswa') }}" class="dropdown-item">Mahasiswa</a>
                    </div>
                </div>
                <a href="{{ url('/prestasi') }}" class="nav-item nav-link">Prestasi</a>
                <a href="{{ url('/galeri') }}" class="nav-item nav-link">Galeri</a>
                <a href="{{ url('/proyek') }}" class="nav-item nav-link">Proyek</a>
                <a href="{{ route('berita.index') }}" class="nav-item nav-link">Berita</a>
                <a href="{{ url('/informasi') }}" class="nav-item nav-link">Informasi</a>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->


<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="height:76px; background-color:rgba(255, 255, 255, 1); box-shadow: 1px 1px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{ asset('/assets/home/img/talenta-logo.png') }}" style="width:132px; margin-left:80px;">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="background-color:rgba(255, 255, 255, 1);">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mobile" style="font-family: 'Poppins', sans-serif; color:rgba(85, 85, 85, 1); font-size:14px; font-weight:400;">
          <li class="nav-item" style="margin-right: 32px;">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 32px;">
            <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Program</a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="{{ url('/magang-bersertifikat') }}">Magang Bersertifikat</a></li>
                <li><a class="dropdown-item" href="{{ url('/talenta-academy') }}">Talenta Academy</a></li>
            </ul>  
          </li>
          <li class="nav-item" style="margin-right: 32px;">
            <a class="nav-link" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
          </li>
          <li class="nav-item" style="margin-right: 32px;">
            <a class="nav-link" href="https://blog.talenthub.id">Blog</a>
          </li>
        </ul>
        <div class="d-flex flex-row align-item-center justify-content-start" style="width:300px; font-family: 'Poppins', sans-serif; color: rgba(85, 85, 85, 1); font-weight:400; font-size:14px;">
          <p style="height: 12px; margin-right:8px;">Daftar Sebagai :</p>
          <div class="btn-group">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; text-decoration: none;">
              Pilih
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/daftar-mahasiswa') }}">Mahasiswa</a></li>
              <li><a class="dropdown-item" href="{{ url('/daftar-dosen') }}">Dosen</a></li>
              <li><a class="dropdown-item" href="{{ url('/daftar-mitra') }}">Mitra</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</nav>

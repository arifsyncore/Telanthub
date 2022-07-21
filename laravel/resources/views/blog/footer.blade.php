<footer class="text-center" style="font-family: 'Poppins', sans-serif;">
    <hr>
    <section>
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="margin-top: 5vh;">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <img src="{{ asset('/assets/home/img/talenta-logo.png') }}" style="width:185px;">
            </a>
            <p style="color:rgba(85, 85, 85, 1); font-size:11px;">
                Syncore Talenta Indonesia merupakan platform yang menjebatani mahasiswa yang ingin mendapatkan pengalaman di dunia kerja dengan proses magang bersertifikasi dan konsultasi serta pelatihan talenta unggul  dengan sertifikasi kompentensi bersetandar nasional dan international.
            </p>
            {{-- <p style="font-weight:600; font-size:14px;">Beri saya pemberitahuan tentang artikel terbaru </p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#langganan" class="btn btn-primary" style="font-weight: 600; font-size:16px; border-radius:16px; background-color:white; color:#00B7FF; width:149px;">Subscribe</a> --}}
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="margin-top: 5vh;">
            <h5 style="font-weight: 600; font-size:16px; margin-bottom:24px;">Perusahaan</h5>
            <ul class="nav flex-column" style="font-weight: 500; font-size:12px;">
                <li class="nav-item mb-2"><a href="{{ url('/') }}" class="nav-link p-0" style="color:#333333;">Beranda</a></li>
                <li class="nav-item mb-2"><a href="{{ url('/tentang-kami') }}" class="nav-link p-0" style="color:#333333;">Tentang Kami</a></li>
                <li class="nav-item mb-2"><a href="{{ url('/blog') }}" class="nav-link p-0" style="color:#333333;">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="margin-top: 5vh;">
            <h5 style="font-weight: 600; font-size:16px; margin-bottom:24px;">Program</h5>
            <ul class="nav flex-column" style="font-weight: 500; font-size:12px;">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0" style="color:#333333;">Magang Bersertifikat</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0" style="color:#333333;">Talenta Academy</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="margin-top: 5vh;">
            <h5  style="font-weight: 600; font-size:16px; margin-bottom:24px;">Hubungi kami</h5>
            <ul class="nav flex-column" style="font-weight: 500; font-size:12px; margin-bottom:24px;">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0" style="color:#333333;"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> 0819-0390-0800 ( Arin)</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0" style="color:#333333;"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> 0819-0390-0800 (Fani)</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0" style="color:#333333;"><i class="far fa-envelope" style="margin-right: 8px;"></i> syncore.mbkm@gmail.com</a></li>
            </ul>
            <h5  style="font-weight: 600; font-size:16px; margin-bottom:8px;">Kantor</h5>
            <p style="font-weight: 400; font-size:12px;">
                Jl. Nogotirto No. 15B, Gamping, Sleman, Daerah Istimewa Yogyakarta 55282
            </p>
          </div>
        </div>
      </div>
    </section>
</footer>
<div class="modal fade" id="langganan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-family: 'Poppins', sans-serif; ">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel" style="font-weight: 600;">Berlangganan Artikel Syncore Talenta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/proses_langganan') }}" method="POST">
                @csrf
                <div class="form-group" style="margin-bottom: 24px;">
                    <label style="font-weight: 500; font-size:14px;">Nama Lengkap*</label>
                    <input type="text" style="font-weight: 400; font-size:14px;" name="nama" placeholder="Masukan nama lengkap anda" class="form-control" required />
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label style="font-weight: 500; font-size:14px;">Email*</label>
                            <input type="text" style="font-weight: 400; font-size:14px;" name="email" placeholder="Masukan email anda" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label style="font-weight: 500; font-size:14px;">Nomor Telepon*</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" style="font-weight: 500; font-size:14px;">+62</span>
                                <input type="text" style="font-weight: 400; font-size:14px;" class="form-control" name="no_telp" placeholder="Masukan nomor telepon anda" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 33px;">
                    <label style="font-weight: 500; font-size:14px;">Perusahaan (Optional)</label>
                    <input type="text" style="font-weight: 400; font-size:14px;" name="perusahaan" placeholder="Masukan nama perusahaan" class="form-control" />
                </div>
                <div class="form-check" style="margin-bottom: 47px;">
                    <input class="form-check-input" type="checkbox" name="agree" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault" style="font-weight: 400; font-size:14px;">
                        Saya mau menerima artikel dari Syncore talenta
                    </label>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="font-weight: 600; font-size:14px; background-color:#00B7FF; border-color:#00B7FF; width:116px; border-radius: 16px;">Kirim</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
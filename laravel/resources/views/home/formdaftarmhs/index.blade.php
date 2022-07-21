@extends('home.layouts')
@section('css')

@endsection
@section('content')
<div class="row">
    <div class="col-lg-6" id="sticky-sidebar" style="background: #87D6F51A;">
        <div class="sticky-top">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <a href="{{ url('/') }}"><img src="{{ asset('/assets/home/img/talenta-logo.png') }}" style="margin-top:69px; margin-left:50px; width:161px;"></a>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="500">
                                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                    <img src="{{ asset('/assets/home/img/img-1.png') }}" style="width: 371px; height:298px;">
                                    <h1 style="font-family: 'Poppins', sans-serif; weight:600; font-size:24px; margin-top:16px;">
                                        Yuk asah potensi kamu
                                    </h1>
                                    <p style="font-family: 'Poppins', sans-serif; weight:400; font-size:14px; width:367px; text-align:center;">
                                        Bersama talenta hub kembangkan potensi karirmu dengan maksimal
                                    </p> 
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="500">
                                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                    <img src="{{ asset('/assets/home/img/img-2.png') }}" style="width: 371px; height:298px;">
                                    <h1 style="font-family: 'Poppins', sans-serif; weight:600; font-size:24px; margin-top:16px;">
                                        Gali Potensi Dirimu
                                    </h1>
                                    <p style="font-family: 'Poppins', sans-serif; weight:400; font-size:14px; width:367px; text-align:center;">
                                        Mau mengembangkan diri tapi bingung mau kemana? Talenta hub siap membantumu!
                                    </p> 
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="500">
                                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                    <img src="{{ asset('/assets/home/img/img-3.png') }}" style="width: 371px; height:298px;">
                                    <h1 style="font-family: 'Poppins', sans-serif; weight:600; font-size:24px; margin-top:16px;">
                                        Talenta untuk semua
                                    </h1>
                                    <p style="font-family: 'Poppins', sans-serif; weight:400; font-size:14px; width:367px; text-align:center;">
                                        Bersama talenta hub kejar mimpimu sekarang juga!
                                    </p> 
                                </div>
                              </div>
                              <div class="carousel-item" data-bs-interval="500">
                                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                    <img src="{{ asset('/assets/home/img/img-4.png') }}" style="width: 371px; height:298px;">
                                    <h1 style="font-family: 'Poppins', sans-serif; weight:600; font-size:24px; margin-top:16px;">
                                        Siap hadapi dunia kerja
                                    </h1>
                                    <p style="font-family: 'Poppins', sans-serif; weight:400; font-size:14px; width:367px; text-align:center;">
                                        Bersama talenta hub kembangkan potensi karirmu dengan maksimal
                                    </p> 
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <div class="col-lg-6" id="main">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <a href="{{ url('/') }}" style="margin-top:69px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:14px; color:#333333; text-decoration:none">
                            <i class="fa-solid fa-arrow-left-long"></i> Kembali Ke Beranda
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:49px; margin-left:50px; font-family: 'Poppins', sans-serif; weight:700; font-weight:bold; font-size:24px; color:#333333;">
                            Daftar untuk Mahasiswa
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::has('message'))
                            <div class="alert alert-danger">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:32px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:16px; color:#333333;">
                            Informasi Diri Anda
                        </h1>
                    </div>
                </div>
            </div>
            <form action="{{ url('/proses-daftarmhs') }}" method="POST" id="form1" class="konfirmasi">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Nama Lengkap*</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan nama lengkap anda">
                                <label style="font-weight: 400; font-size:10px;">Masukkan nama lengkap sesuai dengan KTP</label>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Nomor Induk Mahasiswa (NIM)*</label>
                                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM lengkap anda">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Pendidikan Terakhir*</label>
                                <select class="form-control" name="pendidikan_terakhir">
                                    <option value="" selected>Masukan pendidikan terakhir anda</option>
                                    <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option value="D1/D2 Sederajat">D1/D2 Sederajat</option>
                                    <option value="D3 Sederajat">D3 Sederajat</option>
                                    <option value="D4/S1 Sederajat">D4/S1 Sederajat</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Tanggal Lahir*</label>
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Jenis Kelamin*</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Laki-Laki" name="jekel" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Laki-Laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Perempuan" name="jekel" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:32px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:16px; color:#333333;">
                            Layanan & Program yang dipilih
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Layanan*</label>
                                <select class="form-control" name="layanan" id="layanan">
                                    <option hidden>Pilih Layanan yang diminati</option>
                                    @foreach ($layanans as $layanan)
                                    <option value="{{ $layanan->id_layanan }}">{{$layanan->nama_layanan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Program*</label>
                                <select class="form-control" name="program" id="program">
                                    <option hidden>Pilih Program yang diminati</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:32px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:16px; color:#333333;">
                            Kontak yang bisa dihubungi
                        </h1>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Email*</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan e-mail anda">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Nomor Telepon*</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="text" class="form-control" name="no_telp" placeholder="Masukan nomor telepon anda" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:32px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:16px; color:#333333;">
                            Asal Perguruan tinggi
                        </h1>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Pilih perguruan tinggi*</label>
                                <input type="text" class="form-control" name="perguruan_tinggi" placeholder="Masukan Nama Universitas">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Fakultas*</label>  
                                <input type="text" class="form-control" name="fakultas" placeholder="Masukan Nama Fakultas" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Program Studi*</label>
                                <input type="text" class="form-control" name="prodi" placeholder="Masukan Program Studi" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Gelar*</label>
                                <input type="text" class="form-control" name="gelar" placeholder="Masukan gelar anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Tanggal mulai*</label>
                                <select class="form-control" name="mulai_bulan">
                                    <option hidden>Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 col-sm-3">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;"></label>
                                <select class="form-control" name="mulai_thn">
                                    <option hidden>Tahun</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Tanggal berakhir (atau perkiraan)*</label>
                                <select class="form-control" name="akhir_bulan">
                                    <option hidden>Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 col-sm-3">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;"></label>
                                <select class="form-control" name="akhir_thn">
                                    <option hidden>Tahun</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h1 style="margin-top:32px; margin-left:50px; font-family: 'Poppins', sans-serif; font-weight:600; font-size:16px; color:#333333;">
                            Pilih minat dan keahlihan
                        </h1>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Pilih bidang yang diminati*</label>
                                <select class="form-control bidang_diminati" name="bidang_diminati[]" id="bidang_diminati" multiple="multiple">
                                    <option value="Accounting, Audit& tax">Accounting, Audit& tax</option>
                                    <option value="Banking & Finance">Banking & Finance</option>
                                    <option value="Advertising & PR">Advertising & PR</option>
                                    <option value="Administration & Coordination">Administration & Coordination</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Architecture & Engineering">Architecture & Engineering</option>
                                    <option value="Arts & Sports">Arts & Sports</option>
                                    <option value="Data & Analytics">Data & Analytics</option>
                                    <option value="E-Commerce">E-Commerce</option>
                                    <option value="Education & Training">Education & Training</option>
                                    <option value="Fast Moving Consumer Good">Fast Moving Consumer Good</option>
                                    <option value="Financial Technology">Financial Technology</option>
                                    <option value="Food & Beverage">Food & Beverage</option>
                                    <option value="General Services">General Services</option>
                                    <option value="Health, Medical & Wellness">Health, Medical & Wellness</option>
                                    <option value="Health Technology">Health Technology</option>
                                    <option value="Hospitality & Tourism">Hospitality & Tourism</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="IT Consulting">IT Consulting</option>
                                    <option value="IT software">IT software</option>
                                    <option value="IT hardware">IT hardware</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Logistic & Supply Chain">Logistic & Supply Chain</option>
                                    <option value="Management & Consultancy">Management & Consultancy</option>
                                    <option value="Manufacturing & Production">Manufacturing & Production</option>
                                    <option value="Media & Creatives">Media & Creatives</option>
                                    <option value="Oil & Energy">Oil & Energy</option>
                                    <option value="Public Service, NGOs & NPOs">Public Service, NGOs & NPOs</option>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="Sciences">Sciences</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Pilih keahlihan yang dimiliki*</label>
                                <select class="form-control keahlian" name="keahlian[]" id="keahlian" multiple="multiple">
                                    <option value="Penulisan">Penulisan</option>
                                    <option value="Pemasaran Media Sosial">Pemasaran Media Sosial</option>
                                    <option value="Copywriting">Copywriting</option>
                                    <option value="Pemasaran">Pemasaran</option>
                                    <option value="Search engine Optimization (SEO)">Search engine Optimization (SEO)</option>
                                    <option value="Legal Research">Legal Research</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="management">management</option>
                                    <option value="Enterprise Resource Planning (ERP)">Enterprise Resource Planning (ERP)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:20px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Darimana kamu mengetahui informasi ini ?*</label>
                                <select class="form-control informasi" name="informasi[]" id="informasi" multiple="multiple">
                                    <option value="Facebook">Facebook</option>
                                    <option value="Linkendin">Linkendin</option>
                                    <option value="google search">google search</option>
                                    <option value="Word of Mouth">Word of Mouth</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="instagram">instagram</option>
                                    <option value="Talanta Hub Community">Talanta Hub Community</option>
                                    <option value="Lain-Lain">Lain</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <button class="btn btn-primary" id="btn-submit" type="submit" style="margin-top:20px; margin-left:50px; font-family: 'Poppins', sans-serif; color:white; font-weight:700; width:454px; height:53px; font-size:14px; border-radius:16px; background-color:#00B7FF; border-color:#00B7FF;">
                                Daftar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>  
            </form>        
        </div>
</div>

@endsection 
@section('js')
    <script>
        $(document).ready(function() {
            $('.bidang_diminati').select2({
                placeholder: "Pilih bidang yang anda minati",
                tags: true,
            });
        });
        $(document).ready(function() {
            $('.keahlian').select2({
                placeholder: "Pilih keahlihan yang anda miliki",
                tags: true,
            });
        });
        $(document).ready(function() {
            $('.informasi').select2({
                placeholder: "Pilih informasi",
                tags: true,
            });
        });
        $(document).ready(function() {
            $('.gelar').select2({
                placeholder: "Pilih Gelar",
                tags: true,
            });
        });
    </script>
<script>
    $(document).ready(function() {
    $('#layanan').on('change', function() {
       var layananID = $(this).val();
       if(layananID) {
           $.ajax({
               url: "/getCourse/"+layananID,
               type: "GET",
               dataType: 'JSON',
               success:function(data)
               {
                 if(data){
                    $('#program').empty();
                    $('#program').append('<option hidden>Pilih Program yang diminati</option>'); 
                    $.each(data,function(nama,kode){
                        $("#program").append('<option value="'+kode+'">'+nama+'</option>');
                    });
                }else{
                    $('#course').empty();
                }
             }
           });
       }else{
        $('#course').append('<option hidden>Choose Course</option>'); 
       }
    });
});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- <script>
    $('.konfirmasi').on('submit', function (event) {
    event.preventDefault();
    var form = $(this).parents('form');
    swal({
        title: 'Daftar Program',
        text: 'Apakah data yang anda masukan sudah benar',
        buttons: ["Ubah", "Benar"],
    });
    .then(function(value) {
        if (value) {
            window.location.href = form;
        }
    });
    });
    
</script> --}}
<script>
    $(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
        title: 'Daftar Program',
        text: 'Apakah data yang anda masukan sudah benar',
        buttons: ["Ubah", "Benar"],
    }).then(function (result) {
        if (result) {
            $('.konfirmasi').submit();
        }
    });
});
</script>
@endsection

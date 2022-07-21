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
                            Daftar untuk Mitra
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
            <form id="form1" action="{{ url('/proses-daftarmitra') }}" method="POST">
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
                            Informasi perusahaan
                        </h1>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Nama perusahaan*</label>
                                <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukan nama perusahaan">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Industri*</label>
                                <input type="text" class="form-control" name="industri" placeholder="Bidang industri yang dijalani">
                            </div>
                        </div>
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Divisi*</label>
                                <input type="text" class="form-control" name="devisi" placeholder="Masukan divisi">
                            </div>
                        </div> 
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Posisi*</label>
                                <input type="text" class="form-control" name="posisi" placeholder="Masukan posisi">
                            </div>
                        </div> 
                        <div class="col-8 col-sm-8">
                            <div class="form-group" style="margin-top:16px; margin-left:50px; font-family: 'Poppins', sans-serif; color:#333333;">
                                <label style="font-weight: 500;">Alamat perusahaan*</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Perusahaan"></textarea>
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
                            <button class="btn btn-primary" type="submit" style="margin-top:20px; margin-left:50px; font-family: 'Poppins', sans-serif; color:white; font-weight:700; width:454px; height:53px; font-size:14px; border-radius:16px; background-color:#00B7FF; border-color:#00B7FF;">
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
                        $("#program").append('<option value="'+nama+'">'+nama+'</option>');
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
@endsection

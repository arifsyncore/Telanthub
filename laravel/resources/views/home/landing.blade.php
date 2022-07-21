@extends('home.layouts')
@section('css')

@endsection
@section('content')
<div class="container-fluid" style="background-color: rgba(135, 214, 245, 0.1); height:718px;">
    <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center p-2 bd-highlight" style="height: 718px;">
            <h1 style="font-family: 'Poppins', sans-serif; font-size:24px; font-weight:600;">Terimakasih!</h1>
            <img src="{{ asset('/assets/home/img/landing.png') }}" style="width: 174px; height:148px; object-fit: cover;">
            <p style="font-family: 'Poppins', sans-serif; font-size:17px; font-weight:400; width:394px; text-align:center;">
                Data anda telah berhasil terkirim Cek email kamu untuk informasi selanjutnya
            </p>
            <p style="font-family: 'Poppins', sans-serif; font-size:17px; font-weight:400;">Kembali ke <a href="{{ url('/') }}" style="font-weight: 700">beranda</a></p>
        </div>
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
                tags: false,
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
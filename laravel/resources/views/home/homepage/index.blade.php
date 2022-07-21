@extends('home.layouts')
@section('css')
<style>
    .mobile {
        margin-left: 221px;
    }
    .aktif {
        font-weight: 600;
    }
    .tinggi-banner {
        height: 607px;
    }
    .banner-text {
        font-size:42px;
    }
    .banner-text2 {
        font-size:24px;
    }
    .tombol-play {
        width: 100px;
    }
    .video-banner {
        width: 800px;
        height: 415px;
    }
    .act-btn{
        background:rgba(13, 174, 24, 1);
        display: block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: white;
        font-size: 30px;
        font-weight: bold;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        text-decoration: none;
        transition: ease all 0.3s;
        position: fixed;
        right: 30px;
        bottom:30px;
    }
    .act-btn:hover{
        color: white;
    }
    .pop-up{
        background-image: url(public/assets/home/img/pop-up.png); 
        height:350px; 
        background-position:center; 
        background-size:cover;
    }
    .judul-section{
        font-size: 48px;
        font-weight: 600;
        margin-top: 72px;
        color: rgba(29, 29, 67, 1);
    }
    .section-card1{
        margin-top: 88px;
    }
    .section-img1{
        height: 100px;
    }
    .section-card2{
        margin-top: 32px;
        margin-bottom: 181px;
    }
    .section-img2{
        height: 100px;
        margin-right: 23px;
    }
    .section-card2-desktop{
        display: block;
    }
    .section-card2-mobile{
        display: none;
    }
    .card-home-judul{
        font-size: 32px;
        font-weight: 600;
        color: #00B7FF;
        margin-top: 300px;
    }
    .card-home-isi{
        font-size: 16px;
        font-weight: 400;
        color: #555555;
        margin-left: 32px;
        margin-right: 32px;
    }
    .card-home-btn{
        background-color: #00B7FF;
        width: 192px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 16px;
    }
    .judul-section3{
        font-weight: 600;
        font-size: 48px;
        width: 561px;
        margin-top: 72px;
    }
    .judul-section4{
        font-weight: 700;
        font-size: 40px;
        color: white;
    }
    .isi-section4{
        font-weight: 400;
        font-size: 24px;
        color: white;
    }
    .button-section4{
        font-weight: 600;
        font-size: 24px;
        background: #FF8F24;;
        border-radius: 8px;
        color: white;
    }
    .img-section4{
        height: 489px;
        width: 574px;
    }
    .section5{
        height: 650px;
    }
    .section52{
        height: 650px;
    }
    .img-section5{
        width: 606px;
        height: 516px;
    }
    .img-section52{
        width: 406px;
        height: 316px;
    }
    .judul-section5{
        font-weight: 600;
        font-size: 48px;
        margin-top: 89px;
    }
    .judul-section6a{
        font-weight: 600;
        font-size: 48px;
        color:rgba(29, 29, 67, 1);
        margin-bottom: 48px;
        margin-top: 46px;
    }
    .title-section6{
        font-weight: 600;
        font-size: 24px;
        width: 301px;
    }
    .isi-section6{
        font-weight: 400;
        font-size: 16px;
        color: rgba(85, 85, 85, 1);
        width: 449px;
        margin-bottom: 69px;
        margin-top: 16px;
    }
    .icon-section6{
        width: 56px;
        height: 56px;
    }
    .img-section6{
        width: 471px;
        margin-bottom: 48px;
        margin-top: -50px;
    }
    .judul-section7{
        font-weight: 600;
        font-size: 40px;
        color: rgba(29, 29, 67, 1);
        margin-top: 93px;
        margin-bottom: 93px;
    }
    .img-section7{
        width: 337px;
        height: 356px;
    }
    .title-section7{
        font-weight: 600;
        font-size: 32px;
    }
    .isi-section7{
        font-weight: 400;
        font-size: 16px;
        width: 459px;
        color: #555555;
    }
    .hr7{
        width: 108px;
        height: 8px;
        margin-top: 4px;
        margin-bottom: 16px;
    }
    .margin-img-section71{
        margin-left: 100px;
    }
    .margin-isi-section71{
        margin-right: 100px;
    }
    .margin-img-section72{
        margin-right: 100px;
    }
    .margin-isi-section72{
        margin-left: 280px;
    }
    @media screen and (max-width: 1120px) {
        .mobile {
            margin-left: 0px;
        }
        .tinggi-banner {
            height: 607px;
        }
        .video-banner {
            width: 800px;
            height: 615px;
        }
        .img-section5{
            width: 456px;
            height: 366px;
        }
        .img-section52{
            width: 306px;
            height: 216px;
        }
        .margin-isi-section72{
            margin-left: 150px;
        }
        .img-section7{
            width: 307px;
            height: 326px;
        }
        .title-section7{
            font-size: 30px;
        }
        .isi-section7{
            font-size: 14px;
            width: 409px;
        }
    }
    @media screen and (max-width: 980px) {
        .tinggi-banner {
            height: 407px;
        }
        .banner-text {
            font-size:25px;
        }
        .banner-text2 {
            font-size:14px;
        }
        .tombol-play {
            width: 60px;
        }
        .video-banner {
            width: 500px;
            height: 415px;
        }
        .section-card2{
            margin-top: 32px;
            margin-bottom: 0px;
        }
        .section-img2{
            height: 100px;
            margin-right: 20px;
        }
        .section-card2-desktop{
            display: none;
        }
        .section-card2-mobile{
            display: block;
            margin-bottom: 181px;
        }
        .img-section5{
            width: 386px;
            height: 296px;
        }
        .img-section52{
            width: 256px;
            height: 166px;
        }
        .title-section6{
            font-size: 20px;
            width: 281px;
        }
        .isi-section6{
            font-size: 14px;
            width: 289px;
            margin-bottom: 69px;
            margin-top: 16px;
        }
        .icon-section6{
            width: 46px;
            height: 46px;
        }
        .img-section6{
            width: 421px;
            margin-bottom: 48px;
            margin-top: -50px;
        }
        .margin-isi-section72{
            margin-left: 100px;
        }
        .img-section7{
            width: 307px;
            height: 326px;
        }
        .title-section7{
            font-size: 30px;
        }
        .isi-section7{
            font-size: 14px;
            width: 409px;
        }
    }
    @media screen and (max-width: 620px) {
        .tinggi-banner {
            height: 307px;
        }
        .banner-text {
            font-size:25px;
        }
        .banner-text2 {
            font-size:14px;
        }
        .tombol-play {
            width: 60px;
        }
        .video-banner {
            width: 500px;
            height: 415px;
        }
        .judul-section{
            font-size: 38px;
            font-weight: 600;
            margin-top: 72px;
        }
        .section-card1{
            margin-top: 80px;
        }
        .section-img1{
            height: 80px;
        }
        .section-card2{
            margin-top: 32px;
        }
        .section-img2{
            height: 80px;
        }
        .judul-section4{
            font-size: 20px;
        }
        .isi-section4{
            font-size: 14px;
        }
        .button-section4{
            font-size: 14px;
        }
        .img-section4{
            height: 289px;
            width: 374px;
            margin-top: 80px;
        }
        .section5{
            height: 350px;
        }
        .section52{
            height: 350px;
        }
        .judul-section6a{
            font-size: 40px;
        }
        .title-section6{
            font-size: 16px;
            width: 231px;
        }
        .isi-section6{
            font-size: 12px;
            width: 239px;
            margin-bottom: 69px;
            margin-top: 16px;
        }
        .icon-section6{
            width: 36px;
            height: 36px;
        }
        .img-section6{
            width: 301px;
            margin-bottom: 48px;
            margin-top: -50px;
        }
        .margin-img-section71{
            margin-left: 50px;
        }
        .margin-isi-section71{
            margin-left: 50px;
        }
        .margin-isi-section72{
            margin-left: 50px;
        }
        .img-section7{
            width: 207px;
            height: 226px;
        }
        .title-section7{
            font-size: 20px;
        }
        .isi-section7{
            font-size: 12px;
            width: 159px;
        }
    }
    @media screen and (max-width: 500px) {
        .video-banner {
            width: 484px;
            height: 315px;
        }
    }
    @media screen and (max-width: 412px) {
        .tinggi-banner {
            height: 307px;
        }
        .banner-text {
            font-size:18px;
        }
        .banner-text2 {
            font-size:10px;
        }
        .tombol-play {
            width: 60px;
        }
        .video-banner {
            width: 396px;
            height: 225px;
        }
        .judul-section{
            font-size: 32px;
            font-weight: 600;
            margin-top: 72px;
        }
        .section-card1{
            margin-top: 75px;
        }
        .section-img1{
            height: 55px;
        }
        .img-section4{
            height: 189px;
            width: 274px;
            margin-top: 130px;
        }
        .judul-section6a{
            font-size: 35px;
        }
        .margin-img-section71{
            margin-left: 50px;
        }
        .margin-img-section72{
            margin-left: 60px;
        }
        .margin-isi-section71{
            margin-left: 20px;
        }
        .margin-isi-section72{
            margin-left: 50px;
        }
        .img-section7{
            width: 157px;
            height: 176px;
        }
        .title-section7{
            font-size: 20px;
        }
        .isi-section7{
            font-size: 12px;
            width: 159px;
        }
    }
    
</style>
@endsection
@section('content')
@include('sweetalert::alert')
@include('home.homepage.upper')
@include('home.homepage.nav')
@include('home.homepage.banner')
@include('home.homepage.section')
@include('home.homepage.section6')
@include('home.homepage.section3')
@include('home.homepage.section7')
@include('home.homepage.section5')
@include('home.homepage.section4')
@include('home.homepage.footer')
<a href="https://wa.me/6281996900800" target="_BLANK" class="act-btn">
    <i class="fab fa-whatsapp"></i>
</a>
<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content" style="background-color:rgba(0, 183, 255, 1);">
            <div class="modal-header" style="background-color:rgba(0, 183, 255, 1);">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <a href="{{ url('/magang-bersertifikat') }}">
            <div class="modal-body pop-up" style="background-color:rgba(0, 183, 255, 1);">
                
            </div>
            </a>
        </div>
    </div>
</div>
@endsection 
@section('js')
<script>
    function upper() {
        var x = document.getElementById("upper");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>

@endsection
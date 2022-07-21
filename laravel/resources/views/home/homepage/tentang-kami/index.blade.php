@extends('home.layouts')
@section('css')
<style>
    .banner-about{
        background-size:cover; 
        background-position:center;
        height: 477px;
    }
    .title-banner{
        font-weight: 700;
        font-size: 32px;
        color: #00B7FF;
    }
    .isi-banner{
        font-weight: 400;
        font-size: 32px;   
        width: 727px; 
    }
    .section{
        height: 477px;
    }
    .section-title{
        font-weight: 700;
        font-size: 24px;
    }
    .section-isi{
        font-weight: 400;
        font-size: 14px;
        color: #555555;
        margin-top:16px;
    }
    .img-section{
        height: 312px;
        width: 312px;
        object-fit: cover;
    }
    .section2{
        height: 1080px;
    }
    .title-section2{
        font-weight: 700;
        font-size: 40px;
    }
    .title-card-section2{
        font-weight: 700;
        font-size: 24px;
    }
    .isi-card-section2{
        font-weight: 400;
        font-size: 16px;
        width: 388px;
        color: #555555;
    }
    .footer-section2{
        background-color: #00B7FF;
        border-radius: 50px 50px 0px 0px;
        margin-top: 100px;
    }
    .footer-section2-left{
        height: 367px;
    }
    .title-footer-section2{
        font-weight: 700;
        font-size: 32px;
        margin-left: 133px;
        color: white;
    }
    .isi-footer-section2{
        font-weight: 400;
        font-size: 18px;
        margin-left: 133px;
        width: 435px;
        color: white;
    }
    .button-footer-section2{
        margin-left: 133px;
        width: 150px;
        background-color: #FF8F24;
        border-radius: 16px;
        font-weight: 600;
        font-size: 16px;
        color: white;
    }
    .img-section2{
        width: 472px;
        height: 341px;
    }
    @media screen and (max-width: 960px) {
        .title-banner{
            font-size: 28px;
        }
        .isi-banner{
            font-size: 28px;   
            width: 690px; 
        }
        .section2{
            height: 1220px;
        }
        .isi-card-section2{
            font-size: 16px;
            width: 308px;
        }
        .img-section2{
            width: 402px;
            height: 271px;
        }
        .title-footer-section2{
            font-size: 32px;
            margin-left: 93px;
        }
        .isi-footer-section2{
            font-size: 18px;
            margin-left: 93px;
            width: 355px;
        }
        .button-footer-section2{
            margin-left: 93px;
            width: 150px;
            font-size: 16px;
        }
    }
    @media screen and (max-width: 768px) {
        .section2{
            height: 1480px;
        }
    }
    @media screen and (max-width: 720px) {
        .title-banner{
            font-size: 26px;
        }
        .isi-banner{
            font-size: 26px;   
            width: 650px; 
        }
        .img-section{
            height: 222px;
            width: 222px;
            object-fit: cover;
        }
        .section-title{
            font-size: 20px;
        }
        .section-isi{
            font-size: 12px;
        }
        .section{
            height: 357px;
        }
        .img-section2{
            width: 352px;
            height: 221px;
        }
        .title-footer-section2{
            font-size: 28px;
            margin-left: 73px;
        }
        .isi-footer-section2{
            font-size: 14px;
            margin-left: 73px;
            width: 205px;
        }
        .button-footer-section2{
            margin-left: 73px;
            width: 150px;
            font-size: 14px;
        }
    }
    @media screen and (max-width: 540px) {
        .banner-about{
            background-size:cover; 
            background-position:center;
            height: 377px;
        }
        .title-banner{
            font-size: 22px;
        }
        .isi-banner{
            font-size: 22px;   
            width: 480px; 
        }
        .img-section{
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
        .section-title{
            font-size: 18px;
        }
        .section-isi{
            font-size: 10px;
        }
        .section{
            height: 307px;
        }
        .img-section2{
            width: 302px;
            height: 171px;
        }
        .title-footer-section2{
            font-size: 20px;
            margin-left: 53px;
        }
        .isi-footer-section2{
            font-size: 10px;
            margin-left: 53px;
            width: 205px;
        }
        .button-footer-section2{
            margin-left: 53px;
            width: 150px;
            font-size: 10px;
        }
    }
    @media screen and (max-width: 360px) {
        .banner-about{
            background-size:cover; 
            background-position:center;
            height: 277px;
        }
        .title-banner{
            font-size: 18px;
        }
        .isi-banner{
            font-size: 18px;   
            width: 250px; 
        }
        .img-section{
            height: 100px;
            width: 100px;
            object-fit: cover;
        }
        .section-title{
            font-size: 16px;
        }
        .section-isi{
            font-size: 8px;
        }
        .section{
            height: 287px;
        }
        .img-section2{
            width: 152px;
            height: 121px;
        }
        .title-footer-section2{
            font-size: 20px;
            margin-left: 13px;
        }
        .isi-footer-section2{
            font-size: 10px;
            margin-left: 13px;
            width: 205px;
        }
        .button-footer-section2{
            margin-left: 13px;
            width: 150px;
            font-size: 10px;
        }
    }
</style>
@endsection
@section('content')
@include('sweetalert::alert')
@include('home.homepage.nav')
@include('home.homepage.tentang-kami.banner')
@include('home.homepage.tentang-kami.section')
@include('home.homepage.tentang-kami.section2')
@include('home.homepage.footer')
@endsection 
@section('js')

@endsection
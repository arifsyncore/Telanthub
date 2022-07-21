@extends('home.layouts')
@section('css')
<style>
.mobile {
     margin-left: 221px;
}
.aktif {
    font-weight: 600;
}
.konten{
    height: 607px;
}
.image-banner{
    width: 575px; 
    height: 499px;
    object-fit: cover;
}
.judul-banner{
    font-size:40px;
}
.isi-banner{
    font-size:16px;
}
.tombol-banner{
    font-size:24px; 
    font-weight: 600; 
    width:269px;
}
.image-section{
    width: 490px; 
    height: 490px;
}
.judul-section{
    font-size:48px;
}
.isi-section{
    font-size:16px;
}
.judul-section2{
    font-size:40px;
}
.icon{
    width: 60px;
}
.icon-judul{
    font-size:24px;
    font-weight:600;
}
.icon-isi{
    font-size:16px;
    font-weight:400;
}
.card-magang{
    width: 574px;
    height: 277px;
    border-radius: 10px;
}
.icon-magang{
    margin-top:32px;
    height: 80px;
}
.icon-magang-judul{
    font-size:24px;
    font-weight:600;
    text-align: left;
    margin-top:32px;
}
.icon-magang-isi{
    font-size:14px;
    font-weight:400;
    color: #555555;
    text-align: justify;
    width: 433px;
}
@media screen and (max-width: 1320px) {
    .card-magang{
        width: 504px;
        height: 277px;
    }
    .icon-magang-isi{
        font-size:14px;
        width: 390px;
    }
}
@media screen and (max-width: 1140px) {
    .mobile{
        margin-left: 0px;
    }
    .image-banner{
        width: 475px; 
        height: 399px;
    }
    .image-section{
        width: 390px; 
        height: 390px;
    }
    .card-magang{
        width: 450px;
        height: 277px;
        border-radius: 10px;
    }
    .icon-magang-judul{
        font-size:20px;
        font-weight:600;
        text-align: left;
        margin-top:32px;
    }
    .icon-magang-isi{
        font-size:13px;
        font-weight:400;
        color: #555555;
        text-align: justify;
        width: 350px;
    }
    .icon{
        width: 50px;
    }
    .icon-judul{
        font-size:20px;
        font-weight:600;
    }
    .icon-isi{
        font-size:13px;
        font-weight:400;
    }
}
@media screen and (max-width: 980px) {
    .mobile{
        margin-left: 0px;
    }
    .image-banner{
        width: 375px; 
        height: 299px;
    }
    .image-section{
        width: 290px; 
        height: 290px;
    }
    .judul-banner{
        font-size:30px;
    }
    .isi-banner{
        font-size:13px;
    }
    .tombol-banner{
        font-size:18px; 
        font-weight: 600; 
        width:200px;
    }
    .judul-section{
        font-size:30px;
    }
    .isi-section{
        font-size:13px;
    }
    .konten{
        height: 350px;
    }
    .icon{
        width: 40px;
    }
    .icon-judul{
        font-size:20px;
        font-weight:600;
    }
    .icon-isi{
        font-size:12px;
        font-weight:400;
    }
    .card-magang{
        width: 350px;
        height: 277px;
        border-radius: 10px;
    }
    .icon-magang{
        margin-top:32px;
        height: 60px;
    }
    .icon-magang-judul{
        font-size:18px;
        font-weight:600;
        text-align: left;
        margin-top:32px;
    }
    .icon-magang-isi{
        font-size:11px;
        font-weight:400;
        color: #555555;
        text-align: justify;
        width: 260px;
    }
}
@media screen and (max-width: 720px) {
    .card-magang{
        width: 554px;
        height: 277px;
    }
    .icon-magang-isi{
        font-size:14px;
        width: 420px;
    }
}
@media screen and (max-width: 620px) {
    .mobile{
        margin-left: 0px;
    }
    .image-banner{
        width: 250px; 
        height: 205px;
    }
    .image-section{
        width: 220px; 
        height: 220px;
    }
    .judul-banner{
        font-size:23px;
    }
    .isi-banner{
        font-size:12px;
    }
    .tombol-banner{
        font-size:15px; 
        font-weight: 600; 
        width:170px;
    }
    .judul-section{
        font-size:23px;
    }
    .isi-section{
        font-size:12px;
    }
    .konten{
        height: 320px;
    }
    .card-magang{
        width: 520px;
        height: 277px;
        border-radius: 10px;
        margin-top:20px;
    }
    .icon-magang{
        margin-top:32px;
        height: 60px;
    }
    .icon-magang-judul{
        font-size:18px;
        font-weight:600;
        text-align: left;
        margin-top:32px;
    }
    .icon-magang-isi{
        font-size:11px;
        font-weight:400;
        color: #555555;
        text-align: justify;
        width: 400px;
    }
}
@media screen and (max-width: 500px) {

}
@media screen and (max-width: 412px) {
    .mobile{
        margin-left: 0px;
    }
    .image-banner{
        width: 200px; 
        height: 199px;
    }
    .judul-banner{
        font-size:20px;
    }
    .isi-banner{
        font-size:10px;
    }
    .tombol-banner{
        font-size:10px; 
        font-weight: 600; 
        width:119px;
    }
    .konten{
        height: 307px;
    }
    .image-section{
        width: 190px; 
        height: 190px;
    }
    .judul-section{
        font-size:23px;
    }
    .isi-section{
        font-size:10px;
    }
    .judul-section2{
        font-size:25px;
    }
    .card-magang{
        width: 420px;
        height: 277px;
        border-radius: 10px;
        margin-top:20px;
    }
    .icon-magang{
        margin-top:32px;
        height: 60px;
    }
    .icon-magang-judul{
        font-size:18px;
        font-weight:600;
        text-align: left;
        margin-top:32px;
    }
    .icon-magang-isi{
        font-size:11px;
        font-weight:400;
        color: #555555;
        text-align: justify;
        width: 320px;
    }
}
</style>
@endsection
@section('content')
@include('home.homepage.nav')
@include('home.homepage.magang.banner')
@include('home.homepage.magang.section')
@include('home.homepage.magang.section2')
@include('home.homepage.magang.section3')
@include('home.homepage.footer')
@endsection
@section('js')
    
@endsection
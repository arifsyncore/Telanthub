@extends('blog.layouts')
@section('css')

@endsection
@section('content')
@include('blog.content.nav')
<section class="category">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-left">
          <div class="row">
            <div class="col-md-12">        
              <ol class="breadcrumb">
                <li><a href="{{ url('/blog') }}">Home</a></li>
                <li class="active">Tag</li>
              </ol>
              <h1 class="page-title">Tag: {{ $tags->name }}</h1>
            </div>
          </div>
          <div class="line"></div>
          <div class="row">
            @foreach ($posts as $post)
            <article class="col-md-12 article-list">
                <div class="inner">
                  <figure>
                      <a href="{{ url('/blog',$post->slug) }}">
                        <img src="{{ Storage::url($post->image) }}">
                    </a>
                  </figure>
                  <div class="details">
                    <div class="detail">
                      <div class="category">
                       <a href="{{ url('/blog/kategori', $post->category->slug) }}">{{ $post->category->name }}</a>
                      </div>
                      <div class="time">{{ date('M d ,Y', strtotime($post->published_at)) }}</div>
                    </div>
                    <h1><a href="{{ url('/blog',$post->slug) }}">{{ $post->title }}</a></h1>
                    <p>
                        @php
                        $konten = substr($post->body,0,200);
                        echo strip_tags($konten,'<ol><ul><li><p><strong><hr><s><tabel><tr><tbody><td><th><thead><h1><h2><h3><h4><div>');
                        @endphp
                    </p>
                    <footer>
                      <a class="btn btn-primary more" href="{{ url('/blog', $post->slug) }}">
                        <div>Selengkapnya</div>
                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                      </a>
                    </footer>
                  </div>
                </div>
            </article>
            @endforeach
            
            
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    {!! $posts->links('vendor.pagination.custom') !!}
                </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <aside>
            <h1 class="aside-title">Artikel Terbaru</h1>
            <div class="aside-body">
              @foreach ($first_post as $first)  
              <article class="article-fw">
                <div class="inner">
                  <figure>
                      <a href="{{ url('/blog', $first->slug) }}">
                        <img src="{{ Storage::url($first->image) }}">
                      </a>
                  </figure>
                  <div class="details">
                    <h1><a href="{{ url('/blog', $first->slug) }}">{{ $first->title }}</a></h1>
                    <p>
                        @php
                        $konten = substr($first->body,0,150);
                        echo strip_tags($konten,'<ol><ul><li><p><strong><hr><s><tabel><tr><tbody><td><th><thead><h1><h2><h3><h4><div>');
                        @endphp
                    </p>
                    <div class="detail">
                      <div class="time">{{ date('M d ,Y', strtotime($first->published_at)) }}</div>
                      <div class="category"><a href="{{ url('/blog/kategori', $first->category->slug) }}">{{ $first->category->name }}</a></div>
                    </div>
                  </div>
                </div>
              </article>
              @endforeach
              <div class="line"></div>
              @foreach ($recent_post as $recent)
              <article class="article-mini">
                <div class="inner">
                <figure>
                    <a href="{{ url('/blog', $recent->slug) }}">
                      <img src="{{ Storage::url($recent->image) }}">
                  </a>
                </figure>
                <div class="padding">
                  <h1><a href="{{ url('/blog', $recent->slug) }}">{{ $recent->title }}</a></h1>
                  <div class="detail">
                    <div class="category"><a href="{{ url('/blog/kategori', $recent->category->slug) }}">{{ $recent->category->name }}</a></div>
                    <div class="time">{{ date('M d ,Y', strtotime($first->published_at)) }}</div>
                  </div>
                </div>
                </div>
              </article>
              @endforeach
            </div>
          </aside>
        </div>
      </div>
    </div>
</section>
@include('blog.footer')
@endsection
@section('js')

@endsection
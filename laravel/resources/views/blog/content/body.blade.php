<section class="search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">        
              <ol class="breadcrumb">
                <li><a href="{{ url('/blog') }}">Blog</a></li>
              </ol>
            </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <div class="col-md-4">
                <aside>
                    <h2 class="aside-title">Artikel Terbaru</h2>
                    <div class="aside-body">
                        @foreach ($recent_post as $recent)
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="{{ url('/blog', $recent->slug) }}">
                                        <img src="/laravel/storage/app/{{$recent->image}}" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1>
                                        <a href="single.html">
                                            {{ $recent->title }}
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($posts as $post)
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="{{ url('/blog', $post->slug) }}">
                                    <img src="/laravel/storage/app/{{$post->image}}">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="{{ url('/blog/kategori', $post->category->slug) }}">{{ $post->category->name }}</a>
                                    </div>
                                    <time>{{ date('M d ,Y', strtotime($post->published_at)) }}</time>
                                </div>
                                <h1><a href="{{ url('/blog', $post->slug) }}">{{ $post->title }}</a></h1>
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
        </div>
    </div>
</section>
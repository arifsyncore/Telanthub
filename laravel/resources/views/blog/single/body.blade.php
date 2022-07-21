<section class="single">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sidebar" id="sidebar">
                <aside>
                    <h1 class="aside-title">Artikel Terbaru</h1>
                    <div class="aside-body">
                        @foreach ($first_post as $first)
                        <article class="article-fw">
                            <div class="inner">
                                <figure>
                                    <a href="{{ url('/blog',$first->slug) }}">												
                                        <img src="/laravel/storage/app/{{$first->image}}">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h1><a href="{{ url('/blog',$first->slug) }}">{{ $first->title }}</a></h1>
                                    <p>
                                        @php
                                            $konten = substr($first->body,0,100);
                                            echo strip_tags($konten,'<ol><ul><li><p><strong><hr><s><tabel><tr><tbody><td><th><thead><h1><h2><h3><h4><div>');
                                        @endphp
                                    </p>
                                    <div class="detail">
                                        <div class="time">{{ date('M d ,Y', strtotime($first->published_at)) }}</div>
                                        <div class="category"><a href="category.html">{{ $first->category->name }}</a></div>
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
                                    <a href="{{ url('/blog',$recent->slug) }}">
                                        <img src="/laravel/storage/app/{{$recent->image}}">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1>
                                        <a href="{{ url('/blog',$recent->slug) }}">
                                            {{ $recent->title }}
                                        </a>
                                    </h1>
                                    <div class="detail">
                                        <div class="category"><a href="#">{{ $recent->category->name }}</a></div>
                                        <div class="time">{{ date('M d ,Y', strtotime($recent->published_at)) }}</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                @foreach ($posts as $post)
                <ol class="breadcrumb">
                    <li><a href="{{ url('/blog') }}">Home</a></li>
                    <li class="active">{{ $post->category->name }}</li>
                </ol>
                <article class="article main-article">
                    <header>
                        <h1>{{ $post->title }}</h1>
                        <ul class="details">
                            <li>Di Posting Tanggal {{ date('d M ,Y', strtotime($post->published_at)) }}</li>
                            <li><a href="{{ url('/blog/kategori',$post->category->slug) }}">{{ $post->category->name }}</a></li>
                            <li>Oleh <a href="#">Admin Talenta</a></li>
                        </ul>
                    </header>
                    <div class="main">
                        <div class="featured">
                            <figure>
                                <img src="/laravel/storage/app/{{$recent->image}}">
                                <figcaption>Image by talenta.com</figcaption>
                            </figure>
                        </div>
                        @php
                            echo strip_tags($post->body,'<ol><ul><li><p><strong><hr><s><tabel><tr><tbody><td><th><thead><h1><h2><h3><h4><div>');
                        @endphp
                    </div>
                    <footer>
                        <div class="col">
                            <ul class="tags">
                                @foreach ($post->tags as $tag)
                                <li><a href="{{ url('/blog/tag',$tag->tag->slug) }}">{{ $tag->tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </footer>
                </article>
                
                <div class="sharing">
                <div class="title"><i class="ion-android-share-alt"></i> Bagikan Artikel Ini</div>
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/{{ $post->slug }}" class="facebook">
                            <i class="ion-social-facebook"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://127.0.0.1:8000/{{ $post->slug }}" class="twitter">
                            <i class="ion-social-twitter"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://127.0.0.1:8000/{{ $post->slug }}" class="linkedin">
                            <i class="ion-social-linkedin"></i> Linkedin
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/?text=http://127.0.0.1:8000/{{ $post->slug }}" class="whatsapp">
                            <i class="ion-social-whatsapp"></i> Whatsapp
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="line thin"></div>
        <div class="comments">
            <h2 class="title">{{ count($comments) }} Komen</h2>
            <div class="comment-list">
                @foreach ($comments as $comment)
                <div class="item">
                    <div class="user">                                
                        <figure>
                            <img src="{{ asset('/assets/blog/images/user.png') }}">
                        </figure>
                        <div class="details">
                            <h5 class="name">{{ $comment->name }}</h5>
                            <div class="time">{{ date('d M ,Y', strtotime($comment->created_at)) }}</div>
                            <div class="description">
                                {{ $comment->comment }}
                            </div>
                            <footer>
                                <a href="#">Reply</a>
                            </footer>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <form action="{{ url('/blog/comment',$posts2->id) }}" method="POST" class="row">
                @csrf
                <div class="col-md-12">
                    <h3 class="title">Tinggalkan Komenmu</h3>
                </div>
                <div class="form-group col-md-4">
                    <label for="name">Nama <span class="required"></span></label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Email <span class="required"></span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <label for="message">Komen <span class="required"></span></label>
                    <textarea class="form-control" name="comment" placeholder="Tulis Komenmu Disini ..." required></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Kirim Komenmu</button>
                </div>
            </form>
        </div>
        <div class="line"><div>Artikel Lainnya</div></div>
        <div class="row">
            @foreach ($other_post as $other)
            <article class="article related col-md-6 col-sm-6 col-xs-12">
                <div class="inner">
                    <figure>
                        <a href="{{ url('/blog',$other->id) }}">
                            <img src="{{ Storage::url($other->image) }}">
                        </a>
                    </figure>
                    <div class="padding">
                        <h2><a href="#">{{ $other->title }}</a></h2>
                        <div class="detail">
                            <div class="category"><a href="#">{{ $other->category->name }}</a></div>
                            <div class="time">{{ date('d M ,Y', strtotime($post->published_at)) }}</div>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
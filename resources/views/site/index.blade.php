@extends('site.layouts.master')
@section('title', 'Anasayfa')
@section('keywords', 'keyws...')
@section('description', 'desc...')

@section('content')
<main>
    <section class="main">
        <div class="container">
            <!-- POSTS -->
            <div class="posts">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="content">
                        <a href="{{route('detail', $post->PostSlug)}}">
                            <h2 class="title">{{$post->PostTitle}}</h2>
                        </a>
                        <a href="{{route('categorydetail', $post->CategorySlug)}}">
                            <h4 class="post-category">{{$post->CategoryTitle}}</h4>
                        </a>
                        <div class="infos">
                            <p class="date">{{$post->Created_Time}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- Categories & Search --}}
            <div class="right">
                <div class="search">
                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Search...">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="O">
                        </div>
                    </form>
                </div>
                <div class="home-categories">
                    <ul class="cat">
                        <h2>Categories</h2>
                        <li>
                            <h3><a href="category.html">sql server (10)</a></h3>
                        </li>
                        <li>
                            <h3><a href="category.html">php (5)</a></h3>
                        </li>
                        <li>
                            <h3><a href="category.html">java (3)</a></h3>
                        </li>
                        <li>
                            <h3><a href="category.html">asp.net mvc core (15)</a></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>    
@endsection
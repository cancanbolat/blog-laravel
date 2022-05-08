@extends('site.layouts.master')
@section('title', $post->PostTitle)
@section('keywords', $post->Keywords)
@section('description', Str::limit(strip_tags($post->Description), 150, '...'))
@section('categories')
    @include('site.widgets.category')   
@endsection

@section('content')
<main>
    <section class="detail">
        <div class="container display-flex justify-content-between">
            <div class="post-detail">
                <h2 class="title"><a href="/">Home</a> <b> / </b>{{$post->PostTitle}}</h2>
                {{-- <img src="{{asset('site/')}}/img/3.png" class="mr-10" alt="Blog Post 1"> --}}
                <div class="content">
                    <div class="post-details">{!! $post->Description !!}</div>
                    <p class="date">{{$post->Created_Time}}</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
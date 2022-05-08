@extends('admin.layouts.master')
@section('Title', 'Admin Anasayfa')

@section('css')
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/media.css">
    <!-- Reset & Defaults CSS -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/style.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/index.css">
@endsection

@section('content')

    <div class="main-content">
        @include('admin.widgets.search')
        <main>
            <h2 class="dash-title">Home</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Post</h5>
                            <h4>{{$counts[0]->PostCount}}</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/posts">View All</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Categories</h5>
                            <h4>{{$counts[0]->CategoryCount}}</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View All</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Social Media</h5>
                            <h4>{{$counts[0]->SocialCount}}</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View All</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Images</h5>
                            <h4>{{$counts[0]->ImageCount}}</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View All</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    @section('js')
    <script src="{{asset('admin/')}}/js/main.js"></script>
    @endsection
  
@endsection
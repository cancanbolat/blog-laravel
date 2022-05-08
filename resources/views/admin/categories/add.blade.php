@extends('admin.layouts.master')
@section('Title', 'Add Post')

@section('css')
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/css/media.css">
    <!-- Reset & Defaults CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/css/style.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/css/index.css">
@endsection

@section('content')

    <div class="main-content">
        @include('admin.widgets.search')
        <main>
            <h2 class="dash-title">Add Post</h2>
            <hr>
            <h5><a class="bt btn-success" href="/category">&lt; All Categories</a></h5>
            <div class="add-form">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Category title" required="Category title required" name="Title">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    @section('js')
        <!-- Main JS -->
        <script src="{{ asset('admin/') }}/js/main.js"></script>
    @endsection

@endsection

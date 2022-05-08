@extends('admin.layouts.master')
@section('Title', 'Add Post')

@section('css')
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
            <h5><a class="bt btn-success" href="/posts">&lt; All Posts</a></h5>
            <div class="add-form">
                <form action="{{route('posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Post title" required="Post title required" name="Title">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Keywords (Optional)" name="Keywords">
                    </div>
                    <div class="form-group">
                        <select name="CategoryID" id="">
                            <option selected disabled>Select Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="summernote" placeholder="Post description" required="Post description required"
                            name="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

@section('js')
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#summernote').summernote({
            height: 200,
            minHeight: null,
            maxHeight: null,
            focus: true,
            lang: 'tr-TR',
            airmode: true
        });

    </script>
    <!-- Main JS -->
    <script src="{{ asset('admin/') }}/js/main.js"></script>
@endsection

@endsection

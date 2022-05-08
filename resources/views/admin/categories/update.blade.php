@extends('admin.layouts.master')
@section('Title', 'Update Post')

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
            <h2 class="dash-title">Update <small>{{$post->Title}}</small></h2>
            <hr>
            <h5><a class="bt btn-success" href="{{route('posts.index')}}">&lt; All Posts</a></h5>
            <div class="add-form">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Post title" required="Post title required" name="Title" value="{{$post->Title}}">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Keywords" name="Keywords" value="{{$post->Keywords}}">
                    </div>
                    <div class="form-group">
                        <select name="CategoryID">
                            <option disabled>Select Category</option>
                            @foreach ($categories as $cat)
                                @if ($cat->Id == $post->CategoryID)
                                <option value="{{$cat->Id}}" selected>{{$cat->Title}}</option>
                                @else
                                <option value="{{$cat->Id}}">{{$cat->Title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="summernote" placeholder="Post description" required="Post description required"
                            name="Description">{{$post->Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <form action="{{route('posts.update', $post->Id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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

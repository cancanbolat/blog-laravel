@extends('admin.layouts.master')
@section('Title', 'Posts')

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
            <h2 class="dash-title">Posts</h2>
            <hr>
            <h3><a class="bt btn-success" href="{{route('posts.create')}}">&plus; Add Post</a></h3>
            <div class="posts-table">
                <table>
                    <caption>Posts</caption>
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @php
                            $k = 1;
                        @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $k++ }}</td>
                                <td>{{ $post->PostTitle }}</td>
                                <td>{{ $post->CategoryTitle }}</td>
                                <td>{{ $post->Created_Time }}</td>
                                <td><a class="btn btn-warning" href="#">View</a></td>
                                <td>
                                    <a href="{{route('posts.show', $post->Id)}}" class="btn btn-primary">Update</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('posts.destroy', $post->Id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>


@section('js')
    <script src="{{ asset('admin/') }}/js/main.js"></script>
@endsection

@endsection

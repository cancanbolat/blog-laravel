@extends('admin.layouts.master')
@section('Title', 'Categories')

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
            <h2 class="dash-title">Categories</h2>
            <hr>
            <h3><a class="bt btn-success" href="{{route('category.create')}}">&plus; Add Category</a></h3>
            <div class="posts-table">
                <table>
                    <caption>Categories</caption>
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @php
                            $k = 1;
                        @endphp
                        @foreach ($categories as $cat)
                            <tr>
                                <td>{{ $k++ }}</td>
                                <td>{{ $cat->Title }}</td>
                                <td>
                                    <a href="{{route('category.show', $cat->Id)}}" class="btn btn-primary">Update</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('category.destroy', $cat->Id) }}">
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

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('css')
    <title>@yield('Title')</title>
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>Admin</span>
            </h3>
            <span class="ti-menu-alt"></span>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('homepage') }}">
                        </span>Home</span>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('posts.index') }}">
                        <span>Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}">
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Info</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

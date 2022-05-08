<li class="nav-item categories">
    <a href="#">Categories</a>
    <ul class="dropdown">
        @foreach ($categories as $cat)
        <li><a href="{{route('categorydetail', $cat->Slug)}}">{{$cat->Title}}</a></li>
        @endforeach
    </ul>
</li>
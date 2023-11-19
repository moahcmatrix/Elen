<nav id="colorlib-main-menu" role="navigation">
    <ul>
        <li class="colorlib-active"><a href="/">Home</a></li>
        @foreach ($categories as $category)
            <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

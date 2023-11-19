<ul class="categories">
    @foreach ($categories as $category)
        <li>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}
                <span>{{ $category->posts->count() }}</span></a>
        </li>
    @endforeach
</ul>

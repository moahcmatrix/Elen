@props(['post'])

<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(/images/image_1.jpg)"></a>
    <div class="text">
        <h3 class="heading">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h3>
        <div class="meta">
            <div>
                {{-- Todo --}}
                <a href="#"><span class="icon-calendar"></span> {{ $post->created_at->diffForHumans() }}</a>
            </div>
            <div>
                <a href="/authors/{{ $post->author->name }}"><span class="icon-person"></span>
                    {{ $post->author->name }}</a>
            </div>
            <div>
                {{-- Todo --}}
                <a href="#"><span class="icon-chat"></span> 19</a>
            </div>
        </div>
    </div>
</div>

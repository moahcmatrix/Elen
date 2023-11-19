@props(['post'])

<div class="col-md-4">
    <div class="blog-entry ftco-animate">
        <a href="#" class="img img-2" style="background-image: url({{ $post->image }});"></a>
        <div class="text text-2 pt-2 mt-3">
            <span class="category mb-3 d-block"><a
                    href="/cateogries/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
            <h3 class="mb-4"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h3>
            <p class="mb-4">{{ $post->excerpt }}</p>
            <div class="author mb-4 d-flex align-items-center">
                @if ($post->author->image)
                    <a href="#" class="img" style="background-image: url({{ $post->image }});"></a>
                @else
                    <a href="#" class="img" style="background-image: url(images/person_2.jpg);"></a>
                @endif
                <div class="ml-3 info">
                    <span>Written by</span>
                    <h3><a href="#">{{ $post->author->name }}</a>,
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </h3>
                </div>
            </div>
            <div class="meta-wrap align-items-center">
                <div class="half order-md-last">
                    <p class="meta">
                        {{-- Todo --}}
                        <span><i class="icon-heart"></i>3</span>
                        <span><i class="icon-eye"></i>100</span>
                        <span><i class="icon-comment"></i>5</span>
                    </p>
                </div>
                <div class="half">
                    <p><a href="/posts/{{ $post->slug }}" class="btn py-2">Continue Reading <span
                                class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

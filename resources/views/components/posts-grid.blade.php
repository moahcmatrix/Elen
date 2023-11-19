@props(['posts'])

@if ($posts->count() > 0)
    <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Articles</h2>
            {{-- Todo --}}
            <p>A small river named Duden flows by their place and supplies it with the necessary
                regelialia. It is a paradisematic country.</p>
        </div>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <x-post :post="$post"></x-post>
        @endforeach
    </div>
@else
    <p class="text-center">no posts published yet</p>
@endif

@props(['name', 'description'])

<div {{ $attributes(['class' => 'hero-wrap js-fullheight']) }}>
    <div class="overlay"></div>
    <div class="js-fullheight d-flex justify-content-center align-items-center">
        <div class="col-md-8 text text-center">
            <div class="img mb-4" style="background-image: url(/images/author.jpg);"></div>
            <div class="desc">
                <h2 class="subheading">Hello I'm</h2>
                <h1 class="mb-4">{{ $name }}</h1>
                <p class="mb-4">
                    {{ $description }}
                    {{-- Todo --}}
                <p><a href="#" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a>
                </p>
            </div>
        </div>
    </div>
</div>

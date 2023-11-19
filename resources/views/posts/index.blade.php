<x-layout>
    <x-profile name="Moustafa Ahmed" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <x-slot name="description">
            I am A Blogger Far far away, behind the word mountains, far from the
            countries Vokalia and Consonantia, there live the blind texts. Separated they live in
            Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </x-slot>
    </x-profile>
    <section class="ftco-section">
        <div class="container">
            <x-posts-grid :posts="$posts" />
        </div>
    </section>
</x-layout>

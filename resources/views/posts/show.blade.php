<x-layout>
    <div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-8 text text-center">
                <div class="desc">
                    <h1 class="mb-4">{{ ucwords($post->title) }} Details</h1>
                    <p>
                        <a href="/" class="btn-custom mr-2">Home <span class="ion-ios-arrow-forward"></span></a>
                        <a href="/categories/{{ $post->category->slug }}"
                            class="btn-custom mr-2">{{ $post->category->name }} <span
                                class="ion-ios-arrow-forward"></span></a>
                        <a href="/posts/{{ $post->slug }}" class="btn-custom">{{ $post->title }} <span
                                class="ion-ios-arrow-forward"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    {!! $post->body !!}
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="tag-cloud-link">{{ $post->category->name }}</a>

                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            @if ($post->author->image)
                                <img src="{{ $post->author->image }}" alt="Image placeholder" class="img-fluid mb-4" />
                            @else
                                <img src="/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4" />
                            @endif
                        </div>
                        <div class="desc">
                            <h3>{{ $post->author->name }}</h3>
                            <p>
                                {{ $post->author->brief }}
                            </p>
                        </div>
                    </div>

                    {{-- <div class="pt-5 mt-5">
                        <h3 class="mb-5 font-weight-bold">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">October 03, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Pariatur quidem laborum necessitatibus, ipsam
                                        impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit
                                        necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">October 03, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Pariatur quidem laborum necessitatibus, ipsam
                                        impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit
                                        necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Image placeholder" />
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">October 03, 2018 at 2:21pm</div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Pariatur quidem laborum
                                                necessitatibus, ipsam impedit vitae autem, eum
                                                officia, fugiat saepe enim sapiente iste iure!
                                                Quam voluptas earum impedit necessitatibus, nihil?
                                            </p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>

                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                                </div>
                                                <div class="comment-body">
                                                    <h3>John Doe</h3>
                                                    <div class="meta">
                                                        October 03, 2018 at 2:21pm
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Pariatur quidem laborum
                                                        necessitatibus, ipsam impedit vitae autem, eum
                                                        officia, fugiat saepe enim sapiente iste iure!
                                                        Quam voluptas earum impedit necessitatibus,
                                                        nihil?
                                                    </p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="images/person_1.jpg" alt="Image placeholder" />
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>John Doe</h3>
                                                            <div class="meta">
                                                                October 03, 2018 at 2:21pm
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipisicing elit. Pariatur quidem laborum
                                                                necessitatibus, ipsam impedit vitae autem,
                                                                eum officia, fugiat saepe enim sapiente
                                                                iste iure! Quam voluptas earum impedit
                                                                necessitatibus, nihil?
                                                            </p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder" />
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">October 03, 2018 at 2:21pm</div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Pariatur quidem laborum necessitatibus, ipsam
                                        impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit
                                        necessitatibus, nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-3 p-md-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" />
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website" />
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
                <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter" />
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Categories</h3>
                        <x-categories-grid></x-categories-grid>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Popular Articles</h3>
                        @foreach ($posts as $post)
                            <x-small-post :post="$post"></x-small-post>
                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Tag Cloud</h3>
                        <ul class="tagcloud">
                            <a href="#" class="tag-cloud-link">animals</a>
                            <a href="#" class="tag-cloud-link">human</a>
                            <a href="#" class="tag-cloud-link">people</a>
                            <a href="#" class="tag-cloud-link">cat</a>
                            <a href="#" class="tag-cloud-link">dog</a>
                            <a href="#" class="tag-cloud-link">nature</a>
                            <a href="#" class="tag-cloud-link">leaves</a>
                            <a href="#" class="tag-cloud-link">food</a>
                        </ul>
                    </div>

                    <div class="sidebar-box subs-wrap img" style="background-image: url(images/bg_1.jpg)">
                        <div class="overlay"></div>
                        <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                        <p class="mb-4">
                            Far far away, behind the word mountains, far from the
                            countries Vokalia
                        </p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address" />
                                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit" />
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Archives</h3>
                        <ul class="categories">
                            <li>
                                <a href="#">October 2018 <span>(10)</span></a>
                            </li>
                            <li>
                                <a href="#">September 2018 <span>(6)</span></a>
                            </li>
                            <li>
                                <a href="#">August 2018 <span>(8)</span></a>
                            </li>
                            <li>
                                <a href="#">July 2018 <span>(2)</span></a>
                            </li>
                            <li>
                                <a href="#">June 2018 <span>(7)</span></a>
                            </li>
                            <li>
                                <a href="#">May 2018 <span>(5)</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Paragraph</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ducimus itaque, autem necessitatibus voluptate quod mollitia
                            delectus aut.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
            </div>
        </div>
    </section>
</x-layout>

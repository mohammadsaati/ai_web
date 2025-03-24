<x-default-layout>
    <x-slot:title>{{ $data['title'] }}</x-slot:title>

    <!-- Divider -->
    <div class="border-bottom border-primary border-1 opacity-1"></div>

    <!-- =======================
    Inner intro START -->
    <section class="pb-3 pb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($data['post']->category)
                        <a href="{{ route('category.show' , $data['post']->category->slug) }}" class="badge text-bg-danger mb-2">
                            <i class="fas fa-circle me-2 small fw-bold"></i>{{ $data['post']->category->name }}
                        </a>
                    @endif
                    <h1>{{ $data['post']->title }}</h1>
                </div>
                <p class="lead my-2 small">{{ $data['post']->excerpt }}</p>
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->

    <section class="pt-0">
        <div class="container position-relative" data-sticky-container>
            <div class="row">
                <!-- Left sidebar START -->
                <div class="col-lg-2 p-0">
                    <div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80" data-sticky-for="991">
                        <!-- Author info -->
                        <div class="position-relative">
                            <div class="avatar avatar-xl">
                                <img class="avatar-img rounded-circle" src="{{ asset('assets/images/user-avatar.avif') }}" alt="avatar">
                            </div>
                            <a href="#" class="h5 stretched-link mt-2 mb-0 d-block">{{ $data['post']->admin->name }}</a>
                            <p>admin</p>
                        </div>
                        <hr class="d-none d-lg-block">
                        <!-- Card info -->
                        <ul class="list-inline list-unstyled p-0">
                            <li class="list-inline-item d-lg-block my-lg-2">{{ $data['post']->created_at }}</li>
                            <li class="list-inline-item d-lg-block my-lg-2">{{ $data['post']->read_time }} read</li>
                        </ul>
                    </div>
                </div>
                <!-- Left sidebar END -->
                <!-- Main Content START -->
                <div class="col-lg-7 mb-5">
                    {!! $data['post']->description !!}

                    @if(count($data['relatedPosts']))
                        <!-- Related post START -->
                        <div class="mt-5">
                            <h3 class="my-3"><i class="bi bi-symmetry-vertical me-2"></i>Related post</h3>
                            <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round">
                                <div class="tiny-slider-inner"
                                     data-autoplay="true"
                                     data-hoverpause="true"
                                     data-gutter="24"
                                     data-arrow="true"
                                     data-dots="false"
                                     data-items-xl="2"
                                     data-items-xs="1">

                                    @foreach($data['relatedPosts'] as $relatedPost)
                                        <!-- Card item START -->
                                        <div class="card">
                                            <!-- Card img -->
                                            <div class="position-relative">
                                                <img class="card-img" src="{{ imagePath('posts/'.$relatedPost->image) }}" alt="Card image">
                                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">

                                                    <!-- Card overlay bottom -->
                                                    <div class="w-100 mt-auto">
                                                        <a href="{{ route('category.show', $relatedPost->category->slug) }}" class="badge text-bg-info mb-2">
                                                            <i class="fas fa-circle me-2 small fw-bold"></i>
                                                            {{ $relatedPost->category->name }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pt-3">
                                                <h5 class="card-title">
                                                    <a href="{{ route('post.show', $relatedPost->slug) }}" class="btn-link text-reset stretched-link">{{ $relatedPost->title }}</a>
                                                </h5>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center position-relative">
                                                                <div class="avatar avatar-xs">
                                                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/user-avatar.avif') }}" alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">{{ $relatedPost->admin->name }}</a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">{{ $relatedPost->created_at }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
                                    @endforeach

                                </div>
                            </div> <!-- Slider END -->
                        </div>

                        <!-- Reply END -->
                    @endif
                </div>
                <!-- Main Content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-3">
                    <div data-sticky data-margin-top="80" data-sticky-for="991">
                        <h4><b>Share this article</b></h4>
                        <ul class="nav text-white-force p-0">
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
                                    <i class="fab fa-facebook-square align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
                                    <i class="fab fa-twitter-square align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
                                    <i class="fab fa-linkedin align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
                                    <i class="fab fa-pinterest align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
                                    <i class="far fa-envelope align-middle"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Advertisement -->
                        <div class="mt-4">
                            <a href="#" class="d-block card-img-flash">
                                <img src="{{ asset('assets/images/adv.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right sidebar END -->
            </div>
        </div>
    </section>

</x-default-layout>

<x-default-layout>
    <x-slot:title>{{ $data['title'] }}</x-slot:title>
    <!-- =======================
Inner intro START -->
    <section class="bg-dark-overlay-4" style="background-image:url('{{ imagePath('posts/').$data['post']->image }}'); background-position: center left; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-md-5 my-lg-5">
                    @if($data['post']->category)
                        <a href="{{ route('category.show' , $data['post']->category->slug) }}" class="badge text-bg-warning mb-2">
                            <i class="fas fa-circle me-2 small fw-bold"></i>{{ $data['post']->category->name }}
                        </a>
                    @endif
                    <h1 class="text-white">{{ $data['post']->title }}</h1>
                    <p class="lead text-white"></p>
                    <!-- Info -->
                    {{--<ul class="nav nav-divider text-white-force align-items-center">
                        <li class="nav-item">
                            <div class="nav-link">
                                <div class="d-flex align-items-center text-white position-relative">
                                    <div class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
                                    </div>
                                    <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">مریم حسینی</a></span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">15 آذر، 1400</li>
                        <li class="nav-item">5 دقیقه زمان مطالعه</li>
                        <li class="nav-item"><i class="far fa-eye me-1"></i> 2344 بازدید</li>
                        <li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a> 266</li>
                    </ul>--}}
                    <!-- Share post -->
                    {{--<div class="d-md-flex align-items-center mt-4">
                        <h5 class="text-white me-3">اشتراک گذاری </h5>
                        <ul class="nav text-white-force">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->

    <!-- =======================
Main START -->
    <section>
        <div class="container position-relative" data-sticky-container>
            <div class="row">
                <!-- Main Content START -->
               <div class="col-lg-9 mb-5" style="direction: rtl">
                   {!! $data['post']->description !!}
               </div>
                <!-- Main Content END -->
                <!-- Right sidebar START -->
                <div class="col-lg-3">
                    <div data-sticky data-margin-top="80" data-sticky-for="991">
                        <!-- Most read -->
                        @if(!empty($data['relatedPosts']))
                            <div>
                                <h3 class="mb-3">اخبار مشابه </h3>
                                @foreach($data['relatedPosts'] as $relatedPost)
                                <div class="tiny-slider dots-creative mt-3 mb-5">
                                    <div class="tiny-slider-inner"
                                         data-autoplay="false"
                                         data-hoverpause="true"
                                         data-gutter="0"
                                         data-arrow="false"
                                         data-dots="true"
                                         data-items="1">



                                            <!-- Card item START -->
                                            <div class="card">
                                                <!-- Card img -->
                                                <div class="position-relative">
                                                    <img class="card-img" src="{{ imagePath('posts/').$relatedPost->image }}" alt="Card image">
                                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                        <!-- Card overlay bottom -->
                                                        <div class="w-100 mt-auto">
                                                            <a href="{{ route('post.show' , $relatedPost->slug) }}" class="badge text-bg-success mb-2">
                                                                <i class="fas fa-circle me-2 small fw-bold"></i>
                                                                {{ $relatedPost->title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Card item END -->


                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif


                        <!-- Advertisement -->
                        {{--<div class="mt-4">
                            <a href="#" class="d-block card-img-flash">
                                <img src="assets/images/adv.png" alt="">
                            </a>
                        </div>--}}
                    </div>
                </div>
                <!-- Right sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main END -->


</x-default-layout>

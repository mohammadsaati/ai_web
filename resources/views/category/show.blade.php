<x-default-layout>
    <x-slot:title>{{ $data['title'] }}</x-slot:title>
    <!-- =======================
Inner intro START -->
    <section class="pb-4 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-dark-overlay-3 h-300 overflow-hidden card-bg-scale text-center" style="background-image:url('{{ imagePath('categories/').$data['category']->image }}'); background-position: center left; background-size: cover;">
                        <!-- Card Image overlay -->
                        <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                            <div class="col-md-8 m-auto bg-blur p-5 rounded-3 shadow-lg">
                                <h1 class="text-white">{{ $data['category']->name }}</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->


    <!-- =======================
Main content START -->
    <section class="position-relative pt-0">
        <div class="container">
            <div class="row g-4">

             @foreach($data['category']->posts as $post)
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                            <!-- Card featured -->
{{--                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>--}}
                            <!-- Card Image -->
                            <img src="{{ imagePath('posts/').$post->image }}" alt="">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3 p-md-4">

                                <div class="w-100 mt-auto">

                                    <!-- Card title -->
                                    <h4 class="text-white">
                                        <a href="{{ route('post.show' , $post->slug) }}" class="btn-link text-reset stretched-link">
                                            {{ $post->title }}
                                        </a>
                                    </h4>
                                    <!-- Card info -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
             @endforeach


            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Main content END -->


</x-default-layout>

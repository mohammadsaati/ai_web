<!-- =======================
    Main hero START -->
<section class="pt-4 pb-0 card-grid">
    <div class="container">
        <div class="row g-4">

            <!-- Left big card -->
            <div class="col-lg-6">
                <a href="{{ $data['banners'][0]->getLink() }}">
                    <div class="card card-overlay-bottom card-grid-lg card-bg-scale"
                        style="background-image:url({{ imagePath('banners/' . $data['banners'][0]->image) }}); background-position: center left; background-size: cover;">
                        <!-- Card featured -->
                        <span class="card-featured" title=""><i class="fas fa-star"></i></span>
                        <!-- Card Image overlay -->
                        <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                            {{-- <div class="w-100 mt-auto">
                            <!-- Card category -->
                            @if ($data['banners'][0]->type == \App\Enums\BannerEnum::CATEGORY->value)
                                <a href="{{ route('category.show' , $data['banners'][0]->category->slug) }}" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
                                    {{ $data['banners'][0]->category->name }}
                                </a>
                            @endif
                            <!-- Card title -->
                            @if ($data['banners'][0]->type == \App\Enums\BannerEnum::PRODUCT->value)
                                <h2 class="text-white h1"><a href="post-single-4.html" class="btn-link stretched-link text-reset">{{ $data['banners'][0]->post->title }}</a></h2>
                                <p class="text-white">{{ \Illuminate\Support\Str::of($data['banners'][0]->post->description)->limit(30) }}</p>
                            @endif

                        </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- Right small cards -->



            <div class="col-lg-6">
                <div class="row g-4">
                    @php($data['banners']->forget(0))
                    @foreach ($data['banners'] as $banner)
                        <div class="col-md-6">

                            <a href="{{ $banner->getLink() }}">
                                <div class="card card-overlay-bottom card-grid-sm card-bg-scale"
                                    style="background-image:url({{ imagePath('banners/' . $banner->image) }}); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                        {{-- <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            @if ($banner->type == \App\Enums\BannerEnum::CATEGORY->value && $banner->category)
                                                <a href="{{ route('category.show' , $banner->category->slug) }}" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
                                                    {{ $banner->category->name }}
                                                </a>
                                            <!-- Card title -->
                                            @elseif($banner->type == \App\Enums\BannerEnum::PRODUCT->value &&  $banner->post)
                                                <h4 class="text-white">
                                                    <a href="{{ route('post.show' , $banner->post->slug) }}" class="btn-link stretched-link text-reset">
                                                        {{ $banner->post->title }}
                                                    </a>
                                                </h4>

                                            @elseif($banner->type == \App\Enums\BannerEnum::LINK->value)
                                                <h4 class="text-white">
                                                    <a href="{{ $banner->link }}" class="btn-link stretched-link text-reset">
                                                        مشاهده
                                                    </a>
                                                </h4>
                                            @endif

                                        </div> --}}
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                    <!-- Card item START -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Main hero END -->

<div class="row gy-4">

    @foreach($data['resentPosts'] as $resentPost)
        <!-- Card item START -->
        <div class="col-sm-6">
            <div class="card">
                <!-- Card img -->
                <div class="position-relative">
                    <img class="card-img" src="{{ imagePath('posts/').$resentPost->image }}" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                        <!-- Card overlay bottom -->
                        <div class="w-100 mt-auto">
                            <!-- Card category -->
                           @if($resentPost->category)
                                <a href="{{ route('category.show' , $resentPost->category->slug) }}" class="badge {{ randomBadge() }} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ @$resentPost->category->name }}</a>
                           @endif
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-3">
                    <!-- Sponsored Post -->

                    <h4 class="card-title mt-2"><a href="{{ route('post.show' , $resentPost->slug) }}" class="btn-link text-reset">{{ $resentPost->title }}</a></h4>
                    <p class="card-text">{!! \Illuminate\Support\Str::of($resentPost->description)->limit(100) !!}</p>
                    <!-- Card info -->
                   {{-- <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                        <li class="nav-item">
                            <div class="nav-link">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">ادمین</a></span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">22 آذر، 1400</li>
                    </ul>--}}
                </div>
            </div>
        </div>
        <!-- Card item END -->
    @endforeach

</div>

<!-- =======================
Section START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
            @foreach ($sections as $section)
                <div class="col-md-12 mb-4">
                    <!-- Title -->
                    <div class="mb-4 d-md-flex justify-content-between align-items-center">
                        <h2 class="m-0">
                            <i class="bi bi-megaphone ml-3"></i>
                            {{ $section->name }}
                        </h2>
                        <a href="#" class="text-body small"><u>see all</u></a>
                    </div>
                    <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                        <div class="tiny-slider-inner"
                            data-autoplay="true"
                            data-hoverpause="true"
                            data-gutter="24"
                            data-arrow="true"
                            data-dots="false"
                            data-items-xl="4"
                            data-items-md="3"
                            data-items-sm="2"
                            data-items-xs="1">

                            @foreach($section->posts as $sectionPost)
                                    <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{ imagePath('posts/').$sectionPost->image }}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                {{-- <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                                </div> --}}
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge {{ randomBadge() }} mb-2">
                                                    <i class="fas fa-circle me-2 small fw-bold"></i>
                                                    {{ $sectionPost->category->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h5 class="card-title">
                                            <a href="{{ route('post.show', $sectionPost->slug) }}" class="btn-link text-reset fw-bold">
                                                {{ $sectionPost->title }}
                                            </a>
                                        </h5>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block p-0">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{  asset('assets/images/user-avatar.avif') }}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">by aipcdata</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">{{ $sectionPost->created_at }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
<!-- =======================
Section END -->

<!-- Logo Nav START -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo START -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="light-mode-item site-logo" src="{{ asset(config('theme.dark_logo')) }}" alt="logo">
            <img class="dark-mode-item img-fluid site-logo" src="{{ asset(config('theme.light_logo')) }}" alt="logo">
        </a>
        <!-- Logo END -->

        <!-- Responsive navbar toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-body h6 d-none d-sm-inline-block">منو</span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main navbar START -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav navbar-nav-scroll mx-auto">

                @foreach($categories as $category)

                    @php($subCategories = \App\Models\Category::GetSubCategories($category->id))

                    @if(!$subCategories->count())
                        <a class="nav-link" href="{{ route('category.show' , $category->slug) }}">{{ $category->name }}</a>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $category->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                @foreach($subCategories->get() as $subCategory)
                                    <li> <a class="dropdown-item" href="{{ route('category.show' , $subCategory->slug) }}">{{ $subCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif

                @endforeach

            </ul>
        </div>
        <!-- Main navbar END -->

        <!-- Nav right START -->
        <div class="nav flex-nowrap align-items-center">
            <!-- Nav Button -->
            {{--<div class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-danger mb-0 mx-2">خبرنامه</a>
            </div>--}}
            <!-- Nav Search -->
            {{--<div class="nav-item dropdown dropdown-toggle-icon-none nav-search">
                <a class="nav-link dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-search fs-4"> </i>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                    <form class="input-group">
                        <input class="form-control border-success" type="search" placeholder="جستجو" aria-label="Search">
                        <button class="btn btn-success m-0" type="submit">جستجو</button>
                    </form>
                </div>
            </div>--}}
            <!-- Offcanvas menu toggler -->
{{--            <div class="nav-item">--}}
{{--                <a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">--}}
{{--                    <i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
        <!-- Nav right END -->
    </div>
</nav>
<!-- Logo Nav END -->

<!-- Sidebar START -->
<div class="col-lg-3 mt-5 mt-lg-0">
    <div data-sticky data-margin-top="80" data-sticky-for="767">

        <!-- Social widget START -->
        <div class="row g-2">
            <div class="col-4">
                <a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                    <i class="fab fa-facebook-square fs-5 mb-2"></i>
                    <h6 class="m-0">1.5K</h6>
                    <span class="small">طرفدار</span>
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                    <i class="fab fa-instagram fs-5 mb-2"></i>
                    <h6 class="m-0">1.8M</h6>
                    <span class="small">حامیان</span>
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                    <i class="fab fa-youtube-square fs-5 mb-2"></i>
                    <h6 class="m-0">22K</h6>
                    <span class="small">بازدید</span>
                </a>
            </div>
        </div>
        <!-- Social widget END -->

        <!-- Trending topics widget START -->
        <div>
            <h4 class="mt-4 mb-3">برگزیده ها</h4>
            @foreach($data['randomCats'] as $cat)
                <!-- Category item -->
                <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url('{{ imagePath('categories/').$cat->image }}'); background-position: center left; background-size: cover;">
                    <div class="p-3">
                        <a href="{{ route('category.show' , $cat->slug) }}" class="stretched-link btn-link text-white h5">{{ $cat->name }}</a>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Trending topics widget END -->


    </div>
</div>
<!-- Sidebar END -->

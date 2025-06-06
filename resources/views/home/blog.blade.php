<x-default-layout>
    <x-slot:title>{{ $data['title'] }}</x-slot:title>

    <!-- check has any banner exist -->
    @if(count($data['banners']))
        <!-- include website banners -->
        @include('home._banners' , $data['banners'])
    @endif


    <section class="position-relative">
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Main Post START -->
                <div class="col-lg-9">
                    <!-- Title -->
                    <div class="mb-4">
                        <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
                        <p>Latest breaking news, pictures, videos, and special reports</p>
                    </div>

                    <!-- include resent posts -->
                    @include('home._posts' , $data['resentPosts'])

                </div>
                @if(!empty($data['resentPosts']))
                    <!-- Main Post END -->

                    <!--
                     include widgets
                     1.random categories
                     2.some random posts
                   -->
                    @include('home._widgets' , $data['resentPosts'])
                @endif

            </div> <!-- Row end -->
        </div>
    </section>

        <!-- check has any section exist -->
        @if(count($data['sections']))
            <!-- include website sections -->
            @include('home._sections', ['sections' => $data['sections']])
        @endif

</x-default-layout>

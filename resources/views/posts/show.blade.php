<x-default-layout>
    <x-slot:title>
        {{ $data["title"] }}
    </x-slot:title>
    <!--began::container-->
    <div class="container">
        <!--began::row-->
        <div class="row bg-gray-300 p-2 rounded-1">
            <!--began::image&title-->
            <div class="col-xl-4 col-lg-4 col-6">
                <img src="{{ panel_image(image:$data["post"]->image , folder: 'posts') }}" class="img-fluid h-300px w-100 rounded-1" alt="{{ $data["post"]->title }}">
            </div>
            <div class="col-xl-8 col-lg-8 col-6">
                <h1 class="fs-3x">{{ $data["post"]->title }}</h1>
                <a href="#">
                    <p class="text-dark mt-15">
                        {!! getIcon(name:'folder' , class: 'text-dark') !!}
                        {{ $data["post"]->category->name }}
                    </p>
                </a>
            </div>
            <!--end::image&title-->
        </div>
        <!--end::row-->
        <!--began::description-->
        <div class="row mt-10">
            <div class="col-12">
                {!! $data["post"]->description !!}
            </div>
        </div>
        <!--end::description-->
    </div>
    <!--end::container-->
</x-default-layout>

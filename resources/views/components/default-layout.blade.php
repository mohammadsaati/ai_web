@extends('layouts.layout')
@section('title' , $title)

@section('content')
    <!-- advertisement data from option table -->
{{--    @include('layouts.headers._advertisement')--}}
    <!-- this header will show in mobile mode that include website info such as phone,address,etc -->
    @include('layouts.headers._mobileSiteInfoHeader')

    <!-- Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- header witch control website setting dark mode, light mode and etc -->
        @include('layouts.headers._settingHeader')

        <!-- site main header include parent categories  -->
        @include('layouts.headers._header' , $categories)
    </header>
    <!-- Header END -->



    {{ $slot }}

    <!-- Add website footer -->
   <x-footer />
@endsection


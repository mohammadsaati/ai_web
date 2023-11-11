@extends("_default")
@section("title" , $title)

@section("content")
    @include("../header/_header")
    {{ $slot }}
@endsection

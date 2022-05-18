@extends('front.layout.master')  

@section('title') Gallery Products @endsection

@section('description') Description Page @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.galleryproduct.desktop.galleryproduct')
    @endif

    @if ($agent->isMobile())
         @include('front.pages.galleryproduct.mobile.galleryproduct')
    @endif  
       
@endsection  



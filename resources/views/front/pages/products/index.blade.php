@extends('front.layout.master')  

@section('title') Products @endsection

@section('description') Description Page @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.products.desktop.products')
    @endif

    @if ($agent->isMobile())
        @include('front.pages.products.mobile.products')
    @endif  
       
@endsection  



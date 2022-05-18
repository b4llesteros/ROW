@extends('front.layout.master')  

@section('title') Checkout @endsection

@section('description') Checkout page @endsection

@section('keywords') Keywords @endsection

@section('content')
    
    @if ($agent->isDesktop())
        @include('front.pages.checkout.desktop.checkout',['title' => "Checkout" ])
    @endif

    @if ($agent->isMobile())
        @include('front.pages.checkout.mobile.checkout')
    @endif


@endsection  


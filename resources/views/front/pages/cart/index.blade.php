@extends('front.layout.master')   

@section('title') Cart @endsection

@section('description') Cart @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.cart.desktop.cart',['title' => "Cart" ])
    @endif

    @if ($agent->isMobile())
        @include('front.pages.cart.mobile.cart')
    @endif

@endsection
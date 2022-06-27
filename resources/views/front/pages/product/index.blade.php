@extends('front.layout.master')   

@section('title') Product Page @endsection

@section('description') Product Page @endsection

@section('keywords') Keywords @endsection

@section('content')

@if ($agent->isDesktop())
    @include('front.pages.product.desktop.product' )
@endif

@if ($agent->isMobile())
    @include('front.pages.product.mobile.product')
@endif  
    
@endsection
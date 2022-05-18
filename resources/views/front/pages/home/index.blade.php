@extends('front.layout.master')   

@section('title') Home @endsection

@section('description') Homepage @endsection

@section('keywords') Keywords @endsection

@section('content')
                    
        
    @if ($agent->isDesktop())
        @include('front.pages.home.desktop.index')
        @endif

        @if ($agent->isMobile())
        @include('front.pages.home.mobile.index')
    @endif  
    
@endsection



@extends('front.layout.master') 

@section('title') Contact Page @endsection

@section('description') Contact with us @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.contact.desktop.contact',['title' => "Contact" ])
    @endif

    @if ($agent->isMobile())
            @include('front.pages.contact.mobile.contact')
    @endif
    
@endsection  
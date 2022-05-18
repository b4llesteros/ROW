@extends('front.layout.master')   

@section('title') Faqs @endsection

@section('description') Answers and questions @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.faqs.desktop.faqs',['title' => "Faqs" ])
    @endif

    @if ($agent->isMobile())
         @include('front.pages.faqs.mobile.faqs')
    @endif

@endsection
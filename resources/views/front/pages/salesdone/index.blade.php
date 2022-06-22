@extends('front.layout.master')   

@section('title') Cart @endsection

@section('description') Cart @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())
        @include('front.pages.salesdone.desktop.salesdone')
    @endif

    @if ($agent->isMobile())
        @include('front.pages.salesdone.mobile.salesdone')
    @endif

@endsection
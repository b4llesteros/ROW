@extends('front.layout.master')   

@section('title') Faqs @endsection

@section('description') Answers and questions @endsection

@section('keywords') Keywords @endsection

@section('content')

    @if ($agent->isDesktop())

        {{-- la variable del FaqController  se le pasa a la vista, para tenerla disponible en el front, 
            haciendo un for each--}}
        @include('front.pages.faqs.desktop.faqs',['title' => "Faqs" ], ['faqs' => $faqs])
    @endif

    @if ($agent->isMobile())
         @include('front.pages.faqs.mobile.faqs')
    @endif

@endsection
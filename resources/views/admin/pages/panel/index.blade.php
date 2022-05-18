
@extends('admin.layout.master')   

    @section('content')  

        @if ($agent->isDesktop())
            @include('admin.pages.panel.desktop.panel')
        @endif

        @if ($agent->isMobile())
            @include('admin.pages.panel.mobile.panel')
        @endif  
        
@endsection            


      

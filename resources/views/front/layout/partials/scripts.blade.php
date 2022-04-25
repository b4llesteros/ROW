{{-- @if($agent->isDesktop())
    <link href="{{mix('front/desktop/js/app.js')}}" rel="stylesheet">
@endif

@if($agent->isMobile())
    <link href="{{mix('front/mobile/js/app-mobile.js')}}" rel="stylesheet">
@endif --}}

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Noto Sans:400', 'Noto Sans:700']
        }
    });        
</script>

<script src="{{mix('front/desktop/js/app.js')}}"> </script> 
<div class="desktop-one-column mobile-one-column">
    <div class="column">
        <div class="container">
            <ul class="container-tabs">
                <li class="tab tab--active" data-tab="description" >Descripción</li>
                <li class="tab" data-tab="specs">Característica</li>
                <li class="tab" data-tab="opinions">Opiniones</li>
            </ul>
        </div>
        <div class="container-content">
            <div class="content content--active" data-tab="description">
                <span>{!!$product->description!!}</span>
            </div>
            <div class="content" data-tab="specs">
                <span>{{$product->spec}}</span>
            </div>
            <div class="content" data-tab="opinions">
                <span>{{$product->opinions}}</span>
            </div>
        </div>
    </div>
</div>
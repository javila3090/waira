<section class="features mb-50" id="clients">
    <div class="container">
        <div class="section-heading text-center mb-0">
            <h2>{{$clients->title}}</h2>
            <p class="text-muted">{{$clients->subtitle}}</p>
            <hr>
        </div>
        <br>
        <div class="col-lg-12 col-12">
            @foreach ($clientBanners->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $cb)
                <div class="col-lg-4 text-center" style="margin-top: 50px;">
                    <img src="{{$cb->image}}" class="img img-fluid logo-client center wow zoomIn">
                </div>
               @endforeach
            </div>
             @endforeach
        </div>
    </div>
</section>
<section class="content-section" id="portfolio" style="background-color:#f2f2f2; padding-bottom:200px;">
    <div class="container">
        <div class="section-heading text-center mb-100">
            <h2>Portafolio</h2>
            <hr>
        </div>
        <div class="row no-gutters">
            @foreach($portfolioBanners as $item)
            <div class="col-lg-6">
                <a class="portfolio-item wow rollIn" href="{{$item->url}}" target="_blank">
                    <span class="caption">
                        <span class="caption-content caption-text">
                            <h2 style="font-weight:900;">{{$item->title}}</h2>
                            <div class="mb-0">{!!$item->caption!!}</div>
                        </span>
                    </span>
                    <img class="img-fluid" src="{{$item->image}}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
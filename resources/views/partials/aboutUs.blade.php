<section class=" text-center" id="download" style="background-color:#f2f2f2;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mb-50">
                <div class="section-heading text-center">
                    <h2>{{$aboutUs->title}}</h2>
                    <p class="text-muted">{{$aboutUs->subtitle}}</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-12 wow animated bounceInUp">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-justify">
                        <p class=" ">{!!$aboutUs->content!!}</p>
                    </div>
                </div>
            </div>            
            <div class="col-md-6 col-12 wow bounceInDown" style="padding: 10px;">
                <img src="{{$aboutUs->image}}" class="img img-fluid rounded" data-wow-delay="1s">
            </div>
        </div>
    </div>
</section>
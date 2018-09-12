<section class="features" id="services">
    <div class="container">
        <div class="section-heading text-center">
            <h2>{{$services->title}}</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($servicesBanners as $sb)
                        <div class="col-lg-4">
                            <div class="feature-item wow rotateIn">
                                <img src="{{$sb->image}}" class="img-fluid" alt="" width="200 " height="auto">
                                <br>
                                <br>
                                <br>
                                <h3>{{$sb->title}}</h3>
                                <hr>
                                <p class="text-muted">{!!$sb->caption!!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach( $homeBanners as $v )
        <li data-target="#carousel-example-generic2" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($homeBanners as $v)
        <div class="item {{ $loop->first ? ' active' : '' }} bg-overlay" style="background-image: url('{{$v->image}}');">
            <div class="carousel-caption">
                <h1 class="super-heading wow bounceInDown" data-wow-delay="0.5s">{{$v->title}}</h1>
                <h1 class="super-heading wow bounceInLeft" data-wow-delay="1s">{{$v->subtitle}}</h1>
                <br/>
                @if($v->caption!='<p>&nbsp;</p>')
                <div class="wow bounceInRight" data-wow-delay="1s" style="background-color: #569a9d;">
                    <p class="super-paragraph" >{!!$v->caption!!}</p>
                </div>
                @endif
                @if($v->button)
                <br/>
                <div class="wow rollIn" data-wow-delay="1.5s">
                    <a href="#{{$v->target->name}}" class="btn btn-theme btn-lg">{!!$v->button!!}</a>
                </div>
                @endif                
            </div>
        </div>        
        @endforeach
    </div>
</div>
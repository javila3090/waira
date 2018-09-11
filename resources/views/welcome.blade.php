@extends('layouts.base')

@section('content')

<script type='text/javascript'>var centreGot = false;</script>

{!! $map['map_js'] !!}

@include('partials.header')

<section class=" bg-primary text-center" id="download">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mb-70">
                <div class="section-heading text-center">
                    <h2>{{$aboutUs->title}}</h2>
                    <p class="text-muted">{{$aboutUs->subtitle}}</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 wow animated bounceInUp">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-justify">
                        <p class=" ">{!!$aboutUs->content!!}</p>
                    </div>
                </div>
            </div>            
            <div class="col-md-6 col-xs-12 about-img wow bounceInDown" style="padding: 10px;">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="{{$aboutUs->image}}" alt="" class="img img-fluid rounded wow text-center box-shadow" data-wow-delay="1s">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features" id="services">
    <div class="container">
        <div class="section-heading text-center">
            <h2>{{$services->title}}</h2>
            <p class="text-muted">{{$services->subtitle}}</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($servicesBanners as $sb)
                        <div class="col-lg-4">
                            <div class="feature-item wow rollIn">
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

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2>Stop waiting.<br>Start building.</h2>
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="features" id="clients">
    <div class="container">
        <div class="section-heading text-center">
            <h2>{{$clients->title}}</h2>
            <p class="text-muted">{{$clients->subtitle}}</p>
            <hr>
        </div>
        <div class="col-lg-12 col-12">
            <div class="row">
                @php
                    $i=1;
                @endphp
                @foreach ($clientBanners as $cb)
                <div class="col-lg-4 text-center" @if($i>3)style="margin-top:80px;"@endif>
                    <img src="{{$cb->image}}" class="img img-fluid logo-client center wow zoomIn">
                </div>
                @php
                    $i++;
                @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="contact bg-primary" id="contact">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="section-heading text-center">
                    <h2>¡Hablemos!</h2>
                </div>
                <hr>
                <br>
                <br>
                <div class="contact-form-area mb-100">
                    <div id="sendmessage">
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <b>¡Gracias por escribirnos!</b> Su mensaje será respondido a la mayor brevedad posible.
                        </div>
                    </div>
                    <div id="errormessage"></div>                    
                    <form action="" method="post" class="form-horizontal contactForm" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 carácteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 carácteres de asunto" />
                            <div class="validation"></div>
                        </div>                
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor ingrese su mensaje" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <br>
                            <button class="btn btn-xl js-scroll-trigger btn-info" type="submit">Enviar mensaje</button>
                            <button type="button" class="btn btn-xl js-scroll-trigger btn-info btn-sending" disabled="true" style="display: none;">Enviando mensaje <i class="fa fa-spinner fa-spin"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Information -->
            <div class="col-12">
                <div class="map-area  box-shadow">
                    {!! $map['map_html'] !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container section-padding-100-0">
        <h2>¡Seamos amigos!</h2>
        <hr>
        <br>
        <br>
        <ul class="list-inline list-social">
            <li class="list-inline-item social-twitter">
                <a href="#">
                    <i class="fa fa-twitter" style="margin-top:20px;"></i>
                </a>
            </li>
            <li class="list-inline-item social-facebook">
                <a href="#">
                    <i class="fa fa-facebook" style="margin-top:20px;"></i>
                </a>
            </li>
            <li class="list-inline-item social-google-plus">
                <a href="#">
                    <i class="fa fa-google-plus" style="margin-top:20px;"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
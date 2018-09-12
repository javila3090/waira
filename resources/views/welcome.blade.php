@extends('layouts.base')

@section('content')

<script type='text/javascript'>var centreGot = false;</script>

{!! $map['map_js'] !!}

@include('partials.header')

<section class=" bg-primary text-center" id="download">
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
                <img src="{{$aboutUs->image}}" class="img img-fluid rounded box-shadow" data-wow-delay="1s">
            </div>
        </div>
    </div>
</section>

<!-- Services -->
@include('partials.services')

<!-- Portfolio -->
@include('partials.portfolio')

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2>Stop waiting.<br>Start building.</h2>
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<!-- Clients -->
@include('partials.clients')

<!-- Contact -->
@include('partials.contact')
@endsection
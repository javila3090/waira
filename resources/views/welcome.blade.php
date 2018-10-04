@extends('layouts.base')

@section('content')


<!-- Header -->
@include('partials.header')

<!-- About Us -->
@include('partials.aboutUs')

<!-- Services -->
@include('partials.services')

<!-- Portfolio -->
@include('partials.portfolio')

<!-- Clients -->
@include('partials.clients')

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2 class="size-40px wow fadeInDown">¡No esperes más!<br><br>Y cuéntanos tu idea</h2>
            <br>
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger  wow fadeInUp">¡Tomemos un café! <i class="fa fa-coffee"></i></a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<!-- Contact -->
@include('partials.contact')
@endsection
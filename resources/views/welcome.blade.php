@extends('layouts.base')

@section('content')

<script type='text/javascript'>var centreGot = false;</script>

{!! $map['map_js'] !!}

<!-- Header -->
@include('partials.header')

<!-- About Us -->
@include('partials.aboutUs')

<!-- Services -->
@include('partials.services')

<!-- Portfolio -->
@include('partials.portfolio')

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2 class="size-40px wow fadeInDown">¡No esperes más!<br><br>Y cuéntanos cual es tu idea</h2>
            <br>
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger  wow fadeInUp">¡Tomemos un café! <i class="fa fa-coffee"></i></a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<!-- Clients -->
@include('partials.clients')

<!-- Contact -->
@include('partials.contact')
@endsection
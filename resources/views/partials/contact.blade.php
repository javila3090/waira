<section class="contact bg-primary" id="contact">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="section-heading text-center">
                    <h2>¡Tomemos un café!</h2>
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
                            <button class="btn btn-xl js-scroll-trigger btn-info btn-submit" type="submit">Enviar mensaje</button>
                            <button type="button" class="btn btn-xl js-scroll-trigger btn-info btn-sending" disabled="true" style="display: none;">Enviando mensaje <i class="fa fa-spinner fa-spin"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Information -->
            <div class="col-12">
                <div class="map-area box-shadow">
                    {!! Mapper::render() !!}
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
            <li class="list-inline-item social-twitter wow slideInLeft">
                <a href="https://twitter.com/{{$companyInfo->twitter}}" target="_blank">
                    <i class="fa fa-twitter" style="margin-top:20px;"></i>
                </a>
            </li>
            <li class="list-inline-item social-facebook wow slideInUp">
                <a href="https://facebook.com/{{$companyInfo->facebook}}" target="_blank">
                    <i class="fa fa-facebook" style="margin-top:20px;"></i>
                </a>
            </li>
            <li class="list-inline-item social-google-plus wow slideInRight">
                <a href="https://instagram.com/{{$companyInfo->instagram}}" target="_blank">
                    <i class="fa fa-instagram" style="margin-top:20px;"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
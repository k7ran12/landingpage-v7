<!DOCTYPE html>
<html>

<!-- Mirrored from pixfort.com/item/megapack/agency by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 18:26:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="">
    <!-- CSS dependencies -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/pix_style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('./css/font-style.css') }}" />

    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="https://pixfort.com/items/1/css/ie-fix.css" />
    <![endif]-->

    <link href="{{ asset('css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <title>LandingPage</title>
</head>

<body>
    <div class="pix_section pix_nav_menu pix_scroll_header normal pix-over-header pix-padding-v-30"
        data-scroll-bg="#555">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12 pix-inner-col col-sm-10 column ui-droppable">
                    <div class="pix-content">
                        <nav class="navbar navbar-default pix-no-margin-bottom pix-navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#pix-navbar-collapse" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a style="color:white !important"
                                        class="navbar-brand logo-img logo-img-a pix-adjust-height" href="#"><img src=""
                                            alt="" class="img-responsive pix-logo-img">
                                            <img src="{{ asset('images/paginas/'.$pagina->sec1_logo.'') }}" alt="" class="img-responsive pix-logo-img">
                                            </a>
                                </div>
                                <div class="collapse navbar-collapse" id="pix-navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right media-middle pix-header-nav pix-adjust-height"
                                        id="pix-header-nav">
                                        <li class="dropdown"><a href="#" class="pix-slight-white"
                                                data-toggle="modal" data-target="#popup_7">CONTACTO</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 pix-inner-col col-sm-2">
                    <div class="pix-content pix-adjust-height text-right">

                        <div class="pix-header-item">
                            <a target="_blank" href="{{ $pagina->sec1_url_facebook }}" class="small-social">
                                <i class="pixicon-facebook3 big-icon-50 pix-slight-white"></i>
                            </a>
                            <a target="_blank" href="{{ $pagina->sec1_url_twitter }}" class="small-social">
                                <i class="pixicon-twitter4 big-icon-50 pix-slight-white"></i>
                            </a>
                            <a target="_blank" href="{{ $pagina->sec1_url_instagram }}" class="small-social">
                                <i class="pixicon-instagram4 big-icon-50 pix-slight-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding-v-85 pix-agency-1"
        style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('../images/paginas/{{ $pagina->sec1_bannerimagen }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
                    <div class="pix-content text-center">
                        <div class="pix-margin-bottom-30">
                            <a href="#" class="pix-circle-btn-3" data-toggle="modal" data-target="#popup_8">
                                <i class="pixicon-play4 big-icon pix-white"></i>
                            </a>
                        </div>
                        <h1 class="pix-white text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec1_titulo }}</strong></span>
                        </h1>
                        <p class="pix-light-gray text-center pix-margin-bottom-30 big-text">
                            <span class="pix_edit_text">{{ $pagina->sec1_subtitulo }}</span>
                        </p>
                        <!--<a href="#" class="btn green-bg pix-white btn-xl wide btn-flat">
                            <span class="pix_edit_text">
                                <strong>Ordenar hoy</strong>
                            </span>
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section gray-bg pix-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center pix-padding-bottom-30">
                        <i class="pixicon-pictures big-icon pix-green"></i>
                        <h1 class="pix-black-gray-dark text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec2_titulo }}</strong></span>
                        </h1>
                        <h5 class="pix-black-gray-light text-center">
                            <span class="pix_edit_text">{{ $pagina->sec2_subtitulo }}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content text-center agency-feature-1 agency-feature pix-margin-v-10 pix-padding-h-20"
                        style="background-image: linear-gradient(rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)),url('../images/paginas/{{ $pagina->sec2_card1_imagen }}')">
                        <h4 class="pix-white">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec2_card1_titulo }}</strong></span>
                        </h4>
                        <p class="pix-slight-white text-center pix-margin-bottom-10">
                            <span class="pix_edit_text">{{ $pagina->sec2_card1_subtitulo }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content text-center agency-feature-2 agency-feature pix-margin-v-10 pix-padding-h-20"
                        style="background-image: linear-gradient(rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)),url('../images/paginas/{{ $pagina->sec2_card2_imagen }}')">
                        <h4 class="pix-white">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec2_card2_titulo }}</strong></span>
                        </h4>
                        <p class="pix-slight-white text-center pix-margin-bottom-10">
                            <span class="pix_edit_text">{{ $pagina->sec2_card2_subtitulo }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content text-center agency-feature-3 agency-feature pix-margin-v-10 pix-padding-h-20"
                        style="background-image: linear-gradient(rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)),url('../images/paginas/{{ $pagina->sec2_card3_imagen }}')">
                        <h4 class="pix-white">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec2_card3_titulo }}</strong></span>
                        </h4>
                        <p class="pix-slight-white text-center pix-margin-bottom-10">
                            <span class="pix_edit_text">{{ $pagina->sec2_card3_subtitulo }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center">
                        <i class="pixicon-telescope big-icon pix-green"></i>
                        <h1 class="pix-black-gray-dark text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec3_titulo }}</strong></span>
                        </h1>
                        <h5 class="pix-black-gray-light text-center">
                            <span class="pix_edit_text">{{ $pagina->sec3_subtitulo }}</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding-v-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content pix-padding-v-10 pix-margin-v-10 ">
                        <h3 class="pix-black-gray-dark">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec3_card1_titulo }}</strong></span>
                        </h3>
                        <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
                            <span class="pix_edit_text">{{ $pagina->sec3_card1_subtitulo }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content text-center pix-padding-v-10 pix-margin-v-10">
                        <div class="pix-margin-bottom-20">
                            <i class="pixicon-speedometer big-icon-100 pix-green big-icon-100"></i>
                        </div>
                        <h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec3_card2_titulo }}</strong></span>
                        </h5>
                        <p class="pix-black-gray-light text-center pix-margin-bottom-20 big-text">
                            <span class="pix_edit_text">{{ $pagina->sec3_card2_subtitulo }}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content text-center pix-padding-v-10 pix-margin-v-10">
                        <div class="pix-margin-bottom-20">
                            <i class="pixicon-layers big-icon-100 pix-green big-icon-100"></i>
                        </div>
                        <h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec3_card3_titulo }}</strong></span>
                        </h5>
                        <p class="pix-black-gray-light text-center pix-margin-bottom-20 big-text">
                            <span class="pix_edit_text">{{ $pagina->sec4_subtitulo }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pix_section pix-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center pix-padding-bottom-80">
                        <i class="pixicon-lightbulb big-icon pix-green"></i>
                        <h1 class="pix-black-gray-dark text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec4_titulo }}</strong></span>
                        </h1>
                        <h5 class="pix-black-gray-light text-center">
                            <span class="pix_edit_text">{{ $pagina->sec4_subtitulo }}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content pix-padding-top-30">
                        <h3 class="pix-black-gray-dark pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec4_card1_titulo }}</strong></span>
                        </h3>
                        <p class="pix-black-gray-light big-text-20 pix-margin-bottom-20">
                            <span class="pix_edit_text">
                                {{ $pagina->sec4_card1_subtitulo }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12 text-center">
                    <img src="{{ asset('images/paginas/'.$pagina->sec4_card1_imagen) }}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 text-center">
                    <img src="{{ asset('images/paginas/'.$pagina->sec4_card2_imagen.'') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="pix-content pix-padding-top-30">
                        <h3 class="pix-black-gray-dark pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec4_card2_titulo }}</strong></span>
                        </h3>
                        <p class="pix-black-gray-light big-text-20 pix-margin-bottom-20">
                            <span class="pix_edit_text">
                                {{ $pagina->sec4_card2_subtitulo }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding-v-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center pix-padding-top-60 pix-padding-bottom-30">
                        <i class="pixicon-clipboard big-icon pix-green"></i>
                        <h1 class="pix-black-gray-dark text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec5_titulo }}</strong></span>
                        </h1>
                        <h5 class="pix-black-gray-light text-center">
                            <span class="pix_edit_text">{{ $pagina->sec5_subtitulo }}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="pix-content gray-bg pix-radius-3 pix-padding-v-30 pix-padding-h-20 pix-margin-v-20">
                        <div class="media">
                            <div class="media-left media-box-area">
                                <div class="pix-inner">
                                    <div class="pix-round-shape-120">
                                        <img src="{{ asset('images/paginas/'.$pagina->sec5_card1_imagen.'') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="media-body media-box-area">
                                <div class="pix-inner">
                                    <h4 class="media-heading pix-black-gray-dark">
                                        <span class="pix_edit_text">
                                            <strong>{{ $pagina->sec5_card1_titulo }}</strong>
                                        </span>
                                    </h4>
                                    <p class="pix-black-gray-light pix-no-margin-top ">
                                        <span class="pix_edit_text">{{ $pagina->sec5_card1_subtitulo }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="pix-content gray-bg pix-radius-3 pix-padding-v-30 pix-padding-h-20 pix-margin-v-20">
                        <div class="media">
                            <div class="media-left media-box-area">
                                <div class="pix-inner">
                                    <div class="pix-round-shape-120">
                                        <img src="{{ asset('images/paginas/'.$pagina->sec5_card2_imagen.'') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="media-body media-box-area">
                                <div class="pix-inner">
                                    <h4 class="media-heading pix-black-gray-dark">
                                        <span class="pix_edit_text">
                                            <strong>{{ $pagina->sec5_card2_titulo }}</strong>
                                        </span>
                                    </h4>
                                    <p class="pix-black-gray-light pix-no-margin-top ">
                                        <span class="pix_edit_text">{{ $pagina->sec5_card2_subtitulo }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pix_section pix-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center pix-padding-bottom-40">
                        <i class="pixicon-lightbulb big-icon pix-green"></i>
                        <h1 class="pix-black-gray-dark text-center pix-no-margin-top">
                            <span class="pix_edit_text"><strong>{{ $pagina->sec6_titulo }}</strong></span>
                        </h1>
                        <h5 class="pix-black-gray-light text-center">
                            <span class="pix_edit_text">{{ $pagina->sec6_subtitulo }}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="{{ $pagina->sec6_url_mapa }}"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section pix-padding-bottom-60 pix-padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="pix-content">
                        <div class="pix_section inner_section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="pix-content pix-padding-v-20">
                                            <div class="media ic">
                                                <div class="media-left pix-icon-area text-center pix-padding-right-20">
                                                    <i class="pixicon-phone2 big-icon pix-green"></i>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <h5 class="pix-black-gray-dark pix-no-margin-bottom">
                                                        <span class="pix_edit_text"><strong>Numero de
                                                                telefono</strong></span>
                                                    </h5>
                                                    <p class="pix-black-gray-light pix-margin-bottom-30">
                                                        <span class="pix_edit_text">Llámenos hoy: {{ $pagina->sec6_celular }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="pix-content pix-padding-v-20">
                                            <div class="media">
                                                <div
                                                    class="media-left pix-icon-area text-center pix-padding-right-20 pix">
                                                    <i class="pixicon-envelope big-icon pix-green"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="pix-black-gray-dark">
                                                        <span class="pix_edit_text"><strong>Email</strong></span>
                                                    </h5>
                                                    <p class="pix-black-gray-light pix-margin-bottom-30">
                                                        <span class="pix_edit_text">Envianos un email:
                                                            {{ $pagina->sec6_email }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="pix-content pix-padding-v-20">
                                            <div class="media">
                                                <div class="media-left pix-icon-area text-center pix-padding-right-20">
                                                    <i class="pixicon-map2 big-icon pix-green"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="pix-black-gray-dark">
                                                        <span class="pix_edit_text"><strong>Dirección</strong></span>
                                                    </h5>
                                                    <p class="pix-black-gray-light pix-margin-bottom-30">
                                                        <span class="pix_edit_text">{{ $pagina->sec6_direccion }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="pix-content pix-radius-3">
                        <form class="pix-form-style pixfort-form" pix-popup="#popup_thank_you">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control"
                                    placeholder="Ingrese su nombre completo">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Ingrese su direccion email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Ingresa su numero de celular">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Ingrese su mensaje aqui..."></textarea>
                            </div>
                            <button type="submit"
                                class="btn green-bg pix-white btn-lg small-text btn-flat btn-block"><strong>Enviar
                                    Informacion</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section gray-bg pix-padding-v-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content text-center">
                        <a target="_blank" href="{{ $pagina->sec1_url_facebook }}" class="big-icon-link">
                            <i class="pixicon-facebook3 pix-light-gray"></i>
                        </a>
                        <a target="_blank" href="{{ $pagina->sec1_url_twitter }}" class="big-icon-link">
                            <i class="pixicon-twitter4 pix-light-gray"></i>
                        </a>
                        <a target="_blank" href="{{ $pagina->sec1_url_instagram }}" class="big-icon-link">
                            <i class="pixicon-instagram4 pix-light-gray"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="popup_8" class="modal pix_popup" role="dialog" aria-hidden="true" style="display: none;"
        data-name="video_popup">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">×</a>
                </div>
                <div class="modal-body">
                    <div class="pix_section animating modal-section popup_section" style="display: block;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center col-sm-6">
                                    <div class="pix-content text-center animating">
                                        <div class="pix-padding-bottom-20">
                                            <i class="pixicon-video2 big-icon pix-green"></i>
                                        </div>
                                        <h3 class="pix-black-gray-dark pix-no-margin-top">
                                            <span class="pix_edit_text"><strong>{{ $pagina->sec1_titulo_video }}</strong></span>
                                        </h3>
                                        <p class="pix-black-gray pix-margin-bottom-30">
                                            <span class="pix_edit_text">
                                                {{ $pagina->sec1_subtitulo_video }}
                                            </span>
                                        </p>
                                        <div class="pix-padding-bottom-30">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                                    width="788.54" height="443" type="text/html"
                                                    src="{{ $pagina->sec1_url_video }}">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_thank_you" class="modal pix_popup" role="dialog" aria-hidden="true" style="display: none;"
        data-name="thank_you">
        <div class="modal-dialog modal-sm-2">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">×</a>
                </div>
                <div class="modal-body">
                    <div class="pix_section animating modal-section popup_section" style="display: block;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center col-sm-6">
                                    <div class="pix-content text-center animating">
                                        <div class="pix-padding-bottom-20">
                                            <i class="pixicon-check3 big-icon pix-green"></i>
                                        </div>
                                        <h3 class="pix-black-gray-dark pix-no-margin-top">
                                            <span class="pix_edit_text"><strong>¡Muchos gracias!</strong></span>
                                        </h3>
                                        <p
                                            class="pix-black-gray-light pix-margin-bottom-30 big-text pix-lineheight-36">
                                            <span class="pix_edit_text">
                                                Recibimos su mensaje e intentaremos comunicarnos con usted lo antes
                                                posible.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_7" class="modal pix_popup" role="dialog" aria-hidden="true" style="display: none;"
        data-name="contact_popup">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">×</a>
                </div>
                <div class="modal-body">
                    <div class="pix_section animating modal-section popup_section" style="display: block;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center col-sm-6">
                                    <div class="pix-content text-center animating">
                                        <div class="pix-padding-bottom-20">
                                            <i class="pixicon-flag2 big-icon pix-orange"></i>
                                        </div>
                                        <h5 class="pix-black-gray-dark pix-no-margin-top">
                                            <span class="pix_edit_text"><strong>Informacion adicional</strong></span>
                                        </h5>
                                        <p class="pix-black-gray pix-margin-bottom-30">
                                            <span class="pix_edit_text">
                                                Enviar email por el producto
                                            </span>
                                        </p>
                                        <div class="pix-margin-bottom-30">
                                            <form class="pix-form-style pixfort-form">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Ingresa su nombre completo">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Ingrese su direccion de correo" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="4" placeholder="Ingrese su mensaje aqui..."></textarea>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-flat green-bg pix-white btn-lg btn-block"><strong>Enviar
                                                        Informacion</strong></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ asset('js/jquery-1.11.2.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/velocity.min.js') }}"></script>
    <script src="{{ asset('js/velocity.ui.min.js') }}"></script>
    <script src="{{ asset('js/appear.min.js" type="text/javascript') }}"></script>
    <script src="{{ asset('js/animations.min.js" type="text/javascript') }}"></script>
    <!--<script src="-{{ asset('js/scroll.js" type="text/javascript"><') }}/script>-->
                <script src=" {{ asset('js/pluginsf700.js?v=1.0.1') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js_demo/custom-demo0ff5.js?v=1.0.2') }}"></script>

</body>

<!-- Mirrored from pixfort.com/item/megapack/agency by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2022 18:26:55 GMT -->

</html>

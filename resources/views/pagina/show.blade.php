@extends('layouts.app')

@section('template_title')
    {{ $pagina->name ?? 'Show Pagina' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pagina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paginas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sec1 Logo:</strong>
                            {{ $pagina->sec1_logo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Bannerimagen:</strong>
                            {{ $pagina->sec1_bannerimagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Url Facebook:</strong>
                            {{ $pagina->sec1_url_facebook }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Url Twitter:</strong>
                            {{ $pagina->sec1_url_twitter }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Url Instagram:</strong>
                            {{ $pagina->sec1_url_instagram }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Titulo:</strong>
                            {{ $pagina->sec1_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Subtitulo:</strong>
                            {{ $pagina->sec1_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Titulo Video:</strong>
                            {{ $pagina->sec1_titulo_video }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Subtitulo Video:</strong>
                            {{ $pagina->sec1_subtitulo_video }}
                        </div>
                        <div class="form-group">
                            <strong>Sec1 Url Video:</strong>
                            {{ $pagina->sec1_url_video }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Titulo:</strong>
                            {{ $pagina->sec2_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Subtitulo:</strong>
                            {{ $pagina->sec2_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card1 Imagen:</strong>
                            {{ $pagina->sec2_card1_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card1 Titulo:</strong>
                            {{ $pagina->sec2_card1_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card1 Subtitulo:</strong>
                            {{ $pagina->sec2_card1_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card2 Imagen:</strong>
                            {{ $pagina->sec2_card2_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card2 Titulo:</strong>
                            {{ $pagina->sec2_card2_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card2 Subtitulo:</strong>
                            {{ $pagina->sec2_card2_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card3 Imagen:</strong>
                            {{ $pagina->sec2_card3_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card3 Titulo:</strong>
                            {{ $pagina->sec2_card3_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec2 Card3 Subtitulo:</strong>
                            {{ $pagina->sec2_card3_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Titulo:</strong>
                            {{ $pagina->sec3_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Subtitulo:</strong>
                            {{ $pagina->sec3_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card1 Titulo:</strong>
                            {{ $pagina->sec3_card1_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card1 Subtitulo:</strong>
                            {{ $pagina->sec3_card1_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card2 Titulo:</strong>
                            {{ $pagina->sec3_card2_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card2 Subtitulo:</strong>
                            {{ $pagina->sec3_card2_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card3 Titulo:</strong>
                            {{ $pagina->sec3_card3_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec3 Card3 Subtitulo:</strong>
                            {{ $pagina->sec3_card3_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Titulo:</strong>
                            {{ $pagina->sec4_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Subtitulo:</strong>
                            {{ $pagina->sec4_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card1 Titulo:</strong>
                            {{ $pagina->sec4_card1_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card1 Subtitulo:</strong>
                            {{ $pagina->sec4_card1_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card1 Imagen:</strong>
                            {{ $pagina->sec4_card1_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card2 Titulo:</strong>
                            {{ $pagina->sec4_card2_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card2 Subtitulo:</strong>
                            {{ $pagina->sec4_card2_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec4 Card2 Imagen:</strong>
                            {{ $pagina->sec4_card2_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Titulo:</strong>
                            {{ $pagina->sec5_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Subtitulo:</strong>
                            {{ $pagina->sec5_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card1 Imagen:</strong>
                            {{ $pagina->sec5_card1_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card1 Titulo:</strong>
                            {{ $pagina->sec5_card1_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card1 Subtitulo:</strong>
                            {{ $pagina->sec5_card1_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card2 Imagen:</strong>
                            {{ $pagina->sec5_card2_imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card2 Titulo:</strong>
                            {{ $pagina->sec5_card2_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec5 Card2 Subtitulo:</strong>
                            {{ $pagina->sec5_card2_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Titulo:</strong>
                            {{ $pagina->sec6_titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Subtitulo:</strong>
                            {{ $pagina->sec6_subtitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Url Mapa:</strong>
                            {{ $pagina->sec6_url_mapa }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Celular:</strong>
                            {{ $pagina->sec6_celular }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Email:</strong>
                            {{ $pagina->sec6_email }}
                        </div>
                        <div class="form-group">
                            <strong>Sec6 Direccion:</strong>
                            {{ $pagina->sec6_direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

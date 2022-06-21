<div class="box box-info padding-1">
    <div class="box-body">
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center"><h5>Seccion 1</h5></div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="sec1_logo">Logo</label>
                        <input
                            name="sec1_logo"
                            class="form-control"
                            type="file"
                            id="sec1_logo"
                        />
                        @if($errors->has('sec1_logo'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec1_logo') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec1_bannerimagen">banner imagen</label>
                        <input
                            name="sec1_bannerimagen"
                            class="form-control"
                            type="file"
                            id="sec1_bannerimagen"
                        />
                        @if($errors->has('sec1_bannerimagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec1_bannerimagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('url_facebook') }}
                        {{ Form::text('sec1_url_facebook', $pagina->sec1_url_facebook, ['class' => 'form-control' . ($errors->has('sec1_url_facebook') ? ' is-invalid' : ''), 'placeholder' => 'Url Facebook']) }}
                        {!! $errors->first('sec1_url_facebook', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('url_twitter') }}
                        {{ Form::text('sec1_url_twitter', $pagina->sec1_url_twitter, ['class' => 'form-control' . ($errors->has('sec1_url_twitter') ? ' is-invalid' : ''), 'placeholder' => 'Url Twitter']) }}
                        {!! $errors->first('sec1_url_twitter', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        {{ Form::label('url_instagram') }}
                        {{ Form::text('sec1_url_instagram', $pagina->sec1_url_instagram, ['class' => 'form-control' . ($errors->has('sec1_url_instagram') ? ' is-invalid' : ''), 'placeholder' => 'Url Instagram']) }}
                        {!! $errors->first('sec1_url_instagram', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec1_titulo', $pagina->sec1_titulo, ['class' => 'form-control' . ($errors->has('sec1_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec1_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec1_subtitulo', $pagina->sec1_subtitulo, ['class' => 'form-control' . ($errors->has('sec1_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec1_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('titulo_video') }}
                        {{ Form::text('sec1_titulo_video', $pagina->sec1_titulo_video, ['class' => 'form-control' . ($errors->has('sec1_titulo_video') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Video']) }}
                        {!! $errors->first('sec1_titulo_video', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('subtitulo_video') }}
                        {{ Form::text('sec1_subtitulo_video', $pagina->sec1_subtitulo_video, ['class' => 'form-control' . ($errors->has('sec1_subtitulo_video') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo Video']) }}
                        {!! $errors->first('sec1_subtitulo_video', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('url_video') }}
                        {{ Form::text('sec1_url_video', $pagina->sec1_url_video, ['class' => 'form-control' . ($errors->has('sec1_url_video') ? ' is-invalid' : ''), 'placeholder' => 'Url Video']) }}
                        {!! $errors->first('sec1_url_video', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center">
                    <h5>Seccion 2</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3 mb-3">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec2_titulo', $pagina->sec2_titulo, ['class' => 'form-control' . ($errors->has('sec2_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec2_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec2_subtitulo', $pagina->sec2_subtitulo, ['class' => 'form-control' . ($errors->has('sec2_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec2_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec2_card1_imagen">Card 1 imagen</label>
                        <input
                            name="sec2_card1_imagen"
                            class="form-control"
                            type="file"
                            id="sec2_card1_imagen"
                        />
                        @if($errors->has('sec2_card1_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec2_card1_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_titulo') }}
                        {{ Form::text('sec2_card1_titulo', $pagina->sec2_card1_titulo, ['class' => 'form-control' . ($errors->has('sec2_card1_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Titulo']) }}
                        {!! $errors->first('sec2_card1_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        {{ Form::label('card_1_subtitulo') }}
                        {{ Form::text('sec2_card1_subtitulo', $pagina->sec2_card1_subtitulo, ['class' => 'form-control' . ($errors->has('sec2_card1_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Subtitulo']) }}
                        {!! $errors->first('sec2_card1_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec2_card2_imagen">Card 2 imagen</label>
                        <input
                            name="sec2_card2_imagen"
                            class="form-control"
                            type="file"
                            id="sec2_card2_imagen"
                        />
                        @if($errors->has('sec2_card2_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec2_card2_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_titulo') }}
                        {{ Form::text('sec2_card2_titulo', $pagina->sec2_card2_titulo, ['class' => 'form-control' . ($errors->has('sec2_card2_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Titulo']) }}
                        {!! $errors->first('sec2_card2_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_subtitulo') }}
                        {{ Form::text('sec2_card2_subtitulo', $pagina->sec2_card2_subtitulo, ['class' => 'form-control' . ($errors->has('sec2_card2_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Subtitulo']) }}
                        {!! $errors->first('sec2_card2_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec2_card3_imagen">Card 3 imagen</label>
                        <input
                            name="sec2_card3_imagen"
                            class="form-control"
                            type="file"
                            id="sec2_card3_imagen"
                        />
                        @if($errors->has('sec2_card3_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec2_card3_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 offset-md-1">
                        {{ Form::label('card_3_titulo') }}
                        {{ Form::text('sec2_card3_titulo', $pagina->sec2_card3_titulo, ['class' => 'form-control' . ($errors->has('sec2_card3_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 3 Titulo']) }}
                        {!! $errors->first('sec2_card3_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3 offset-md-1">
                        {{ Form::label('card_3_subtitulo') }}
                        {{ Form::text('sec2_card3_subtitulo', $pagina->sec2_card3_subtitulo, ['class' => 'form-control' . ($errors->has('sec2_card3_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 3 Subtitulo']) }}
                        {!! $errors->first('sec2_card3_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center">
                    <h5>Seccion 3</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec3_titulo', $pagina->sec3_titulo, ['class' => 'form-control' . ($errors->has('sec3_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec3_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec3_subtitulo', $pagina->sec3_subtitulo, ['class' => 'form-control' . ($errors->has('sec3_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec3_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_titulo') }}
                        {{ Form::text('sec3_card1_titulo', $pagina->sec3_card1_titulo, ['class' => 'form-control' . ($errors->has('sec3_card1_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Titulo']) }}
                        {!! $errors->first('sec3_card1_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_subtitulo') }}
                        {{ Form::text('sec3_card1_subtitulo', $pagina->sec3_card1_subtitulo, ['class' => 'form-control' . ($errors->has('sec3_card1_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Subtitulo']) }}
                        {!! $errors->first('sec3_card1_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_titulo') }}
                        {{ Form::text('sec3_card2_titulo', $pagina->sec3_card2_titulo, ['class' => 'form-control' . ($errors->has('sec3_card2_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Titulo']) }}
                        {!! $errors->first('sec3_card2_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_subtitulo') }}
                        {{ Form::text('sec3_card2_subtitulo', $pagina->sec3_card2_subtitulo, ['class' => 'form-control' . ($errors->has('sec3_card2_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Subtitulo']) }}
                        {!! $errors->first('sec3_card2_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_3_titulo') }}
                        {{ Form::text('sec3_card3_titulo', $pagina->sec3_card3_titulo, ['class' => 'form-control' . ($errors->has('sec3_card3_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 3 Titulo']) }}
                        {!! $errors->first('sec3_card3_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_3_subtitulo') }}
                        {{ Form::text('sec3_card3_subtitulo', $pagina->sec3_card3_subtitulo, ['class' => 'form-control' . ($errors->has('sec3_card3_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 3 Subtitulo']) }}
                        {!! $errors->first('sec3_card3_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center">
                    <h5>Seccion 4</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec4_titulo', $pagina->sec4_titulo, ['class' => 'form-control' . ($errors->has('sec4_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec4_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec4_subtitulo', $pagina->sec4_subtitulo, ['class' => 'form-control' . ($errors->has('sec4_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec4_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_titulo') }}
                        {{ Form::text('sec4_card1_titulo', $pagina->sec4_card1_titulo, ['class' => 'form-control' . ($errors->has('sec4_card1_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Titulo']) }}
                        {!! $errors->first('sec4_card1_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_subtitulo') }}
                        {{ Form::text('sec4_card1_subtitulo', $pagina->sec4_card1_subtitulo, ['class' => 'form-control' . ($errors->has('sec4_card1_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Subtitulo']) }}
                        {!! $errors->first('sec4_card1_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec4_card1_imagen">Card 1 imagen</label>
                        <input
                            name="sec4_card1_imagen"
                            class="form-control"
                            type="file"
                            id="sec4_card1_imagen"
                        />
                        @if($errors->has('sec4_card1_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec4_card1_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_titulo') }}
                        {{ Form::text('sec4_card2_titulo', $pagina->sec4_card2_titulo, ['class' => 'form-control' . ($errors->has('sec4_card2_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Titulo']) }}
                        {!! $errors->first('sec4_card2_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_subtitulo') }}
                        {{ Form::text('sec4_card2_subtitulo', $pagina->sec4_card2_subtitulo, ['class' => 'form-control' . ($errors->has('sec4_card2_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Subtitulo']) }}
                        {!! $errors->first('sec4_card2_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec4_card2_imagen">Card 2 imagen</label>
                        <input
                            name="sec4_card2_imagen"
                            class="form-control"
                            type="file"
                            id="sec4_card2_imagen"
                        />
                        @if($errors->has('sec4_card2_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec4_card2_imagen') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center">
                    <h5>Seccion 5</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec5_titulo', $pagina->sec5_titulo, ['class' => 'form-control' . ($errors->has('sec5_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec5_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec5_subtitulo', $pagina->sec5_subtitulo, ['class' => 'form-control' . ($errors->has('sec5_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec5_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec5_card1_imagen">Card 1 imagen</label>
                        <input
                            name="sec5_card1_imagen"
                            class="form-control"
                            type="file"
                            id="sec5_card1_imagen"
                        />
                        @if($errors->has('sec5_card1_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec5_card1_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_titulo') }}
                        {{ Form::text('sec5_card1_titulo', $pagina->sec5_card1_titulo, ['class' => 'form-control' . ($errors->has('sec5_card1_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Titulo']) }}
                        {!! $errors->first('sec5_card1_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_1_subtitulo') }}
                        {{ Form::text('sec5_card1_subtitulo', $pagina->sec5_card1_subtitulo, ['class' => 'form-control' . ($errors->has('sec5_card1_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 1 Subtitulo']) }}
                        {!! $errors->first('sec5_card1_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sec5_card2_imagen">Card 2 imagen</label>
                        <input
                            name="sec5_card2_imagen"
                            class="form-control"
                            type="file"
                            id="sec5_card2_imagen"
                        />
                        @if($errors->has('sec5_card2_imagen'))
                        <div class="badge bg-danger text-wrap">
                            {{ $errors->first('sec5_card2_imagen') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_titulo') }}
                        {{ Form::text('sec5_card2_titulo', $pagina->sec5_card2_titulo, ['class' => 'form-control' . ($errors->has('sec5_card2_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Titulo']) }}
                        {!! $errors->first('sec5_card2_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-3">
                        {{ Form::label('card_2_subtitulo') }}
                        {{ Form::text('sec5_card2_subtitulo', $pagina->sec5_card2_subtitulo, ['class' => 'form-control' . ($errors->has('sec5_card2_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Card 2 Subtitulo']) }}
                        {!! $errors->first('sec5_card2_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2196f3; color: white" class="card mb-3">
            <div style="background-color: #1465bb" class="card-header">
                <div class="text-center">
                    <h5>Seccion 6</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        {{ Form::label('titulo') }}
                        {{ Form::text('sec6_titulo', $pagina->sec6_titulo, ['class' => 'form-control' . ($errors->has('sec6_titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('sec6_titulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('subtitulo') }}
                        {{ Form::text('sec6_subtitulo', $pagina->sec6_subtitulo, ['class' => 'form-control' . ($errors->has('sec6_subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
                        {!! $errors->first('sec6_subtitulo', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('url_mapa') }}
                        {{ Form::text('sec6_url_mapa', $pagina->sec6_url_mapa, ['class' => 'form-control' . ($errors->has('sec6_url_mapa') ? ' is-invalid' : ''), 'placeholder' => 'Url Mapa']) }}
                        {!! $errors->first('sec6_url_mapa', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('celular') }}
                        {{ Form::text('sec6_celular', $pagina->sec6_celular, ['class' => 'form-control' . ($errors->has('sec6_celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                        {!! $errors->first('sec6_celular', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('email') }}
                        {{ Form::text('sec6_email', $pagina->sec6_email, ['class' => 'form-control' . ($errors->has('sec6_email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                        {!! $errors->first('sec6_email', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                    <div class="form-group col-md-4">
                        {{ Form::label('direccion') }}
                        {{ Form::text('sec6_direccion', $pagina->sec6_direccion, ['class' => 'form-control' . ($errors->has('sec6_direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                        {!! $errors->first('sec6_direccion', '
                        <div class="badge bg-danger text-wrap">:message</div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

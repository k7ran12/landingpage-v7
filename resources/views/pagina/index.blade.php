@extends('layouts.app')

@section('template_title')
    Pagina
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pagina') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paginas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva pagina') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Sec1 Logo</th>
										<th>Sec1 Bannerimagen</th>
										<th>Sec1 Url Facebook</th>
										<th>Sec1 Url Twitter</th>
										<th>Sec1 Url Instagram</th>
										<th>Sec1 Titulo</th>
										<th>Sec1 Subtitulo</th>
										<th>Sec1 Titulo Video</th>
										<th>Sec1 Subtitulo Video</th>
										<th>Sec1 Url Video</th>
										<th>Sec2 Titulo</th>
										<th>Sec2 Subtitulo</th>
										<th>Sec2 Card1 Imagen</th>
										<th>Sec2 Card1 Titulo</th>
										<th>Sec2 Card1 Subtitulo</th>
										<th>Sec2 Card2 Imagen</th>
										<th>Sec2 Card2 Titulo</th>
										<th>Sec2 Card2 Subtitulo</th>
										<th>Sec2 Card3 Imagen</th>
										<th>Sec2 Card3 Titulo</th>
										<th>Sec2 Card3 Subtitulo</th>
										<th>Sec3 Titulo</th>
										<th>Sec3 Subtitulo</th>
										<th>Sec3 Card1 Titulo</th>
										<th>Sec3 Card1 Subtitulo</th>
										<th>Sec3 Card2 Titulo</th>
										<th>Sec3 Card2 Subtitulo</th>
										<th>Sec3 Card3 Titulo</th>
										<th>Sec3 Card3 Subtitulo</th>
										<th>Sec4 Titulo</th>
										<th>Sec4 Subtitulo</th>
										<th>Sec4 Card1 Titulo</th>
										<th>Sec4 Card1 Subtitulo</th>
										<th>Sec4 Card1 Imagen</th>
										<th>Sec4 Card2 Titulo</th>
										<th>Sec4 Card2 Subtitulo</th>
										<th>Sec4 Card2 Imagen</th>
										<th>Sec5 Titulo</th>
										<th>Sec5 Subtitulo</th>
										<th>Sec5 Card1 Imagen</th>
										<th>Sec5 Card1 Titulo</th>
										<th>Sec5 Card1 Subtitulo</th>
										<th>Sec5 Card2 Imagen</th>
										<th>Sec5 Card2 Titulo</th>
										<th>Sec5 Card2 Subtitulo</th>
										<th>Sec6 Titulo</th>
										<th>Sec6 Subtitulo</th>
										<th>Sec6 Url Mapa</th>
										<th>Sec6 Celular</th>
										<th>Sec6 Email</th>
										<th>Sec6 Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginas as $pagina)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pagina->sec1_logo }}</td>
											<td>{{ $pagina->sec1_bannerimagen }}</td>
											<td>{{ $pagina->sec1_url_facebook }}</td>
											<td>{{ $pagina->sec1_url_twitter }}</td>
											<td>{{ $pagina->sec1_url_instagram }}</td>
											<td>{{ $pagina->sec1_titulo }}</td>
											<td>{{ $pagina->sec1_subtitulo }}</td>
											<td>{{ $pagina->sec1_titulo_video }}</td>
											<td>{{ $pagina->sec1_subtitulo_video }}</td>
											<td>{{ $pagina->sec1_url_video }}</td>
											<td>{{ $pagina->sec2_titulo }}</td>
											<td>{{ $pagina->sec2_subtitulo }}</td>
											<td>{{ $pagina->sec2_card1_imagen }}</td>
											<td>{{ $pagina->sec2_card1_titulo }}</td>
											<td>{{ $pagina->sec2_card1_subtitulo }}</td>
											<td>{{ $pagina->sec2_card2_imagen }}</td>
											<td>{{ $pagina->sec2_card2_titulo }}</td>
											<td>{{ $pagina->sec2_card2_subtitulo }}</td>
											<td>{{ $pagina->sec2_card3_imagen }}</td>
											<td>{{ $pagina->sec2_card3_titulo }}</td>
											<td>{{ $pagina->sec2_card3_subtitulo }}</td>
											<td>{{ $pagina->sec3_titulo }}</td>
											<td>{{ $pagina->sec3_subtitulo }}</td>
											<td>{{ $pagina->sec3_card1_titulo }}</td>
											<td>{{ $pagina->sec3_card1_subtitulo }}</td>
											<td>{{ $pagina->sec3_card2_titulo }}</td>
											<td>{{ $pagina->sec3_card2_subtitulo }}</td>
											<td>{{ $pagina->sec3_card3_titulo }}</td>
											<td>{{ $pagina->sec3_card3_subtitulo }}</td>
											<td>{{ $pagina->sec4_titulo }}</td>
											<td>{{ $pagina->sec4_subtitulo }}</td>
											<td>{{ $pagina->sec4_card1_titulo }}</td>
											<td>{{ $pagina->sec4_card1_subtitulo }}</td>
											<td>{{ $pagina->sec4_card1_imagen }}</td>
											<td>{{ $pagina->sec4_card2_titulo }}</td>
											<td>{{ $pagina->sec4_card2_subtitulo }}</td>
											<td>{{ $pagina->sec4_card2_imagen }}</td>
											<td>{{ $pagina->sec5_titulo }}</td>
											<td>{{ $pagina->sec5_subtitulo }}</td>
											<td>{{ $pagina->sec5_card1_imagen }}</td>
											<td>{{ $pagina->sec5_card1_titulo }}</td>
											<td>{{ $pagina->sec5_card1_subtitulo }}</td>
											<td>{{ $pagina->sec5_card2_imagen }}</td>
											<td>{{ $pagina->sec5_card2_titulo }}</td>
											<td>{{ $pagina->sec5_card2_subtitulo }}</td>
											<td>{{ $pagina->sec6_titulo }}</td>
											<td>{{ $pagina->sec6_subtitulo }}</td>
											<td>{{ $pagina->sec6_url_mapa }}</td>
											<td>{{ $pagina->sec6_celular }}</td>
											<td>{{ $pagina->sec6_email }}</td>
											<td>{{ $pagina->sec6_direccion }}</td>

                                            <td>
                                                <form action="{{ route('paginas.destroy',$pagina->id) }}" method="POST">                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('paginas.edit',$pagina->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $paginas->links() !!}
            </div>
        </div>
    </div>
@endsection

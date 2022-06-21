<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pagina
 *
 * @property $id
 * @property $sec1_logo
 * @property $sec1_bannerimagen
 * @property $sec1_url_facebook
 * @property $sec1_url_twitter
 * @property $sec1_url_instagram
 * @property $sec1_titulo
 * @property $sec1_subtitulo
 * @property $sec1_titulo_video
 * @property $sec1_subtitulo_video
 * @property $sec1_url_video
 * @property $sec2_titulo
 * @property $sec2_subtitulo
 * @property $sec2_card1_imagen
 * @property $sec2_card1_titulo
 * @property $sec2_card1_subtitulo
 * @property $sec2_card2_imagen
 * @property $sec2_card2_titulo
 * @property $sec2_card2_subtitulo
 * @property $sec2_card3_imagen
 * @property $sec2_card3_titulo
 * @property $sec2_card3_subtitulo
 * @property $sec3_titulo
 * @property $sec3_subtitulo
 * @property $sec3_card1_titulo
 * @property $sec3_card1_subtitulo
 * @property $sec3_card2_titulo
 * @property $sec3_card2_subtitulo
 * @property $sec3_card3_titulo
 * @property $sec3_card3_subtitulo
 * @property $sec4_titulo
 * @property $sec4_subtitulo
 * @property $sec4_card1_titulo
 * @property $sec4_card1_subtitulo
 * @property $sec4_card1_imagen
 * @property $sec4_card2_titulo
 * @property $sec4_card2_subtitulo
 * @property $sec4_card2_imagen
 * @property $sec5_titulo
 * @property $sec5_subtitulo
 * @property $sec5_card1_imagen
 * @property $sec5_card1_titulo
 * @property $sec5_card1_subtitulo
 * @property $sec5_card2_imagen
 * @property $sec5_card2_titulo
 * @property $sec5_card2_subtitulo
 * @property $sec6_titulo
 * @property $sec6_subtitulo
 * @property $sec6_url_mapa
 * @property $sec6_celular
 * @property $sec6_email
 * @property $sec6_direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pagina extends Model
{
    
    static $rules = [
		'sec1_logo' => 'required',
		'sec1_bannerimagen' => 'required',
		'sec1_url_facebook' => 'required',
		'sec1_url_twitter' => 'required',
		'sec1_url_instagram' => 'required',
		'sec1_titulo' => 'required',
		'sec1_subtitulo' => 'required',
		'sec1_titulo_video' => 'required',
		'sec1_subtitulo_video' => 'required',
		'sec1_url_video' => 'required',
		'sec2_titulo' => 'required',
		'sec2_subtitulo' => 'required',
		'sec2_card1_imagen' => 'required',
		'sec2_card1_titulo' => 'required',
		'sec2_card1_subtitulo' => 'required',
		'sec2_card2_imagen' => 'required',
		'sec2_card2_titulo' => 'required',
		'sec2_card2_subtitulo' => 'required',
		'sec2_card3_imagen' => 'required',
		'sec2_card3_titulo' => 'required',
		'sec2_card3_subtitulo' => 'required',
		'sec3_titulo' => 'required',
		'sec3_subtitulo' => 'required',
		'sec3_card1_titulo' => 'required',
		'sec3_card1_subtitulo' => 'required',
		'sec3_card2_titulo' => 'required',
		'sec3_card2_subtitulo' => 'required',
		'sec3_card3_titulo' => 'required',
		'sec3_card3_subtitulo' => 'required',
		'sec4_titulo' => 'required',
		'sec4_subtitulo' => 'required',
		'sec4_card1_titulo' => 'required',
		'sec4_card1_subtitulo' => 'required',
		'sec4_card1_imagen' => 'required',
		'sec4_card2_titulo' => 'required',
		'sec4_card2_subtitulo' => 'required',
		'sec4_card2_imagen' => 'required',
		'sec5_titulo' => 'required',
		'sec5_subtitulo' => 'required',
		'sec5_card1_imagen' => 'required',
		'sec5_card1_titulo' => 'required',
		'sec5_card1_subtitulo' => 'required',
		'sec5_card2_imagen' => 'required',
		'sec5_card2_titulo' => 'required',
		'sec5_card2_subtitulo' => 'required',
		'sec6_titulo' => 'required',
		'sec6_subtitulo' => 'required',
		'sec6_url_mapa' => 'required',
		'sec6_celular' => 'required',
		'sec6_email' => 'required',
		'sec6_direccion' => 'required',
    ];

	static $rulesEdit = [
		'sec1_url_facebook' => 'required',
		'sec1_url_twitter' => 'required',
		'sec1_url_instagram' => 'required',
		'sec1_titulo' => 'required',
		'sec1_subtitulo' => 'required',
		'sec1_titulo_video' => 'required',
		'sec1_subtitulo_video' => 'required',
		'sec1_url_video' => 'required',
		'sec2_titulo' => 'required',
		'sec2_subtitulo' => 'required',
		'sec2_card1_titulo' => 'required',
		'sec2_card1_subtitulo' => 'required',
		'sec2_card2_titulo' => 'required',
		'sec2_card2_subtitulo' => 'required',
		'sec2_card3_titulo' => 'required',
		'sec2_card3_subtitulo' => 'required',
		'sec3_titulo' => 'required',
		'sec3_subtitulo' => 'required',
		'sec3_card1_titulo' => 'required',
		'sec3_card1_subtitulo' => 'required',
		'sec3_card2_titulo' => 'required',
		'sec3_card2_subtitulo' => 'required',
		'sec3_card3_titulo' => 'required',
		'sec3_card3_subtitulo' => 'required',
		'sec4_titulo' => 'required',
		'sec4_subtitulo' => 'required',
		'sec4_card1_titulo' => 'required',
		'sec4_card1_subtitulo' => 'required',
		'sec4_card2_titulo' => 'required',
		'sec4_card2_subtitulo' => 'required',
		'sec5_titulo' => 'required',
		'sec5_subtitulo' => 'required',
		'sec5_card1_titulo' => 'required',
		'sec5_card1_subtitulo' => 'required',
		'sec5_card2_titulo' => 'required',
		'sec5_card2_subtitulo' => 'required',
		'sec6_titulo' => 'required',
		'sec6_subtitulo' => 'required',
		'sec6_url_mapa' => 'required',
		'sec6_celular' => 'required',
		'sec6_email' => 'required',
		'sec6_direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sec1_logo','sec1_bannerimagen','sec1_url_facebook','sec1_url_twitter','sec1_url_instagram','sec1_titulo','sec1_subtitulo','sec1_titulo_video','sec1_subtitulo_video','sec1_url_video','sec2_titulo','sec2_subtitulo','sec2_card1_imagen','sec2_card1_titulo','sec2_card1_subtitulo','sec2_card2_imagen','sec2_card2_titulo','sec2_card2_subtitulo','sec2_card3_imagen','sec2_card3_titulo','sec2_card3_subtitulo','sec3_titulo','sec3_subtitulo','sec3_card1_titulo','sec3_card1_subtitulo','sec3_card2_titulo','sec3_card2_subtitulo','sec3_card3_titulo','sec3_card3_subtitulo','sec4_titulo','sec4_subtitulo','sec4_card1_titulo','sec4_card1_subtitulo','sec4_card1_imagen','sec4_card2_titulo','sec4_card2_subtitulo','sec4_card2_imagen','sec5_titulo','sec5_subtitulo','sec5_card1_imagen','sec5_card1_titulo','sec5_card1_subtitulo','sec5_card2_imagen','sec5_card2_titulo','sec5_card2_subtitulo','sec6_titulo','sec6_subtitulo','sec6_url_mapa','sec6_celular','sec6_email','sec6_direccion'];



}

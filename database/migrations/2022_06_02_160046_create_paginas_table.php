<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_logo');
            $table->string('sec1_bannerimagen');
            $table->string('sec1_url_facebook');
            $table->string('sec1_url_twitter');
            $table->string('sec1_url_instagram');
            $table->string('sec1_titulo');
            $table->string('sec1_subtitulo');
            $table->string('sec1_titulo_video');
            $table->string('sec1_subtitulo_video');
            $table->string('sec1_url_video');
            $table->string('sec2_titulo');
            $table->string('sec2_subtitulo');
            $table->string('sec2_card1_imagen');
            $table->string('sec2_card1_titulo');
            $table->string('sec2_card1_subtitulo');
            $table->string('sec2_card2_imagen');
            $table->string('sec2_card2_titulo');
            $table->string('sec2_card2_subtitulo');
            $table->string('sec2_card3_imagen');
            $table->string('sec2_card3_titulo');
            $table->string('sec2_card3_subtitulo');
            $table->string('sec3_titulo');
            $table->string('sec3_subtitulo');
            $table->string('sec3_card1_titulo');
            $table->string('sec3_card1_subtitulo');
            $table->string('sec3_card2_titulo');
            $table->string('sec3_card2_subtitulo');
            $table->string('sec3_card3_titulo');
            $table->string('sec3_card3_subtitulo');
            $table->string('sec4_titulo');
            $table->string('sec4_subtitulo');
            $table->string('sec4_card1_titulo');
            $table->string('sec4_card1_subtitulo');
            $table->string('sec4_card1_imagen');
            $table->string('sec4_card2_titulo');
            $table->string('sec4_card2_subtitulo');
            $table->string('sec4_card2_imagen');
            $table->string('sec5_titulo');
            $table->string('sec5_subtitulo');
            $table->string('sec5_card1_imagen');
            $table->string('sec5_card1_titulo');
            $table->string('sec5_card1_subtitulo');
            $table->string('sec5_card2_imagen');
            $table->string('sec5_card2_titulo');
            $table->string('sec5_card2_subtitulo');
            $table->string('sec6_titulo');
            $table->string('sec6_subtitulo');
            $table->text('sec6_url_mapa');
            $table->string('sec6_celular');
            $table->string('sec6_email');
            $table->string('sec6_direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}

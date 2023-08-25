<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('external_contents', function (Blueprint $table) {
            $table->engine= 'MyISAM';
            $table->id();
            $table->smallInteger('content_section')->comment('1:home,2:about,3:services,4:portfolio,5:blog,6:contact');
            $table->tinyInteger('content_type')->comment('1:Contenedor,2:contenido simple,3:video,4:image,5:audio,6:pdf,7:enlace externo');
            $table->integer('content_father')->nullable()->comment('id, solo aplica para contenido tipo contenedor en el que sera contenido padre');
            $table->integer('content_grandson')->nullable()->comment('id, solo aplica para contenido tipo contenedor simples en el que sera asignado el id del contenido abuelo');
            $table->smallInteger('content_columns')->default(12)->nullable()->comment('numero de columnas que tendra el contenido en un contenedor en contenido simple son 12');
            $table->tinyInteger('content_columns_sons')->nullable()->comment('numero de columnas que tendra el contenido hijo en un contenedor o contenido simple');
            $table->string('content_background_color')->nullable()->comment('color de fondo del contenido');
            $table->string('content_background_image')->nullable()->comment('ruta imagen de fondo del contenido');
            $table->tinyInteger('content_align')->default(0)->nullable()->comment('Alineación del contenido 0:izquierda,1:derecha,2:centro ');
            $table->boolean('content_show_title')->default(false)->nullable()->comment('mostrar titulo del contenido');
            $table->tinyInteger('content_title_align')->default(0)->nullable()->comment('Alineación del titulo del contenido 0:izquierda,1:derecha,2:centro ');
            $table->tinyInteger('content_title_size')->default(0)->nullable()->comment('Tamaño del titulo del contenido 0:normal,1:grande,2:muy grande');
            $table->string('content_title')->comment(' titulo del contenido');
            $table->text('content_intro')->nullable()->comment('intro del contenido');
            $table->longText('content_description')->nullable()->comment('descripcion del contenido');
            $table->string('content_url')->nullable()->comment('url del contenido');
            $table->tinyInteger('content_url_target')->default(0)->nullable()->comment('abrir url en nueva ventana 0:no,1:si');
            $table->tinyInteger('content_show_image')->default(0)->nullable()->comment('mostrar imagen del contenido');
            $table->text('content_image')->nullable()->comment('ruta imagen del contenido');
            $table->text('content_video')->nullable()->comment('ruta video del contenido');
            $table->integer('content_order')->default(0)->nullable()->comment('orden del contenido');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_contents');
    }
};

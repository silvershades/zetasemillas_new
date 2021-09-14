<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->text("descripcion")->nullable();
            $table->string("tipo")->nullable();;//GIRASOL - SORGO - MAIZ
            $table->string("img_path")->nullable();;
            $table->string("presentacion_semillas")->nullable();;
            $table->string("presentacion_kg_bolsa")->nullable();;
            //características generales
            $table->string("carac_gene_mercado")->nullable();;
            $table->string("carac_gene_tecnologia")->nullable();;
            $table->string("carac_gene_materia_grasa")->nullable();;
            $table->string("carac_gene_potencial")->nullable();;
            $table->string("carac_gene_uso")->nullable();;
            $table->string("carac_gene_estabilidad_rendimiento")->nullable();;
            //tecnologia disponible
            $table->string("tenco_herbicida_tolerancia")->nullable();;
            $table->string("tenco_control_insectos")->nullable();;
            //ciclo
            $table->string("ciclo_dias_floracion")->nullable();;
            $table->string("ciclo_madurez_relativa")->nullable();;
            //densidad de plantas a cosecha m2
            $table->string("densidad_general_ha")->nullable();;
            $table->string("densidad_cond_optimas")->nullable();;
            $table->string("densidad_cond_no_optimas")->nullable();;
            //características de plantas
            $table->string("carac_plantas_posicion_capitulo")->nullable();;
            $table->string("carac_plantas_altura")->nullable();;
            $table->string("carac_plantas_arquenio_color")->nullable();;
            $table->string("carac_plantas_tallo_tipo")->nullable();;
            $table->string("carac_plantas_panoja")->nullable();;
            $table->string("carac_plantas_grano_color")->nullable();;
            $table->string("carac_plantas_grano_textura")->nullable();;
            $table->string("carac_plantas_taninos")->nullable();;
            $table->string("carac_plantas_espiga")->nullable();;
            $table->string("carac_plantas_espiga_altura_insercion")->nullable();;
            $table->string("carac_plantas_prolificidad")->nullable();;
            //comportamiento a enfermedades
            $table->string("enfermedad_downy_mildew")->nullable();;
            $table->string("enfermedad_verticillium")->nullable();;
            $table->string("enfermedad_esclerotinia")->nullable();;
            $table->string("enfermedad_phomopsis")->nullable();;
            $table->string("enfermedad_vuelco_quebrado")->nullable();;
            $table->string("enfermedad_mar_del_rio_iv")->nullable();;
            $table->string("enfermedad_roya_comun")->nullable();;
            $table->string("enfermedad_sanidad_espiga")->nullable();;
            $table->string("enfermedad_fortaleza_cana")->nullable();;
            $table->string("enfermedad_stay_green")->nullable();;
            $table->string("enfermedad_fusarium")->nullable();;
            $table->string("enfermedad_panoja_hongos")->nullable();;
            $table->string("enfermedad_virus_mdmv")->nullable();;
            $table->string("enfermedad_pulgon_verde")->nullable();;
            $table->string("enfermedad_mosquita")->nullable();;
            //recomendacion geologica
            $table->string("recomendacion_pos")->nullable();;
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
        Schema::dropIfExists('products');
    }
}

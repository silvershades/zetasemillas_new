@extends('web.index')

@section('content')

    <article class="container" style="margin-top: 20px;margin-bottom: 100px">
        <a href="{{route("products.index")}}" class="btn btn-link"><i class="fas fa-undo"></i> Volver a productos</a>
        <h1 class="colorZeta fs-1 mb-3">{{$product->nombre}}<i class="far fa-registered"></i>
            @if($product->in_home) <i class="fas fa-star text-warning"></i> @endif
        </h1>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-4">
                <div class="imagen_producto">
                    @if($product->tipo == "GIRASOL")
                        <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla" style="max-height: 300px">
                    @elseif($product->tipo == "SORGO")
                        <img class="img-fluid" src="{{asset("img/sorgo.png")}}" alt="sorgo zeta semilla" style="max-height: 300px">
                    @elseif($product->tipo == "MAIZ")
                        <img class="img-fluid" src="{{asset("img/maices.png")}}" alt="maiz zeta semilla" style="max-height: 300px">
                    @endif

                    <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <h2  class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$product->descripcion}}</h2>
                <p class="fs-5 "><span class="colorZeta  fw-bold">Presentación </span> {{$product->presentacion_semillas}} - <span
                        class="text-secondary">{{$product->presentacion_kg_bolsa}}</span>
                </p>
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->carac_gene_mercado)
                            <tr>
                                <td>Mercado</td>
                                <td>{{$product->carac_gene_mercado}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_tecnologia)
                            <tr>
                                <td>Tecnología</td>
                                <td>{{$product->carac_gene_tecnologia}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_materia_grasa)
                            <tr>
                                <td>Materia grasa</td>
                                <td>{{$product->carac_gene_materia_grasa}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_potencial)
                            <tr>
                                <td>Potencial</td>
                                <td>{{$product->carac_gene_potencial}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_uso)
                            <tr>
                                <td>Uso</td>
                                <td>{{$product->carac_gene_uso}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_estabilidad_rendimiento)
                            <tr>
                                <td>Estabilidad de rendimiento</td>
                                <td>{{$product->carac_gene_estabilidad_rendimiento}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_tipo)
                            <tr>
                                <td>Tipo</td>
                                <td>{{$product->carac_gene_tipo}}</td>
                            </tr>
                        @endif
                        @if($product->carac_gene_ciclo)
                            <tr>
                                <td>Ciclo</td>
                                <td>{{$product->carac_gene_ciclo}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Tecnologías disponibles</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->tenco_herbicida_tolerancia)
                            <tr>
                                <td>Mercado</td>
                                <td>{{$product->tenco_herbicida_tolerancia}}</td>
                            </tr>
                        @endif
                        @if($product->tenco_control_insectos)
                            <tr>
                                <td>Tecnología</td>
                                <td>{{$product->tenco_control_insectos}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Ciclo</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->ciclo_dias_floracion)
                            <tr>
                                <td>Días de floración</td>
                                <td>{{$product->ciclo_dias_floracion}}</td>
                            </tr>
                        @endif
                        @if($product->ciclo_madurez_relativa)
                            <tr>
                                <td>Madurez relativa</td>
                                <td>{{$product->ciclo_madurez_relativa}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Densidad</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->densidad_general_ha)
                            <tr>
                                <td>General HA</td>
                                <td>{{$product->densidad_general_ha}}</td>
                            </tr>
                        @endif
                        @if($product->densidad_cond_optimas)
                            <tr>
                                <td>Condiciones óptimas</td>
                                <td>{{$product->densidad_cond_optimas}}</td>
                            </tr>
                        @endif  @if($product->densidad_cond_no_optimas)
                            <tr>
                                <td>Condiciones no óptimas</td>
                                <td>{{$product->densidad_cond_no_optimas}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Carácteristicas de la planta</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->carac_plantas_posicion_capitulo)
                            <tr>
                                <td>Posición capítulo</td>
                                <td>{{$product->carac_plantas_posicion_capitulo}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_altura)
                            <tr>
                                <td>Altura</td>
                                <td>{{$product->carac_plantas_altura}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_arquenio_color)
                            <tr>
                                <td>Color de aquenio</td>
                                <td>{{$product->carac_plantas_arquenio_color}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_tallo_tipo)
                            <tr>
                                <td>Tipo de tallo</td>
                                <td>{{$product->carac_plantas_tallo_tipo}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_panoja)
                            <tr>
                                <td>Panoja</td>
                                <td>{{$product->carac_plantas_panoja}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_grano_color)
                            <tr>
                                <td>Color de grano</td>
                                <td>{{$product->carac_plantas_grano_color}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_grano_textura)
                            <tr>
                                <td>Textura de grano</td>
                                <td>{{$product->carac_plantas_grano_textura}}</td>
                            </tr>
                        @endif
                        @if($product->carac_plantas_taninos)
                            <tr>
                                <td>Contenido de taninos</td>
                                <td>{{$product->carac_plantas_taninos}}</td>
                            </tr>
                        @endif  @if($product->carac_plantas_espiga)
                            <tr>
                                <td>Espiga</td>
                                <td>{{$product->carac_plantas_espiga}}</td>
                            </tr>
                        @endif  @if($product->carac_plantas_espiga_altura_insercion)
                            <tr>
                                <td>Altura de inserción de espiga</td>
                                <td>{{$product->carac_plantas_espiga_altura_insercion}}</td>
                            </tr>
                        @endif @if($product->carac_plantas_prolificidad)
                            <tr>
                                <td>Prolificidad</td>
                                <td>{{$product->carac_plantas_prolificidad}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Comportamiento a enfermedades</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->enfermedad_downy_mildew)
                            <tr>
                                <td>Downy Mildew</td>
                                <td>{{$product->enfermedad_downy_mildew}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_verticillium)
                            <tr>
                                <td>Verticillium</td>
                                <td>{{$product->enfermedad_verticillium}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_esclerotinia)
                            <tr>
                                <td>Esclerotinia</td>
                                <td>{{$product->enfermedad_esclerotinia}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_phomopsis)
                            <tr>
                                <td>Phomopsis</td>
                                <td>{{$product->enfermedad_phomopsis}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_vuelco_quebrado)
                            <tr>
                                <td>Vuelco / Quebrado</td>
                                <td>{{$product->enfermedad_vuelco_quebrado}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_mar_del_rio_iv)
                            <tr>
                                <td>Color de grano</td>
                                <td>{{$product->enfermedad_mar_del_rio_iv}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_roya_comun)
                            <tr>
                                <td>Roya</td>
                                <td>{{$product->enfermedad_roya_comun}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_sanidad_espiga)
                            <tr>
                                <td>Sanidad de Espiga</td>
                                <td>{{$product->enfermedad_sanidad_espiga}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_fortaleza_cana)
                            <tr>
                                <td>Fortaleza de Caña</td>
                                <td>{{$product->enfermedad_fortaleza_cana}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_stay_green)
                            <tr>
                                <td>Stay Green</td>
                                <td>{{$product->enfermedad_stay_green}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_fusarium)
                            <tr>
                                <td>Fusarium</td>
                                <td>{{$product->enfermedad_fusarium}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_panoja_hongos)
                            <tr>
                                <td>Hongos de Panoja</td>
                                <td>{{$product->enfermedad_panoja_hongos}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_virus_mdmv)
                            <tr>
                                <td>Virus / MDMV</td>
                                <td>{{$product->enfermedad_virus_mdmv}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_pulgon_verde)
                            <tr>
                                <td>Pulgón Verde</td>
                                <td>{{$product->enfermedad_pulgon_verde}}</td>
                            </tr>
                        @endif
                        @if($product->enfermedad_mosquita)
                            <tr>
                                <td>Mosquita</td>
                                <td>{{$product->enfermedad_mosquita}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="fs-5 m-0"><span class="colorZeta  fw-bold">Recomendación de posicionamiento</span></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        @if($product->recomendacion_pos)
                            <tr>
                                <td>Posicionamiento</td>
                                <td>{{$product->recomendacion_pos}}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection

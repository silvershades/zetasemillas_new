@extends('layouts.app')

@section('content')
    <h1>Editar producto de maiz</h1>
    <p class="text-secondary">Editar un nuevo producto de maiz</p>

    <div class="mt-3">
        <form method="post" action="{{route("admin.productos.update")}}">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="row ">
                <div class="col-sm-12">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> DATOS BASICOS</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$product->nombre}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo">
                            {{--                            <option value="GIRASOL">GIRASOL</option>--}}
                            <option value="MAIZ">MAIZ</option>
                            {{--                            <option value="SORGO">SORGO</option>--}}

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="present_semillas">Presentación en semillas</label>
                        <input type="text" class="form-control" id="present_semillas" name="presentacion_semillas" value="{{$product->presentacion_semillas}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="present_kg">Presentación en KG</label>
                        <input type="text" class="form-control" id="present_kg" name="presentacion_kg_bolsa" value="{{$product->presentacion_kg_bolsa}}">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="2" name="descripcion">{{$product->descripcion}}</textarea>
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> CARACTERISTICAS GENERALES</p>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="carac_gene_mercado">Mercado</label>--}}
                {{--                        <input type="text" class="form-control" id="carac_gene_mercado" name="carac_gene_mercado" placeholder="Alto Oleico / Linoleico / Confitero">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="carac_gene_tecnologia">Tecnología</label>--}}
                {{--                        <input type="text" class="form-control" id="carac_gene_tecnologia" name="carac_gene_tecnologia" placeholder="Clearfield / Convencional">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="carac_gene_materia_grasa">Materia grasa</label>--}}
                {{--                        <input type="text" class="form-control" id="carac_gene_materia_grasa" name="carac_gene_materia_grasa" placeholder="Muy alta / Alta / Baja">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="carac_gene_uso">Uso</label>--}}
                {{--                        <input type="text" class="form-control" id="carac_gene_uso" name="carac_gene_uso" placeholder="Silero / Granífero / Diferido / etc">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="carac_gene_potencial">Potencial</label>
                        <textarea class="form-control" id="carac_gene_potencial" rows="2" name="carac_gene_potencial">{{$product->carac_gene_potencial}}</textarea>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="carac_gene_rendimiento">Estabilidad de rendimiento</label>
                        <input type="text" class="form-control" id="carac_gene_rendimiento" name="carac_gene_estabilidad_rendimiento" value="{{$product->carac_gene_estabilidad_rendimiento}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="carac_gene_tipo">Tipo</label>
                        <input type="text" class="form-control" id="carac_gene_tipo" name="carac_gene_tipo" value="{{$product->carac_gene_tipo}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="carac_gene_ciclo">Ciclo</label>
                        <input type="text" class="form-control" id="carac_gene_ciclo" name="carac_gene_ciclo" value="{{$product->carac_gene_ciclo}}">
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> TECNOLOGIAS DISPONIBLES</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="tecno_herbicidas">Tolerancia a herbicidas</label>
                        <input type="text" class="form-control" id="tecno_herbicidas" name="tenco_herbicida_tolerancia" value="{{$product->tenco_herbicida_tolerancia}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="tecno_insectos">Control de insectos</label>
                        <input type="text" class="form-control" id="tecno_insectos" name="tenco_control_insectos" value="{{$product->tenco_control_insectos}}">
                    </div>
                </div>


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> CICLO</p>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="ciclo_floracion">Días de floración</label>--}}
                {{--                        <input type="text" class="form-control" id="ciclo_floracion" name="ciclo_floracion">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="ciclo_madurez">Madurez relativa</label>
                        <input type="text" class="form-control" id="ciclo_madurez" name="ciclo_madurez_relativa" value="{{$product->ciclo_madurez_relativa}}">
                    </div>
                </div>


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> DENSIDAD DE PLANTAS A
                        COSECHA / M2</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="densidad_general">General HA</label>
                        <input type="text" class="form-control" id="densidad_general" name="densidad_general_ha" value="{{$product->densidad_general_ha}}">
                    </div>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="densidad_cond_optima">Condiciones optimas</label>--}}
                {{--                        <input type="text" class="form-control" id="densidad_cond_optima" name="densidad_cond_optima" placeholder="5.5 - 6">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="densidad_cond_no_optima">Condiciones no optimas</label>--}}
                {{--                        <input type="text" class="form-control" id="densidad_cond_no_optima" name="densidad_cond_no_optima" placeholder="4.5 - 5">--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> CARACTERISTICAS DE LA PLANTA</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_altura">Altura</label>
                        <input type="text" class="form-control" id="planta_altura" name="carac_plantas_altura" value="{{$product->carac_plantas_altura}}">
                    </div>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="planta_color_arquenio">Color de arquenio</label>--}}
                {{--                        <input type="text" class="form-control" id="planta_color_arquenio" name="planta_color_arquenio">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="planta_tipo_tallo">Tipo de tallo</label>--}}
                {{--                        <input type="text" class="form-control" id="planta_tipo_tallo" name="planta_tipo_tallo" placeholder="Normal / Dulce">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="planta_panoja">Panoja</label>--}}
                {{--                        <input type="text" class="form-control" id="planta_panoja" name="planta_panoja" placeholder="Semi Laxa / Semi compacta / Compacta">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="planta_color_grano">Color de grano</label>--}}
                {{--                        <input type="text" class="form-control" id="planta_color_grano" name="planta_color_grano">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_textura_grano">Textura de grano</label>
                        <input type="text" class="form-control" id="planta_textura_grano" name="carac_plantas_grano_textura" value="{{$product->carac_plantas_grano_textura}}">
                    </div>
                </div>

                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="planta_taninos">Contenido de taninos</label>--}}
                {{--                        <input type="text" class="form-control" id="planta_taninos" name="planta_taninos" placeholder="Alto / Medio / Bajo">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_espiga">Espiga</label>
                        <input type="text" class="form-control" id="planta_espiga" name="carac_plantas_espiga" value="{{$product->carac_plantas_espiga}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_altura_ins_espiga">Altura de inserción de espiga</label>
                        <input type="text" class="form-control" id="planta_altura_ins_espiga" name="carac_plantas_espiga_altura_insercion" value="{{$product->carac_plantas_espiga_altura_insercion}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_prolificidad">Prolificidad</label>
                        <input type="text" class="form-control" id="planta_prolificidad" name="carac_plantas_prolificidad" value="{{$product->carac_plantas_prolificidad}}">
                    </div>
                </div>


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> COMPORTAMIENTO ANTE ENFERMEDADES</p>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_downy">Downy Mildew</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_downy" name="enfer_downy" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_verticilium">Verticilium</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_verticilium" name="enfer_verticilium" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_esclerotinia">Esclerotinia</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_esclerotinia" name="enfer_esclerotinia" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_phomopsis">Phomopsis</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_phomopsis" name="enfer_phomopsis" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_vuelco">Vuelco / quebrado</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_vuelco" name="enfer_vuelco" placeholder="Bueno / Muy bueno / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_mar_del_rio">Marl del Rio IV</label>
                        <input type="text" class="form-control" id="enfer_mar_del_rio" name="enfermedad_mar_del_rio_iv" value="{{$product->enfermedad_mar_del_rio_iv}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_roya">Roya</label>
                        <input type="text" class="form-control" id="enfer_roya" name="enfermedad_roya_comun" value="{{$product->enfermedad_roya_comun}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_sanidad_espiga">Sanidad espiga</label>
                        <input type="text" class="form-control" id="enfer_sanidad_espiga" name="enfermedad_sanidad_espiga" value="{{$product->enfermedad_sanidad_espiga}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_fortaleza_cana">Fortaleza de caña</label>
                        <input type="text" class="form-control" id="enfer_fortaleza_cana" name="enfermedad_fortaleza_cana" value="{{$product->enfermedad_fortaleza_cana}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_stay_green">Stay green</label>
                        <input type="text" class="form-control" id="enfer_stay_green" name="enfermedad_stay_green" value="{{$product->enfermedad_stay_green}}">
                    </div>
                </div>
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_fusarium">Fusarium</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_fusarium" name="enfer_fusarium" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_hongos_panoja">Hongos de panoja</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_hongos_panoja" name="enfer_hongos_panoja" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_virus_mdmv">Virus MDMV</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_virus_mdmv" name="enfer_virus_mdmv" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_pulgon_verde">Pulgón verde</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_pulgon_verde" name="enfer_pulgon_verde" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-sm-12 col-md-6">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label for="enfer_mosquita">Mosquita</label>--}}
                {{--                        <input type="text" class="form-control" id="enfer_mosquita" name="enfer_mosquita" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> RECOMENDACIONES</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="nombre">Posicionamiento</label>
                        <input type="text" class="form-control" id="nombre" name="recomendacion_pos" value="{{$product->recomendacion_pos}}">
                    </div>
                </div>

                <div class="col-sm-12 mt-3 text-center mb-5">
                    <button type="submit" class="btn btn-primary">GUARDAR PRODUCTO</button>
                </div>
            </div>


        </form>
    </div>
@endsection

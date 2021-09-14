@extends('layouts.app')

@section('content')
    <h1>Nuevo producto</h1>
    <p class="text-secondary">Crear un nuevo producto</p>

    <div class="mt-3">
        <form method="post" action="{{route("admin.productos.store")}}">
            @csrf
            <div class="row ">
                <div class="col-sm-12">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> DATOS BASICOS</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="ZT XXX 999">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo">
{{--                            <option value="GIRASOL">GIRASOL</option>--}}
{{--                            <option value="MAIZ">MAIZ</option>--}}
                            <option value="SORGO">SORGO</option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="present_semillas">Presentación en semillas</label>
                        <input type="text" class="form-control" id="present_semillas" name="present_semillas" placeholder="150.000 semillas">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="present_kg">Presentación en KG</label>
                        <input type="text" class="form-control" id="present_kg" name="present_kg" placeholder="25kg">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="2" name="descripcion"></textarea>
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
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="carac_gene_uso">Uso</label>
                        <input type="text" class="form-control" id="carac_gene_uso" name="carac_gene_uso" placeholder="Silero / Granífero / Diferido / etc">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="carac_gene_potencial">Potencial</label>
                        <textarea class="form-control" id="carac_gene_potencial" rows="2" name="carac_gene_potencial"></textarea>
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="carac_gene_rendimiento">Estabilidad de rendimiento</label>--}}
{{--                        <input type="text" class="form-control" id="carac_gene_rendimiento" name="carac_gene_rendimiento" placeholder="Alta / Media / Baja">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="carac_gene_tipo">Tipo</label>--}}
{{--                        <input type="text" class="form-control" id="carac_gene_tipo" name="carac_gene_tipo" placeholder="Simple">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="carac_gene_ciclo">Ciclo</label>--}}
{{--                        <input type="text" class="form-control" id="carac_gene_ciclo" name="carac_gene_ciclo" placeholder="Intermedio / Largo / Corto">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-12 mt-3">--}}
{{--                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> TECNOLOGIAS DISPONIBLES</p>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tecno_herbicidas">Tolerancia a herbicidas</label>--}}
{{--                        <input type="text" class="form-control" id="tecno_herbicidas" name="tecno_herbicidas" placeholder="Glifosato / Glufosinato de Amonio">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tecno_insectos">Control de insectos</label>--}}
{{--                        <input type="text" class="form-control" id="tecno_insectos" name="tecno_insectos" placeholder="Diatraea saccharalis">--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> CICLO</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="ciclo_floracion">Días de floración</label>
                        <input type="text" class="form-control" id="ciclo_floracion" name="ciclo_floracion">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="ciclo_madurez">Madurez relativa</label>--}}
{{--                        <input type="text" class="form-control" id="ciclo_madurez" name="ciclo_madurez">--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> DENSIDAD DE PLANTAS A
                        COSECHA / M2</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="densidad_general">General HA</label>
                        <input type="text" class="form-control" id="densidad_general" name="densidad_general" placeholder="74.000 - 999.000">
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
                        <input type="text" class="form-control" id="planta_altura" name="planta_altura" placeholder="120cm / Alta / Intermedia">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="planta_color_arquenio">Color de arquenio</label>--}}
{{--                        <input type="text" class="form-control" id="planta_color_arquenio" name="planta_color_arquenio">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_tipo_tallo">Tipo de tallo</label>
                        <input type="text" class="form-control" id="planta_tipo_tallo" name="planta_tipo_tallo" placeholder="Normal / Dulce">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_panoja">Panoja</label>
                        <input type="text" class="form-control" id="planta_panoja" name="planta_panoja" placeholder="Semi Laxa / Semi compacta / Compacta">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_color_grano">Color de grano</label>
                        <input type="text" class="form-control" id="planta_color_grano" name="planta_color_grano">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="planta_textura_grano">Textura de grano</label>--}}
{{--                        <input type="text" class="form-control" id="planta_textura_grano" name="planta_textura_grano" placeholder="Semidentado Amarillo">--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="planta_taninos">Contenido de taninos</label>
                        <input type="text" class="form-control" id="planta_taninos" name="planta_taninos" placeholder="Alto / Medio / Bajo">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="planta_espiga">Espiga</label>--}}
{{--                        <input type="text" class="form-control" id="planta_espiga" name="planta_espiga" placeholder="18 Hileras">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="planta_altura_ins_espiga">Altura de inserción de espiga</label>--}}
{{--                        <input type="text" class="form-control" id="planta_altura_ins_espiga" name="planta_altura_ins_espiga" placeholder="Alta / Media / Baja">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="planta_prolificidad">Prolificidad</label>--}}
{{--                        <input type="text" class="form-control" id="planta_prolificidad" name="planta_prolificidad" placeholder="Altas en densidades Medias y Bajas">--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> COMPORTAMIENTO ANTE ENFERMEDADES</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_downy">Downy Mildew</label>
                        <input type="text" class="form-control" id="enfer_downy" name="enfer_downy" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
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
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_vuelco">Vuelco / quebrado</label>
                        <input type="text" class="form-control" id="enfer_vuelco" name="enfer_vuelco" placeholder="Bueno / Muy bueno / Excelente ">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="enfer_mar_del_rio">Marl del Rio IV</label>--}}
{{--                        <input type="text" class="form-control" id="enfer_mar_del_rio" name="enfer_mar_del_rio" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_roya">Roya</label>
                        <input type="text" class="form-control" id="enfer_roya" name="enfer_roya" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="enfer_sanidad_espiga">Sanidad espiga</label>--}}
{{--                        <input type="text" class="form-control" id="enfer_sanidad_espiga" name="enfer_sanidad_espiga" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="enfer_fortaleza_cana">Fortaleza de caña</label>--}}
{{--                        <input type="text" class="form-control" id="enfer_fortaleza_cana" name="enfer_fortaleza_cana" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="enfer_stay_green">Stay green</label>--}}
{{--                        <input type="text" class="form-control" id="enfer_stay_green" name="enfer_stay_green" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_fusarium">Fusarium</label>
                        <input type="text" class="form-control" id="enfer_fusarium" name="enfer_fusarium" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_hongos_panoja">Hongos de panoja</label>
                        <input type="text" class="form-control" id="enfer_hongos_panoja" name="enfer_hongos_panoja" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_virus_mdmv">Virus MDMV</label>
                        <input type="text" class="form-control" id="enfer_virus_mdmv" name="enfer_virus_mdmv" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_pulgon_verde">Pulgón verde</label>
                        <input type="text" class="form-control" id="enfer_pulgon_verde" name="enfer_pulgon_verde" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="enfer_mosquita">Mosquita</label>
                        <input type="text" class="form-control" id="enfer_mosquita" name="enfer_mosquita" placeholder="Mod. Tolerante / Tolerante / Resistente / Excelente ">
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <p class="fs-5 colorZeta"><i class="fas fa-angle-right"></i> RECOMENDACIONES</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="nombre">Posicionamiento</label>
                        <input type="text" class="form-control" id="nombre" name="recom_posicionamiento" placeholder="Excelente adaptación a la
Zona Templada y en especial
a la Zona Núcleo">
                    </div>
                </div>

                <div class="col-sm-12 mt-3 text-center mb-5">
                    <button type="submit" class="btn btn-primary">GUARDAR PRODUCTO</button>
                </div>
            </div>


        </form>
    </div>
@endsection

@extends('web.index')

@section('content')

    <div class="container" style="margin-top: 20px">
        <a href="{{route("products.index")}}" class="btn btn-link"><i class="fas fa-undo"></i> Volver a productos</a>
        <h1 class="colorZeta fs-1 mb-3">Cuadro comparativo - maiz</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm showcase">
                        <thead>
                        <tr>
                            <th></th>
                            @foreach($productos as $p)
                                <th class="text-center colorZeta">{{$p->nombre}} @if($p->in_home) <i class="fas fa-star text-warning"></i> @endif</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">TECNOLOGÍA DISPONIBLE</td>
                        </tr>
                        <tr>
                            <td>Tolerancia a Herbicidas</td>
                            @foreach($productos as $p)
                                <td>{{$p->tenco_herbicida_tolerancia}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Control de Insectos</td>
                            @foreach($productos as $p)
                                <td>{{$p->tenco_control_insectos}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CARACTERÍSTICAS</td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_tipo}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Potencial</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_potencial}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Estabilidad de Rendimiento</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_estabilidad_rendimiento}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CICLO</td>
                        </tr>
                        <tr>
                            <td>Ciclo</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_ciclo}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Madurez Relativa</td>
                            @foreach($productos as $p)
                                <td>{{$p->ciclo_madurez_relativa}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Densidad de Siembra
                                (sem/HA)</td>
                            @foreach($productos as $p)
                                <td>{{$p->densidad_general_ha}}</td>
                            @endforeach
                        </tr>

                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CARACTERÍSTICAS DE PLANTAS</td>
                        </tr>
                        <tr>
                            <td>Textura de Grano</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_grano_textura}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Espiga</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_espiga}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Prolificidado</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_prolificidad}}</td>
                            @endforeach
                        </tr> <tr>
                            <td>Altura de Planta (cm)</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_altura}}</td>
                            @endforeach
                        </tr> <tr>
                            <td>Altura de Inserción de Espiga</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_espiga_altura_insercion}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">COMPORTAMIENTO A ENFERMEDADES</td>
                        </tr>
                        <tr>
                            <td>Mal del Rio IV</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_mar_del_rio_iv}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Roya Común</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_roya_comun}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Sanidad de Espiga</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_sanidad_espiga}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Fortaleza de Caña</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_fortaleza_cana}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Stay Green</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_stay_green}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">RECOMENDACIÓN DE POSICIONAMIENTO</td>
                        </tr>
                        <tr>
                            <td>Posicionamiento</td>
                            @foreach($productos as $p)
                                <td>{{$p->recomendacion_pos}}</td>
                            @endforeach
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

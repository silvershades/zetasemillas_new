@extends('web.index')

@section('content')

    <div class="container" style="margin-top: 20px">
        <a href="{{route("products.index")}}" class="btn btn-link"><i class="fas fa-undo"></i> Volver a productos</a>
        <h1 class="colorZeta fs-1 mb-3">Cuadro comparativo - girasol</h1>
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
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CARACTERÍSTICAS</td>
                        </tr>
                        <tr>
                            <td>Mercado</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_mercado}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Tecnología</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_tecnologia}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Materia grasa</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_materia_grasa}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Potencial</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_potencial}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CICLO</td>
                        </tr>
                        <tr>
                            <td>Días de Floración</td>
                            @foreach($productos as $p)
                                <td>{{$p->ciclo_dias_floracion}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Madurez Relativa</td>
                            @foreach($productos as $p)
                                <td>{{$p->ciclo_madurez_relativa}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">DENSIDAD DE PLANTAS A COSECHA / M2</td>
                        </tr>
                        <tr>
                            <td>Condiciones Óptimas</td>
                            @foreach($productos as $p)
                                <td>{{$p->densidad_cond_optimas}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Condiciones no Óptimas</td>
                            @foreach($productos as $p)
                                <td>{{$p->densidad_cond_no_optimas}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CARACTERÍSTICAS DE PLANTAS</td>
                        </tr>
                        <tr>
                            <td>Posición de Capítulo</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_posicion_capitulo}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Altura de Planta</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_altura}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Color de Aquenio</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_arquenio_color}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">COMPORTAMIENTO A ENFERMEDADES</td>
                        </tr>
                        <tr>
                            <td>Downy Mildew</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_downy_mildew}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Verticillium</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_verticillium}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Esclerotinia</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_esclerotinia}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Phomopsis</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_phomopsis}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Vuelco / Quebrado</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_vuelco_quebrado}}</td>
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

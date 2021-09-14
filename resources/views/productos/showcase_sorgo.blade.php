@extends('web.index')

@section('content')

    <div class="container" style="margin-top: 20px">
        <a href="{{route("products.index")}}" class="btn btn-link"><i class="fas fa-undo"></i> Volver a productos</a>
        <h1 class="colorZeta fs-1 mb-3">Cuadro comparativo - sorgo</h1>
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
                            <td>Uso</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_gene_uso}}</td>
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
                            <td>Densidad de plantas a
                                cosecha / HA
                            </td>
                            @foreach($productos as $p)
                                <td>{{$p->densidad_general_ha}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">CARACTERÍSTICAS DE PLANTAS</td>
                        </tr>
                        <tr>
                            <td>Tipo de Tallo</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_tallo_tipo}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Panoja</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_panoja}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Color de Grano</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_grano_color}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Contenido de Taninos</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_taninos}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Altura de Planta (cm)</td>
                            @foreach($productos as $p)
                                <td>{{$p->carac_plantas_altura}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="{{$p->count()}}" class="colorZeta fw-bold text-left">COMPORTAMIENTO A ENFERMEDADES</td>
                        </tr>
                        <tr>
                            <td>Roya</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_roya_comun}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Fusarium</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_fusarium}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Hongos de Panoja</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_panoja_hongos}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Downy Mildew</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_downy_mildew}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Virus / MDMV</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_virus_mdmv}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Pulgón Verde</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_pulgon_verde}}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td>Mosquita</td>
                            @foreach($productos as $p)
                                <td>{{$p->enfermedad_mosquita}}</td>
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

@extends('web.index')

@section('content')

    <section class="container" style="margin-top: 20px">
        <h1 class="colorZeta fs-1 mb-0">Productos Zeta Semillas <i class="far fa-registered"></i></h1>
        <p class="fs-5 text-secondary mb-5">Híbridos de girasol, maices y sorgos de la máxima calidad Argentina.</p>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <nav id="navegacion_prods" class="  navbar-light p-0">
                    <nav class="nav flex-column  justify-content-center p-0">
                        <nav class="nav flex-column  bg-light" style="margin-bottom: 20px !important;padding-top: 15px!important;padding-bottom: 15px!important">
                            <a class="btn btn-link" href="#gir"><i class="fas fa-seedling"></i> Semillas de girasol</a>
                            <a href="{{route("products.showcase",['tipo' => 1])}}" class="btn btn-link text-left"><i class="far fa-list-alt"></i> Ver cuadro comparativo</a>
                            @foreach($girasoles as $g)
                                <a class="btn btn-link nav-link" href="#{{"gg" . $g->id}}"><i class="fas fa-angle-right"></i> {{$g->nombre}}
                                    @if($g->in_home) <i class="fas fa-star text-warning"></i> @endif
                                </a>
                            @endforeach

                        </nav>
                        <nav class="nav flex-column  bg-light" style="margin-bottom: 20px !important;padding-top: 15px!important;padding-bottom: 15px!important">
                            <a class="btn btn-link" href="#sor"><i class="fas fa-seedling"></i> Semillas de sorgo</a>
                            <a href="{{route("products.showcase",['tipo' => 2])}}" class="btn btn-link text-left"><i class="far fa-list-alt"></i> Ver cuadro comparativo</a>
                            @foreach($sorgos as $s)
                                <a class="btn btn-link nav-link" href="#{{"ss" . $s->id}}"><i class="fas fa-angle-right"></i> {{$s->nombre}}
                                    @if($s->in_home) <i class="fas fa-star text-warning"></i> @endif</a>
                            @endforeach
                        </nav>
                        <nav class="nav flex-column  bg-light" style="margin-bottom: 20px !important;padding-top: 15px!important;padding-bottom: 15px!important">
                            <a class="btn btn-link" href="#mai"><i class="fas fa-seedling"></i> Semillas de maiz</a>
                            <a href="{{route("products.showcase",['tipo' => 3])}}" class="btn btn-link text-left"><i class="far fa-list-alt"></i> Ver cuadro comparativo</a>
                            @foreach($maices as $m)
                                <a class="btn btn-link nav-link" href="#{{"mm" . $m->id}}"><i class="fas fa-angle-right"></i> {{$m->nombre}}
                                    @if($m->in_home) <i class="fas fa-star text-warning"></i> @endif
                                </a>
                            @endforeach
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-sm-12 col-md-9 ">
                <div class="row " id="gir">
                    <div class="col-sm-12  mb-4 ">
                        <h2 class="colorZeta fs-2 "><i class="fas fa-seedling"></i> Semillas de girasol</h2>
                        <p class="m-0 d-inline-block">Cantidad de productos: {{$girasoles->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 1])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - girasol</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($girasoles as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="text-dark text-center rounded-pill pill_producto fw-bold">GIRASOL</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="text-dark  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 text-white">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 text-white">CONSULTAR</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>
{{--                    <div class="col-sm-12">--}}
{{--                        @foreach($girasoles as $g)--}}
{{--                            <div class="producto" id="{{"gg" . $g->id}}">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-4">--}}
{{--                                        <div class="imagen_producto">--}}
{{--                                            <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">--}}
{{--                                            <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-8">--}}
{{--                                        <h3 class="fs-3 m-0"><img class="mini_icon" src="{{asset("img/icon_girasol.png")}}" alt="icon girasol zeta semillas">{{$g->nombre}} @if($g->in_home)--}}
{{--                                                <i class="fas fa-star text-warning"></i> @endif</h3>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$g->descripcion}}</p>--}}
{{--                                        <p class="fs-5 "><span class="colorZeta  fw-bold">Presentación </span> {{$g->presentacion_semillas}} - <span--}}
{{--                                                class="text-secondary">{{$g->presentacion_kg_bolsa}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></p>--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-bordered table-sm ">--}}
{{--                                                <tr>--}}
{{--                                                    <td>Mercado</td>--}}
{{--                                                    <td>{{$g->carac_gene_mercado}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Tecnología</td>--}}
{{--                                                    <td>{{$g->carac_gene_tecnologia}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Materia grasa</td>--}}
{{--                                                    <td>{{$g->carac_gene_materia_grasa}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Potencial</td>--}}
{{--                                                    <td>{{$g->carac_gene_potencial}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href="{{route("products.show",['product' => $g->id])}}" class="btn-link btn"><i class="fas fa-search-plus"></i> ver ficha completa del producto</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
                <div class="row " id="sor">
                    <div class="col-sm-12  mb-4 ">
                        <h2 class="colorZeta fs-2 "><i class="fas fa-seedling"></i> Semillas de sorgo</h2>
                        <p class="m-0 d-inline-block">Cantidad de productos: {{$sorgos->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 2])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - sorgo</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($sorgos as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="text-dark text-center rounded-pill pill_producto fw-bold">SORGO</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="text-dark  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/sorgo.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 text-white">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 text-white">CONSULTAR</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>
{{--                    <div class="col-sm-12">--}}
{{--                        @foreach($girasoles as $g)--}}
{{--                            <div class="producto" id="{{"gg" . $g->id}}">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-4">--}}
{{--                                        <div class="imagen_producto">--}}
{{--                                            <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">--}}
{{--                                            <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-8">--}}
{{--                                        <h3 class="fs-3 m-0"><img class="mini_icon" src="{{asset("img/icon_girasol.png")}}" alt="icon girasol zeta semillas">{{$g->nombre}} @if($g->in_home)--}}
{{--                                                <i class="fas fa-star text-warning"></i> @endif</h3>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$g->descripcion}}</p>--}}
{{--                                        <p class="fs-5 "><span class="colorZeta  fw-bold">Presentación </span> {{$g->presentacion_semillas}} - <span--}}
{{--                                                class="text-secondary">{{$g->presentacion_kg_bolsa}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></p>--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-bordered table-sm ">--}}
{{--                                                <tr>--}}
{{--                                                    <td>Mercado</td>--}}
{{--                                                    <td>{{$g->carac_gene_mercado}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Tecnología</td>--}}
{{--                                                    <td>{{$g->carac_gene_tecnologia}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Materia grasa</td>--}}
{{--                                                    <td>{{$g->carac_gene_materia_grasa}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Potencial</td>--}}
{{--                                                    <td>{{$g->carac_gene_potencial}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href="{{route("products.show",['product' => $g->id])}}" class="btn-link btn"><i class="fas fa-search-plus"></i> ver ficha completa del producto</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
                <div class="row " id="mai">
                    <div class="col-sm-12  mb-4 ">
                        <h2 class="colorZeta fs-2 "><i class="fas fa-seedling"></i> Semillas de maiz</h2>
                        <p class="m-0 d-inline-block">Cantidad de productos: {{$maices->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 3])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - maiz</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($maices as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="text-dark text-center rounded-pill pill_producto fw-bold">MAIZ</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="text-dark  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 text-white">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 text-white">CONSULTAR</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>
{{--                    <div class="col-sm-12">--}}
{{--                        @foreach($girasoles as $g)--}}
{{--                            <div class="producto" id="{{"gg" . $g->id}}">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-4">--}}
{{--                                        <div class="imagen_producto">--}}
{{--                                            <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">--}}
{{--                                            <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-8">--}}
{{--                                        <h3 class="fs-3 m-0"><img class="mini_icon" src="{{asset("img/icon_girasol.png")}}" alt="icon girasol zeta semillas">{{$g->nombre}} @if($g->in_home)--}}
{{--                                                <i class="fas fa-star text-warning"></i> @endif</h3>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$g->descripcion}}</p>--}}
{{--                                        <p class="fs-5 "><span class="colorZeta  fw-bold">Presentación </span> {{$g->presentacion_semillas}} - <span--}}
{{--                                                class="text-secondary">{{$g->presentacion_kg_bolsa}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></p>--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-bordered table-sm ">--}}
{{--                                                <tr>--}}
{{--                                                    <td>Mercado</td>--}}
{{--                                                    <td>{{$g->carac_gene_mercado}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Tecnología</td>--}}
{{--                                                    <td>{{$g->carac_gene_tecnologia}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Materia grasa</td>--}}
{{--                                                    <td>{{$g->carac_gene_materia_grasa}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Potencial</td>--}}
{{--                                                    <td>{{$g->carac_gene_potencial}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href="{{route("products.show",['product' => $g->id])}}" class="btn-link btn"><i class="fas fa-search-plus"></i> ver ficha completa del producto</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
{{--                <div class="row borde_sorgo" id="sor">--}}
{{--                    <div class="col-sm-12 mb-4">--}}
{{--                        <h2 class="colorZeta fs-2"><i class="fas fa-seedling"></i> Semillas de sorgo</h2>--}}
{{--                        <p class="m-0 d-inline-block">Cantidad de productos: {{$sorgos->count()}}</p>--}}
{{--                        <a href="{{route("products.showcase",['tipo' => 2])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - sorgo</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12">--}}
{{--                        @foreach($sorgos as $s)--}}
{{--                            <div class="producto" id="{{"ss" . $s->id}}">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-4">--}}
{{--                                        <div class="imagen_producto">--}}
{{--                                            <img class="img-fluid" src="{{asset("img/sorgo.png")}}" alt="sorgo zeta semilla">--}}
{{--                                            <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-8">--}}
{{--                                        <h3 class="fs-3 m-0"><img class="mini_icon" src="{{asset("img/icon_sorgo.png")}}" alt="icon sorgo zeta semillas">{{$s->nombre}} @if($s->in_home) <i--}}
{{--                                                class="fas fa-star text-warning"></i> @endif</h3>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$s->descripcion}}</p>--}}
{{--                                        <p class="fs-5"><span class="colorZeta   fw-bold">Presentación </span> {{$s->presentacion_semillas}} - <span--}}
{{--                                                class="text-secondary">{{$s->presentacion_kg_bolsa}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></p>--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-bordered table-sm ">--}}
{{--                                                <tr>--}}
{{--                                                    <td>Uso</td>--}}
{{--                                                    <td>{{$s->carac_gene_uso}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Potencial</td>--}}
{{--                                                    <td>{{$s->carac_gene_potencial}}</td>--}}
{{--                                                </tr>--}}

{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href="{{route("products.show",['product' => $s->id])}}" class="btn-link btn"><i class="fas fa-search-plus"></i> ver ficha completa del producto</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row borde_maiz" id="mai">--}}
{{--                    <div class="col-sm-12  mb-4">--}}
{{--                        <h2 class="colorZeta fs-2"><i class="fas fa-seedling"></i> Semillas de maiz</h2>--}}
{{--                        <p class="m-0 d-inline-block">Cantidad de productos: {{$maices->count()}}</p>--}}
{{--                        <a href="{{route("products.showcase",['tipo' => 3])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - maiz</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12">--}}
{{--                        @foreach($maices as $m)--}}
{{--                            <div class="producto" id="{{"mm" . $m->id}}">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-4">--}}
{{--                                        <div class="imagen_producto">--}}
{{--                                            <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">--}}
{{--                                            <p class="fs-7 text-secondary">Imagen a modo ilustrativo</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 col-md-8">--}}
{{--                                        <h3 class="fs-3 m-0"><img class="mini_icon" src="{{asset("img/icon_maiz.png")}}" alt="icon maiz zeta semillas">{{$m->nombre}} @if($m->in_home) <i--}}
{{--                                                class="fas fa-star text-warning"></i> @endif</h3>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Descripción </span> {{$m->descripcion}}</p>--}}
{{--                                        <p class="fs-5"><span class="colorZeta  fw-bold">Presentación </span> {{$m->presentacion_semillas}} - <span--}}
{{--                                                class="text-secondary">{{$m->presentacion_kg_bolsa}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p class="fs-5 m-0"><span class="colorZeta  fw-bold">Características generales </span></p>--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-bordered table-sm">--}}
{{--                                                <tr>--}}
{{--                                                    <td class="w-25">Tipo</td>--}}
{{--                                                    <td>{{$m->carac_gene_tipo}}</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Estabilidad de Rendimiento</td>--}}
{{--                                                    <td>{{$m->carac_gene_estabilidad_rendimiento}}</td>--}}
{{--                                                </tr>--}}

{{--                                                <tr>--}}
{{--                                                    <td>Potencial</td>--}}
{{--                                                    <td>{{$m->carac_gene_potencial}}</td>--}}
{{--                                                </tr>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href="{{route("products.show",['product' => $m->id])}}" class="btn-link btn"><i class="fas fa-search-plus"></i> ver ficha completa del producto</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

@endsection

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
                <div class="divisorZeta mb-3 flex align-items-end justify-content-end px-3" style="background: url('{{asset('img/divisorzeta_girasol.png' )}}') no-repeat center">
                    <h2 class="text-white fw-bold m-0" >GIRASOLES</h2>
                </div>
                <div class="row " id="gir">
                    <div class="col-sm-12  mb-4 ">

                        <p class="m-0 d-inline-block">Cantidad de productos: {{$girasoles->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 1])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - girasol</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($girasoles as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="colorZeta text-center rounded-pill pill_producto fw-bold">GIRASOL</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="colorZeta  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/girasoles.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 colorZeta">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 colorZeta">CONSULTAR</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>
                <div class="row " id="sor">
                    <div class="col-sm-12  mb-4 ">
                        <div class="divisorZeta mb-3 flex align-items-end justify-content-end px-3" style="background: url('{{asset('img/divisorzeta_girasol.png' )}}') no-repeat center">
                            <h2 class="text-white fw-bold m-0" >SORGOS</h2>
                        </div>
                        <p class="m-0 d-inline-block">Cantidad de productos: {{$sorgos->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 2])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - sorgo</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($sorgos as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="colorZeta text-center rounded-pill pill_producto fw-bold">SORGO</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="colorZeta  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/sorgo.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 colorZeta">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 colorZeta">CONSULTAR</a>
                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>
                <div class="row " id="mai">
                    <div class="col-sm-12  mb-4 ">
                        <div class="divisorZeta mb-3 flex align-items-end justify-content-end px-3" style="background: url('{{asset('img/divisorzeta_girasol.png' )}}') no-repeat center">
                            <h2 class="text-white fw-bold m-0" >MAICES</h2>
                        </div>
                        <p class="m-0 d-inline-block">Cantidad de productos: {{$maices->count()}}</p>
                        <a href="{{route("products.showcase",['tipo' => 3])}}" class="btn btn-link"><i class="far fa-list-alt"></i> Ver cuadro comparativo - maiz</a>
                    </div>
                    <div class="col-sm-12 d-flex flex-wrap">
                        @foreach($maices as $g)
                            <div class="card_producto bg-warning rounded-1 shadow-sm">
                                <div class="w-100 card_textura_girasol">

                                    <div class="w-100">
                                        <p class="colorZeta text-center rounded-pill pill_producto fw-bold">MAIZ</p>
                                    </div>
                                    <div class="w-100 bg-white">
                                        <p class="colorZeta  fs-3 text-center fw-bold  m-0">{{$g->nombre}} @if($g->in_home)
                                                <i class="fas fa-star text-warning"></i> @endif</p>
                                    </div>

                                    <div class="p-2 text-center">
                                        <img class="img-fluid" src="{{asset("img/maices.png")}}" alt="girasol zeta semilla">
                                    </div>
                                    <div class="w-100">
                                        <a href="{{route("products.show",['product' => $g->id])}}" class="m-0 colorZeta">VER FICHA TÉCNICA</a>
                                        <a href="{{route("index")."#contacto"}}" class="m-0 colorZeta">CONSULTAR</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

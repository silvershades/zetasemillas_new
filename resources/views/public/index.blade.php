@extends('web.index')

@section('content')
    <video autoplay muted loop id="myVideo">
        <source src="{{asset('img/video.mp4')}}" type="video/mp4">
    </video>
    <header class="">

        <div class="header_banner">
            <div>
                <h1 class="mb-0 text-white text-center ">{!! $textos->texto_1!!}</h1>
            </div>
        </div>
    </header>


    <section id="girasol" class="container-fluid bg-white">
        <div class="container introd">
            <h2 class="text-white fs-1 mb-3">Nuestros híbridos</h2>
        </div>
        <div class="container ">
            <div class="d-flex justify-content-center align-items-center flex-wrap linksaproductos">
                <a href="{{route("products.index")}}" class="text-dark bg-white p-2 m-2 shadow-sm" style="max-width: 350px;border-radius: 2px">
                    <img src="{{asset("img/girasoles.png")}}" alt="imagen semilla zeta semillas" class="img-fluid">
                    <p class="text-center">GIRASOL</p>
                </a>
                <a href="{{route("products.index")}}" class="text-dark bg-white p-2 m-2 shadow-sm" style="max-width: 350px;border-radius: 2px">
                    <img src="{{asset("img/sorgo.png")}}" alt="imagen semilla zeta semillas" class="img-fluid">
                    <p class="text-center">SORGOS</p>
                </a>
                <a href="{{route("products.index")}}" class="text-dark bg-white p-2 m-2 shadow-sm" style="max-width: 350px;border-radius: 2px">
                    <img src="{{asset("img/maices.png")}}" alt="imagen semilla zeta semillas" class="img-fluid">
                    <p class="text-center">MAIZ</p>
                </a>
            </div>

        </div>
    </section>


    <section class="container-fluid" id="catalogo">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 500px">
                <div class="text-center">
                    <p class="fs-1 text-white text-center">Nuestro catálogo</p>
                    <a href="#" class="btn btn_verdezeta btn-primary text-center">Descargar</a>
                </div>
            </div>
        </div>
    </section>
    <article class="container-fluid contenido_animation " style="background-color: #eeeeee">
        <div class="container">

            <div id="sobre_nosotros" class="row" style="padding-bottom: 120px">
                <div class="col-sm-12">
                    <h2 class="colorZeta fs-1 mb-3">Sobre nosotros</h2>
                </div>

                <div class="col-sm-12 col-md-12 ">
                    {{--                    <p class="fs-5 fw-bold">¿Quiénes somos?</p>--}}
                    {{--                    <p class="fs-5">Zeta Semillas, fue fundada en 2005, por el Ing. Arg. Santiago Zapiola, con una amplia trayectoria en el--}}
                    {{--                        mercado de semillas de girasol, maíz y sorgo. Su principal expertis es la genética de girasol confitero.--}}
                    {{--                        Con más de 15 años de trayectoria, nos dedicamos a la producción de semillas de girasol, sorgo y maíz.--}}
                    {{--                        Contamos con genética propia y desarrollamos productor de calidad y a medida para la Argentina y los--}}
                    {{--                        principales mercados del mundo.</p>--}}
                    {{--                    <p class="fs-5 fw-bold"> Misión:</p>--}}
                    {{--                    <p class="fs-5">Cumplir con las necesidades del mercado, ofreciendo productos pensados y realizados a medida, con--}}
                    {{--                        atención personalizada para cada cliente, con un diferencial de calidad.--}}
                    {{--                        Proveer las necesidades del mercado, ofreciendo productos pensados y realizados a medida, con--}}
                    {{--                        atención personalizada para cada cliente, con un diferencial de calidad.</p>--}}
                    {{--                    <p class="fs-5 fw-bold"> Visión:</p>--}}
                    {{--                    <p class="fs-5"> Ser una empresa líder en la genética de semillas de girasol, maíz y sorgo.</p>--}}
                    {{--                    <p class="fs-5 fw-bold"> Propósito:</p>--}}
                    {{--                    <p class="fs-5">Brindar genética de calidad para llegar a tener los mejores resultados agronómicos.</p>--}}
                    {{--                    <p class="fs-5 fw-bold">Cultura:</p>--}}
                    {{--                    <p class="fs-5">Trabajamos continuamente en el mejoramiento de nuestra genética, aplicando innovación tecnológica,--}}
                    {{--                        buscando los más altos estándares de calidad para llevar la mejor variedad de girasol, sorgo y maíz a--}}
                    {{--                        nuestros clientes.--}}
                    {{--                        En constante movimiento, buscamos fortalecer y afianzar la comercialización y el crecimiento a nuevos--}}
                    {{--                        mercados.--}}
                    {{--                        La trayectoria, calidad y confianza, nos acerca continuamente al productor.</p>--}}
                    {!! $textos->texto_2!!}
                </div>


            </div>
        </div>
    </article>

    <section class="container-fluid" id="dondeestamos">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="min-height: 500px">
                <div class="text-center">
                    <p class="fs-1 text-white text-center">Donde estamos</p>
                    <p class="fs-1 mb-0 fw-bold text-white text-center">ARGENTINA</p>
                    <p class="fs-1 mb-0 fw-bold text-white text-center">BRASIL</p>
                    <p class="fs-1 mb-0 fw-bold text-white text-center">BOLIVIA</p>
                    <p class="fs-1 mb-0 fw-bold text-white text-center">URUGUAY</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class="container-fluid bg-white">
        <div class="">
            <div class="container ">
                <h2 class="colorZeta fs-1 mb-3 d-inline-block">Contactanos </h2>
                <div class="row ">


                    <div class="col-sm-12 col-md-6 ">
                        <p class="text-dark mt-3 fs-5">Dejanos tu consulta y tu información y te responderemos a la brevedad!</p>
                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre y apellido*</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Empresa</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Consulta*</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                            </div>
                            <small>* campos requeridos</small>
                            <div class="text-center p-5">
                                <button type="submit" class="btn btn-primary btn_verdezeta fs-6"> Enviar consulta</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center flex-column ">
                        <img src="{{asset("img/logo.svg")}}" alt="logo zetasemillas" class="img-fluid" style="max-width: 200px">

                        <p class="colorZeta fs-2"><i class="fas fa-map-marker-alt"></i></p>
                        <p class="fs-5 text-dark text-center">{!! $textos->texto_direccion!!}</p>
                        <p class="fs-5 text-dark text-center">Buenos Aires, Argentina</p>
                        <img id="banderita_Arg" src="{{asset("img/arg.jpg")}}" alt="argentina flag" class="img-fluid">
                        <br>
                        <p class="colorZeta fs-2"><i class="fas fa-phone"></i></p>
                        <p class="fs-5 text-dark text-center">{!! $textos->texto_telefonos!!}</p>
                        <p class="fs-5 text-dark text-center">{!! $textos->texto_telefonos_exterior!!}</p>
                        <p class="fs-5 text-dark text-center"><a href="{!! $textos->contacto_whatsapp!!}" class="btn btn-link fs-5"><i class="fab fa-whatsapp"></i> Hablemos por Whatsapp</a>
                        </p>
                        <br>
                        <p class="colorZeta fs-2"><i class="fas fa-envelope-open-text"></i></p>
                        <p class="fs-5 text-dark text-center">{!! $textos->texto_mail1!!}</p>
                        <p class="fs-5 text-dark text-center">{!! $textos->texto_mail2!!}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

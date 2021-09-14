<nav class="navbar-light navbar  bg-white  navbar_sticky shadow-sm navbarX">
    <div class="btn_inicio">
        <a class="btn dropbtn" href="{{route("index")}}"><img src="{{asset("img/logo.png")}}" alt="logo zeta semillas" style="height: 60px;width: auto"></a>
    </div>
        <div class="btn_menu"><button onclick="mostrarNav()" class="btn btn-outline-dark "><i class="fas fa-bars"></i></button></div>
    <ul class="navbarx_ul">
        <li class="link_menu cerrar_btn"><button onclick="mostrarNav()" class="fs-5 btn btn-outline-danger mt-4" ><i class="fas fa-times"></i> CERRAR</button></li>
        <li class="link_menu"><a class="fs-5" href="{{route("index")."#girasol"}}">Nuestros Híbridos</a></li>
        <li class="link_menu"><a class="fs-5" href="{{route("index")."#catalogo"}}">Catálogo</a></li>
        <li class="link_menu"><a class="fs-5" href="{{route("index")."#sobre_nosotros"}}">Nosotros</a></li>
        <li class="link_menu"><a class="fs-5" href="{{route("index")."#dondeestamos"}}">Mercados</a></li>
{{--        <li class="link_menu"><a class="fs-5" href="{{route("novedades.index")."#contacto"}}"><i class="far fa-newspaper"></i> Novedades</a></li>--}}
        <li class="link_menu"><a class="fs-5" href="{{route("index")."#contacto"}}">Contacto</a></li>
{{--        <li class="link_menu"><a class="fs-5" href="#clientes"><i class="fas fa-lock"></i> Clientes</a></li>--}}
{{--        <li class="align-top link_menu">--}}
{{--            <button class="dropbtn btn">ES <img src="{{asset("img/arg.jpg")}}" alt="argentina flag" style="width: 26px"></button>--}}
{{--        </li>--}}
    </ul>
</nav>

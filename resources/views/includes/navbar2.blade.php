<nav class="colorGd_bg  shadow-sm navbarX">
    <ul class="">
        <li><a class="fs-5" href="{{route("index")}}">Nosotros</a></li>
        <li><a class="fs-5" href="{{route("index")}}">Productos</a></li>
        <li><a class="fs-5" href="{{route("index")}}">Novedades</a></li>
        <li><a class="fs-5" href="{{route("index")."#contacto"}}">Contacto</a></li>
        <li><a class="fs-5" href="{{route("index")}}"><i class="fas fa-lock"></i> Clientes</a></li>
        <li>
            <button onclick="myFunction()" class="dropbtn btn">ES <img src="{{asset("img/arg.jpg")}}" alt="argentina flag" style="width: 26px"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">ES <img src="{{asset("img/arg.jpg")}}" alt="argentina flag - language"></a>
                <a href="#">EN <img src="{{asset("img/uk.jpg")}}" alt="uk flag - language"></a>
                <a href="#">PT <img src="{{asset("img/br.jpg")}}" alt="brasil flag - language"></a>
            </div>
        </li>

    </ul>
</nav>

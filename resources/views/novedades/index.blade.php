@extends('web.index')

@section('content')

    <div class="container" style="margin-top: 20px">
        <h1 class="colorZeta fs-1 mb-5"><i class="far fa-newspaper"></i> Novedades del rubro</h1>
        <div class="row">
            <div class="col-sm-12">
                @foreach($novedades as $n)
                    <article class="borde_azul row bg-light p-4 mb-5">
                        <div class="col-sm-12 col-md-8">
                            <h2 class="mb-0 fs-3 colorZeta">{{$n->titulo}}</h2>
                            <p class="text-muted fs-6">{{$n->created_at}}</p>
                            <p class="fs-5"><span class="fw-bold colorZeta">Publicado por: </span> {{$n->autor}}</p>
                            <p class="fs-5">{{$n->descripcion}}</p>
                            <p class="text-center mt-5"><a href="{{$n->link}}" class="btn btn-link fs-5" target="_blank"><i class="fas fa-link"></i> Ir a la nota</a></p>
                            <small class="text-secondary"><i class="fas fa-link"></i> {{$n->link}}</small>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <img src="{{asset($n->img_path)}}" alt="imagen novedad" class="img-fluid shadow-sm">
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <h1>Productos</h1>

    <div class="borde_girasol mb-4">
        <h2 class="fs3 colorZeta mb-1">Girasol</h2>
        <p class="fs-6 text-secondary mb-1">Listado de productos  <a href="{{route("admin.productos.create_girasol")}}" class="link-primary fs-6"> Agregar girasol</a></p>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-striped" style="width: auto">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th class="min"><i class="fas fa-star text-warning"></i></th>
                    <th class="min">Activo</th>
{{--                    <th>Descripción</th>--}}
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody>
                @foreach($girasoles as $p)
                    <tr>
                        <td class="min">{{$p->id}}</td>
                        <td class="min">{{$p->nombre}}

                        </td>
                        <td class="min">{{$p->tipo}}</td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.relevante",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->in_home) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.activar",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->active) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
{{--                        <td>{{$p->descripcion}}</td>--}}

                        <td class="min"><a href="{{route("admin.productos.edit_girasol",['product' => $p->id])}}" class="btn btn-link btn-sm"><i class="fas fa-search"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="borde_maiz mb-4">
        <h2 class="fs3 colorZeta mb-1">Maiz</h2>
        <p class="fs-6 text-secondary mb-1">Listado de productos  <a href="{{route("admin.productos.create_maiz")}}" class="link-primary fs-6"> Agregar maiz</a></p>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-striped"  style="width: auto">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th class="min"><i class="fas fa-star text-warning"></i></th>
                    <th class="min">Activo</th>
{{--                    <th>Descripción</th>--}}
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody>
                @foreach($maices as $p)
                    <tr>
                        <td class="min">{{$p->id}}</td>
                        <td class="min">{{$p->nombre}}

                        </td>
                        <td class="min">{{$p->tipo}}</td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.relevante",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->in_home) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.activar",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->active) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
{{--                        <td>{{$p->descripcion}}</td>--}}

                        <td class="min"><a href="{{route("admin.productos.edit_maiz",['product' => $p->id])}}" class="btn btn-link btn-sm"><i class="fas fa-search"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="borde_sorgo mb-4">
        <h2 class="fs3 colorZeta mb-1">Sorgo</h2>
        <p class="fs-6 text-secondary mb-1">Listado de productos  <a href="{{route("admin.productos.create_sorgo")}}" class="link-primary fs-6"> Agregar sorgo</a></p>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-striped"  style="width: auto">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th class="min"><i class="fas fa-star text-warning"></i></th>
                    <th class="min">Activo</th>
{{--                    <th>Descripción</th>--}}
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sorgos as $p)
                    <tr>
                        <td class="min">{{$p->id}}</td>
                        <td class="min">{{$p->nombre}}

                        </td>
                        <td class="min">{{$p->tipo}}</td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.relevante",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->in_home) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
                        <td class="min text-center">
                            <form action="{{route("admin.productos.activar",['product'=>$p->id])}}" method="post" class="form-check form-switch text-center" id="pinned_switch_form{{$p->id}}}">
                                @csrf
                                <input class="form-check-input" type="checkbox" @if($p->active) checked @endif id="pinned_switch{{$p->id}}" onchange="submitThis(this)">
                                <label class="form-check-label" for="pinned_switch{{$p->id}}"></label>
                            </form>
                        </td>
{{--                        <td>{{$p->descripcion}}</td>--}}

                        <td class="min"><a href="{{route("admin.productos.edit_sorgo",['product' => $p->id])}}" class="btn btn-link btn-sm"><i class="fas fa-search"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')

    <h1 class="mb-5">Textos y contácto</h1>
    <div class="row">
        <div class="col-sm-12 col-md-6">


            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_texto_1")}}"  class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto1" class="fs-4 colorZeta">Texto portada <span class="text-secondary fs-6">Admite HTML - Caracteres máximos recomendados: 30 </span></label>
                            <input type="text" class="form-control" id="texto1" name="texto_1" value="{!! $textos->texto_1!!}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <form  method="post" action="{{route("admin.textos.store_texto_2")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto2" class="fs-4 colorZeta">Texto sobre nosotros <span class="text-secondary fs-6">Admite HTML </span></label>
                            <textarea type="text" rows="15" class="form-control" id="texto2" name="texto_2" style="resize: none">{!!$textos->texto_2!!}</textarea>
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form method="post" action="{{route("admin.textos.store_texto_direccion")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto_direccion" class="fs-4 colorZeta">Texto dirección</label>
                            <input type="text" class="form-control" id="texto_direccion" name="texto_direccion" value="{{$textos->texto_direccion}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_texto_telefonos")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto_telefonos" class="fs-4 colorZeta">Texto telefonos</label>
                            <input type="text" class="form-control" id="texto_telefonos" name="texto_telefonos" value="{{$textos->texto_telefonos}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_texto_telefonos_exterior")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto_telefonos_exterior" class="fs-4 colorZeta">Texto telefono desde el exterior</label>
                            <input type="text" class="form-control" id="texto_telefonos_exterior" name="texto_telefonos_exterior" value="{{$textos->texto_telefonos_exterior}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12">
                   <form method="post"  action="{{route("admin.textos.store_texto_mail1")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto_mail1" class="fs-4 colorZeta">Texto mail contacto 1</label>
                            <input type="text" class="form-control" id="texto_mail1" name="texto_mail1" value="{{$textos->texto_mail1}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_texto_mail2")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="texto_mail2" class="fs-4 colorZeta">Texto mail contacto 2</label>
                            <input type="text" class="form-control" id="texto_mail2" name="texto_mail2" value="{{$textos->texto_mail2}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_contacto_whatsapp")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="contacto_whatsapp" class="fs-4 colorZeta">Contacto Whatsapp</label>
                            <input type="text" class="form-control" id="contacto_whatsapp" name="contacto_whatsapp" value="{{$textos->contacto_whatsapp}}">
                            <button class="btn btn-outline-primary w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                   <form  method="post" action="{{route("admin.textos.store_contacto_formulario")}}" class="borde_azul">
                       @csrf
                        <div class="form-group">
                            <label for="contacto_formulario" class="fs-4 colorZeta">Mail de contacto del formulario</label>
                            <input type="text" class="form-control" id="contacto_formulario" name="contacto_formulario" value="{{$textos->contacto_formulario}}">
                            <button class="btn btn-outline-primary w-100 w-100">ACTUALIZAR EN WEB</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

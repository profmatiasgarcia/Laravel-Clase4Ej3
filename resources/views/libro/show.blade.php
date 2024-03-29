@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos del Libro
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->nombre}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Creador:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->creador}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Copias:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->copias}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Precio:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->precio}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Nº de Edición:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->libro->edicion}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Publicación:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->libro->publicacion}}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Editorial:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$item->libro->editorial}}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('libros.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('alquileres.update', [$alquiler->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="fecha_alquiler" type="text" class="datepicker" name="fecha_alquiler" value="{{$alquiler->fecha_alquiler}}">
                                <label for="fecha_alquiler">Fecha de alquiler:</label>
                                @error('fecha_alquiler')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="fecha_devolucion" type="text" class="datepicker" name="fecha_devolucion" value="{{$alquiler->fecha_devolucion}}">
                                <label for="fecha_devolucion">Fecha de devolución:</label>
                                @error('fecha_devolucion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection

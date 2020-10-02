@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    @guest
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA TUS DATOS</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Por favor llena los campos requeridos y regístrate</p>
        </div>
    </div>
    @else
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">EDITA TUS DATOS <br/>DE PERFIL</label>
        </div>
    </div>
    @endguest
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            @guest
            <div id="register">
                <form id="frmRegistroUsuario" action="{{ route('register') }}" method="POST">
            @else
            <div id="register" style="height: 400px; padding-top: 20px;">
                <form id="frmEditarUsuario" action="/update/{{Auth::user()->id}}" method="POST">
                    @method('PUT')
            @endguest
                    @csrf
                    @guest
                        <input type="text" id="name" name="name" placeholder="Nombre y Apellido" maxlength="20"/>
                        <input type="text" id="cedula" name="cedula" placeholder="C.I./ Ruc" maxlength="10" onKeyPress="return soloNumeros(event)" />
                        <input type="email" id="email" name="email" placeholder="Correo electrónico" />
                        <input type="text" id="telefono" name="telefono" placeholder="Número telefónico (Opcional)" maxlength="10" onKeyPress="return soloNumeros(event)" />
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" placeholder="Confirmar contraseña" required
                            autocomplete="new-password">
                    @else
                        <input type="text" id="name" name="name" placeholder="Nombre y Apellido"
                            value="{{ Auth::user()->name }}" />
                        <input type="text" id="cedula" name="cedula" placeholder="C.I./ Ruc"
                            value="{{ Auth::user()->cedula }}" />
                        <input type="email" id="email" name="email" placeholder="Correo electrónico"
                            value="{{ Auth::user()->email }}" />
                        <input type="text" id="telefono" name="telefono" placeholder="Número telefónico (Opcional)"
                            value="{{ Auth::user()->telefono }}" />
                    @endguest
                    <div class="row">
                        <div class="col-md-6 pl-4">
                            <div class="input-group-append">
                                <select name="selectProvincia" id="selectProvincia"
                                    class="cbCiudad btn btn-outline-secondary">
                                    <option value="Provincia" {{ is_null($provincia) ? 'selected="selected"' : '' }} disabled hidden>Provincia</option>
                                    @foreach($provincias as $p)
                                    <option value="{{ $p['id_provincia'] }}" {{ !is_null($provincia) ? ($p['id_provincia'] == $provincia->id_provincia ? 'selected="selected"' : '') : '' }}>{{ $p['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-4" style="right: 65px;">
                            <div class="input-group-append">
                                <input type="hidden" name="id_ciudad" id="id_ciudad" value="" />
                                <select name="selectCanton" id="selectCanton"
                                    class="cbCiudad btn btn-outline-secondary">
                                    <option value="Ciudad" {{ is_null($canton) ? 'selected="selected"' : '' }} disabled hidden>Cantón</option>
                                    @if(!is_null($cantones))
                                    @foreach($cantones as $c)
                                    <option value="{{ $c['id_canton'] }}" {{ !is_null($canton) ? ($c['id_canton'] == $canton->id_canton ? 'selected="selected"' : '') : '' }}>{{ $c['name'] }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    @guest
                        <div class="row">
                            <div class="col-md-6 pl-4" style="left: 28px;">
                                <div class="input-group-append">
                                    <input class="fondoAzul" type="submit" onclick="" value="Confirmar" />
                                </div>
                            </div>
                            <div class="col-md-6 pl-4" style="right: 42px;bottom: 10px;">
                                <div class="input-group-append">
                                    <a id="" class="btnIni btnG" href="{{ route('login') }}">Si eres usuario, Inicia sesión</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <input style="width: 464px;" class="fondoAzul mt-4" type="submit" value="Confirmar" />
                    @endguest
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
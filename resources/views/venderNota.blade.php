@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA LOS SIGUIENTES DATOS<br>Y VENDE TU NOTA DE CRÉDITO</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register" class="sellNote px-4">
                <div class="container-fluid">
                    <form id="frmVenderNota" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" name="monto" placeholder="MONTO DE NOTA DE CRÉDITO" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" name="nombre" placeholder="NOMBRE DEL TITULAR" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" name="apellido" placeholder="APELLIDO DEL TITULAR" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row pb-4 h-100">
                                    <div class="col">
                                        <div class="calculatedValue w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <p class="label text-center">VALOR NETO<br>A RECIBIR</p>
                                            <p class="value text-center">$00.00</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="calculatedValue w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                                            <p class="label text-center">COMISIÓN</p>
                                            <p class="value text-center">$00.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row">
                            <div class="col buttonWrapper">
                                <button class="btn-form" type="submit">Continuar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA LOS SIGUIENTES DATOS <br />Y VENDE TU NOTA DE CRÉDITO</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div class="boxVN">
                <form action="{{}}" method="POST">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="MONTO NOTA DE CRÉDITO">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="NOMBRE DEL TITULAR">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="APELLIDO DEL TITULAR">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row mr-1">
                                        <div class="col-lg-6 col-md-6 col-sm-6 border pt-5 pb-5">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <em>VALOR NETO A RECIBIR</em>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-lg-12 text-center">
                                                    <h1>$00.00</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 border pt-5 pb-5">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <em>COMISION</em>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-lg-12 text-center">
                                                    <h1>$00.00</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-ld-center">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-12, col-sm-12 text-center">
                            <button class="btn btn-primary btn-block">Continuar</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- \resources\views\services\create-coordinates.blade.php --}}
@extends('layouts.app-map')

@section('title', '| Servicios')

@section('content')

    <div class="g-menu-overlay"></div>
    <div class="g-nav-overlay" data-offcanvas-close=""></div>
    <div class="g-offcanvas-toggle" data-offcanvas-toggle="" aria-controls="g-offcanvas" aria-expanded="false">
        <i class="fa fa-fw fa-bars"></i>
    </div{{----}}>


    <section id="g-container-4551" class="g-wrapper">
        <div class="g-container">
            <div class="divPrincipal">
                <div id="divSearch" class="divSearchAutocomplete">
                    <div class="form-search center" style="margin-top: 20px !important;">
                        <div style="width: 70% !important;">
                            <div class="panel-body">
                                <input type="text" name="searchTextField" id="searchTextField" class="form-control" placeholder="Buscar dirección">
                            </div>
                        </div>
                        <div style="width: 30% !important; text-align: right !important;">
                            <button class="button btn-primary" id="btnAgreagarPunto">Agregar punto</button>
                        </div>
                    </div>
                </div>

                <div class="divImgMarker">
                    <div class="divimg">
                        <img src="{{asset('images/alfiler-de-mapa.png')}}" id="imgMarkerDefault">
                    </div>
                </div>

                {{ Form::open(array('url' => 'services/create/charges', 'class' => 'form-validate form-horizontal well', 'id' => 'frmCotizaServicio')) }}
                {{ Form::hidden('distance', null, array('id' => 'distance')) }}
                {{ Form::hidden('time', null, array('id' => 'time')) }}
                {{ Form::hidden('coordinates', null, array('id' => 'coordinates')) }}
                {{ Form::close() }}

                <div class="pnlButtons">
                    <div class="form-button">
                        <div style="width: 49%; text-align: center;">
                            <button class="button btn-primary showButtons" id="btnLimpiar" style="z-index: 1 !important;">Limpiar</button>
                        </div>
                        <div style="width: 49%; text-align: center;">
                            <button class="button btn-primary showButtons" id="btnCotizar" style="z-index: 1 !important;">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="map"></div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/services-cliente.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_KEY')}}&callback=initMap&region=MX&libraries=places" async defer></script>
@endsection

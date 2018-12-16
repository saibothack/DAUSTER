{{-- \resources\views\kind_persons\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Mi Perfil')

@section('content')

    <div class="g-menu-overlay"></div>
    <div class="g-nav-overlay" data-offcanvas-close=""></div>
    <div class="g-offcanvas-toggle" data-offcanvas-toggle="" aria-controls="g-offcanvas" aria-expanded="false">
        <i class="fa fa-fw fa-bars"></i>
    </div{{----}}>
    <section id="g-top">
        <div class="g-container">
            <div class="g-grid">
                <div class="g-block size-100 nomarginall nopaddingall">
                    <div class="g-system-messages">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header id="g-header">
        <div class="g-container">
            <div class="g-grid">

                <div class="g-block size-100">
                    <div class="g-content">
                        <div class="moduletable ">
                            <div class="g-infolist g-1cols center g-layercontent noborder">
                                <div class="g-infolist-item ">
                                    <div class="g-infolist-item-text g-infolist-textstyle-header">
                                        <div class="g-infolist-item-title ">
                                            Mi Perfil
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>

    <section id="g-container-4551" class="g-wrapper">
        <div class="g-container">
            <div class="g-grid">

                <div class="g-block size-75">
                    <section id="g-mainbar">
                        <div class="g-grid">

                            <div class="g-block size-100">
                                <div class="g-content">
                                    <div class="platform-content row-fluid">
                                        <div class="span12">
                                            <div class="contact">
                                                <div class="contact-form">

                                                    @if(Session::has('flash_message'))
                                                        <div class="container">
                                                            <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="row">
                                                                <div class="col-md-10 col-md-offset-2">
                                                                    @include ('errors.list') {{-- Including error file --}}
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h3>Mi dirección</h3>
                                                                    <label>* Campos requeridos</label>
                                                                </div>
                                                            </div>

                                                            @IF(isset($address))
                                                                {{ Form::model($address, array('route' => array('address.update', $address->id), 'method' => 'PUT')) }}
                                                            @ELSE
                                                                {{ Form::open(array('url' => 'address')) }}
                                                            @ENDIF

                                                            <div class="form-group row">
                                                                {{Form::label('street', 'Calle *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-7">
                                                                    {{ Form::text('street', null, array('cla
                                                                    ss' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                                <div class="col-sm-1 text-left">
                                                                    <button class="btn btn-primary" type="button" id="btnLocation">
                                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('exterior', 'No. Exterior *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::text('exterior', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('interior', 'No. Interior', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::text('interior', null, array('class' => 'form-control')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('cp', 'C. P. *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::number('cp', null, array('class' => 'form-control', 'required' => 'required', 'max' => '99999')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('location', 'Localidad *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::text('location', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('countries_id', 'Pais *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{Form::select('countries_id', $countries)}}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('states_id', 'Estado *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{Form::select('states_id', $states)}}
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="offset-sm-2 col-sm-2">
                                                                    <button class="button btn-primary validate" type="submit">Modificar</button>
                                                                </div>

                                                            </div>


                                                            {{ Form::close() }}
                                                        </div>

                                                        <div class="col-1">
                                                            <br>
                                                            <div class="card" style="width: 15rem;">
                                                                <div class="card-img-top" style="background-color: dimgrey">
                                                                    <div class="card-image-div">
                                                                        <a href="#">
                                                                            @IF ($user->avatar != "")
                                                                                <img  src="{{$user->avatar}}" alt="Perfil" class="card-image-profiler">
                                                                            @ELSE
                                                                                <img  src="{{asset('/images/profiler.png')}}" alt="Perfil" class="card-image-profiler">
                                                                            @ENDIF
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body" style="padding-top: 0px; ">
                                                                    <h5 class="card-title">{{$user->name}} {{$user->surnames}}</h5>
                                                                    <p class="card-text" style="font-size: 15px">{{$user->email}}</p>
                                                                </div>

                                                                <div class="vertical-menu">
                                                                    <a href="{{ route('profilers.index') }}" >Mis Datos</a>
                                                                    <a href="{{ route('address.index') }}" class="active">Mi dirección</a>
                                                                    <a href="{{ route('billings.index') }}">Datos de facturación</a>
                                                                    <a href="{{ route('payment-methods.index') }}">Métodos de pago</a>
                                                                    {!! Form::open(['method' => 'DELETE', 'id' => 'frmDestroy', 'route' => ['users.destroy', \Illuminate\Support\Facades\Auth::id()] ]) !!}
                                                                    <a href="#" onclick="document.getElementById('frmDestroy').submit();">Eliminar mi cuenta</a>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </section>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{asset('/js/addresses/client.js')}}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_KEY')}}&callback=init&region=MX&libraries=places" async defer></script>
@endsection



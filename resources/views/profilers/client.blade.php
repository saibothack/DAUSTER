{{-- \resources\views\profiler\create.blade.php --}}
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
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    @include ('errors.list') {{-- Including error file --}}
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h3>Mi perfil</h3>
                                                                    <label>* Campos requeridos</label>
                                                                </div>
                                                            </div>

                                                            {{ Form::model($user, array('route' => array('profilers.update', $user->id), 'method' => 'PUT')) }}
                                                            <div class="form-group row">
                                                                {{Form::label('kindPerson', 'Tipo de persona *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    <label for="kindPerson" class="form-control">{{$kindPersons[$user->kind_persons_id]}}</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('name', 'Nombres *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('surnames', 'Apellidos *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::text('surnames', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('birthday', 'Nacimiento *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::date('birthday', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('email', 'Email *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::email('email', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('phone', 'Teléfono *', array('class' => 'col-sm-4 col-form-label text-right'))}}
                                                                <div class="col-sm-8">
                                                                    {{ Form::tel('phone', null, array('class' => 'form-control', 'required' => 'required')) }}
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
                                                                @IF ($user->provider != "")
                                                                @ELSE
                                                                    <div style="text-align: right;">
                                                                        <a id="btnChangeImage" href="#" style="left: 0px; font-size: 12px;"> Cambiar Imagen</a> &nbsp;
                                                                    </div>
                                                                @ENDIF
                                                                <div class="card-body" style="padding-top: 0px; ">
                                                                    <h5 class="card-title">{{$user->name}} {{$user->surnames}}</h5>
                                                                    <p class="card-text" style="font-size: 15px">{{$user->email}}</p>
                                                                </div>

                                                                <div class="vertical-menu">
                                                                    <a href="{{ route('profilers.index') }}" class="active">Mis Datos</a>
                                                                    <a href="{{ route('address.index') }}">Mi dirección</a>
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

    <div id="dialog-change-iamge" title="Cambiar Imagen">
        <fieldset>
            {{ Form::open(array('route' => array('profilers-image.update', $user->id), 'files'=>'true', 'class' => 'row', 'method' => 'PUT')) }}
            <div class="form-group row">
                {{Form::label('image', 'Imagen *', array('class' => 'col-sm-3 col-form-label text-right'))}}
                <div class="col-sm-9">
                    {{ Form::file('image', null, array('class' => 'form-control', 'required' => 'required')) }}
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-8 col-sm-4">
                    <button class="button btn-primary validate" type="submit">Modificar</button>
                </div>
            </div>
            {{ Form::close() }}
        </fieldset>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('/js/users/profiler_client.js')}}" type="text/javascript"></script>
@endsection


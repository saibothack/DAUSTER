{{-- \resources\views\states\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Estados')

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
                                            Agregar estados
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
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-md-8 col-md-offset-2">
                                                                    @include ('errors.list') {{-- Including error file --}}
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h3>Agregar estado</h3>
                                                                    <label>* Campos requeridos</label>
                                                                </div>
                                                            </div>

                                                            {{ Form::open(array('url' => 'states')) }}

                                                            <div class="form-group row">
                                                                {{Form::label('countries_id', 'País *', array('class' => 'col-sm-3 col-form-label text-right'))}}
                                                                <div class="col-sm-9">
                                                                    {{Form::select('countries_id', $contries, null, array('required' => 'required'))}}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                {{Form::label('name', 'Nombre *', array('class' => 'col-sm-3 col-form-label text-right'))}}
                                                                <div class="col-sm-9">
                                                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="offset-sm-2 col-sm-2">
                                                                    <button class="button btn-primary validate" type="submit">Agregar</button>
                                                                </div>

                                                            </div>

                                                            {{ Form::close() }}
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
    <script src="{{asset('/js/users/profiler_client.js')}}" type="text/javascript"></script>
@endsection


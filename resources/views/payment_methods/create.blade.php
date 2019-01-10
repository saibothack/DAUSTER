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

                                                            {{ Form::open(array('url' => 'payment-methods', 'class' => 'form-validate form-horizontal well')) }}
                                                            <fieldset>
                                                                <legend>Agregar</legend>
                                                                <div class="control-group field-spacer">
                                                                    <div class="control-label" style="width: 100% !important; text-align: left !important;">
                                                                        <span class="spacer">
                                                                            <span class="text">
                                                                                <label id="jform_spacer-lbl" class="">
                                                                                    <strong class="red">*</strong> Campos requeridos
                                                                                </label>
                                                                            </span>
                                                                            <span class="after"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="controls"></div>
                                                                </div>
                                                                <br>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('name', 'Nombre *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        {{Form::text('name', null,  array('required' => 'required', 'class' => 'required'))}}
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label(' ', 'Núero de tarjeta*', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                {{Form::number('card', null,  array('required' => 'required', 'class' => 'required', 'placeholder' => '####-#####-####-####'))}}
                                                                            </div>
                                                                            <div class="col-2 text-right">
                                                                                <div class="row">
                                                                                    <div class="col-12" id="icon_default">
                                                                                        <img src="{{ asset('images/card.png') }}" alt="{{asset('images/card.png')}}" width="32px">
                                                                                    </div>
                                                                                    @foreach ($typeCards as $typeCard)
                                                                                        <div class="col-12" id="{{$typeCard->code}}" data-id="{{$typeCard->id}}">
                                                                                            <img src="{{ asset('images/' . $typeCard->icon) }}" alt="{{$typeCard->icon}}" width="32px">
                                                                                        </div>
                                                                                    @endforeach
                                                                                    {{ Form::hidden('type_card_id', null, array('id' => 'type_card_id')) }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <div class="control-label">
                                                                        {{Form::label('expirationDate', 'Fecha de Expiración *', array('class' => 'hasPopover required'))}}
                                                                    </div>
                                                                    <div class="controls">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                {{Form::number('month', null,  array('required' => 'required', 'class' => 'required', 'placeholder' => 'MM', 'max' => '12'))}}
                                                                            </div>
                                                                            <div class="col-3">
                                                                                {{Form::number('year', null,  array('required' => 'required', 'class' => 'required', 'placeholder' => 'YYYY', 'max' => '9999'))}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <button class="button btn-primary validate" type="submit">Agregar
                                                                    </button>
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
                                                                            @IF (\Illuminate\Support\Facades\Auth::user()->avatar != "")
                                                                                <img  src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="Perfil" class="card-image-profiler">
                                                                            @ELSE
                                                                                <img  src="{{asset('/images/profiler.png')}}" alt="Perfil" class="card-image-profiler">
                                                                            @ENDIF
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body" style="padding-top: 0px; ">
                                                                    <h5 class="card-title">{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->surnames}}</h5>
                                                                    <p class="card-text" style="font-size: 15px">{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                                                                </div>

                                                                <div class="vertical-menu">
                                                                    <a href="{{ route('profilers.index') }}" >Mis Datos</a>
                                                                    <a href="{{ route('address.index') }}" >Mi dirección</a>
                                                                    <a href="{{ route('billings.index') }}">Datos de facturación</a>
                                                                    <a href="{{ route('payment-methods.index') }}" class="active">Métodos de pago</a>
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
    <script src="{{asset('/js/validate_credit/jquery.creditCardValidator.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {

            defaulCard();

            $('#card').validateCreditCard(function(result) {
                var idField = "";
                if (result.card_type != null) {
                    if (result.card_type.name == "mastercard")
                        idField = "#MASTERCARD";
                    if (result.card_type.name == "visa")
                        idField = "#VISA";
                }

                defaulCard();

                if (idField != "") {
                    $(idField).show();
                    $("#icon_default").hide();
                    $("#type_card_id").val($(idField).data('id'));
                }
            });

            function defaulCard() {
                $("#VISA").hide();
                $("#MASTERCARD").hide();
                $("#EFECTIVO").hide();
                $("#icon_default").show();
                $("#type_card_id").val('');
            }
        });
    </script>
@endsection



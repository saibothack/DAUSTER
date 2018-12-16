{{-- \resources\views\services\create-charges.blade.php --}}
@extends('layouts.app')

@section('title', '| Servicios  ')

@section('styles')
    <style type="text/css">
        .g-gridcontent .g-gridcontent-2cols .g-gridcontent-item {
            width: 100%;
        }

        .form-horizontal .control-label {
            width: 115px !important;
        }

        .form-horizontal .controls {
            margin-left: 120px !important;
        }


        .back {
            background: #f2f2f2;
        }

        .odometer-inside {
            display: inline-flex !important;
        }

    </style>

@endsection

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
                                            Solicitud de servicios
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

    <section id="g-container-4634" class="g-wrapper">

        <div class="g-container">
            <br>
            <div class="row text-center">
                <div class="col-md-12">
                    @include ('errors.list') {{-- Including error file --}}
                </div>
            </div>
            <div class="g-grid">
                <div class="g-block size-100">
                    <section id="g-mainbar">
                        <div class="g-grid">

                            <div class="g-block size-50">
                                <div id="gridcontent-3925-particle" class="g-content g-particle">
                                    <div class="center">
                                        <div class="g-gridcontent">
                                            <div class="g-gridcontent-wrapper g-gridcontent-2cols">
                                                <div class="g-gridcontent-item">
                                                    <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-1">
                                                        <div class="g-gridcontent-item-content">
                                                            <span class="g-gridcontent-item-text1">Costo</span>
                                                            <span class="g-gridcontent-item-text2" id="totalCost">
                                                                <div class="g-gridstatistic">
                                                                    <div class="g-gridstatistic-wrapper g-gridstatistic-1cols">
                                                                        <div class="g-gridstatistic-item" id="chargePrice">
                                                                            <input type="hidden" id="chargeTotal" value="{{$total}}">
                                                                            <div class="g-gridstatistic-item-text1 odometer odometer-auto-theme" data-odometer-value="{{$total}}" id="chargePriceDinamic">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                            <div style="width: 100% !important; display: inline-flex !important; margin-bottom: 10px;">
                                                                <div style="width: 49.5% !important;">
                                                                    <span class="g-gridcontent-item-text1">{{sprintf('%02d:%02d', (int) $time, fmod($time, 1) * 60)}} min </span>
                                                                </div>
                                                                <div style="width: 49.5% !important;">
                                                                    <span class="g-gridcontent-item-text1">{{number_format($distance, 2, '.', '')}} km </span>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <br>

                                                            {{ Form::open(array('method' => 'post')) }}
                                                            <div style="width: 100% !important; display: inline-flex !important;">
                                                                <div style="width: 25% !important; margin-right: 5px !important;">
                                                                    {{Form::label('vehicle', 'Vehiculo *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div style="width: 74% !important;">
                                                                    {{ Form::select('vehicle', $vehicles, $idVehicle, array("onchange" => "this.form.submit()")) }}
                                                                </div>
                                                            </div>
                                                            {{ Form::close() }}

                                                            <br>

                                                            {{ Form::open(array('method' => 'post')) }}
                                                            <div style="width: 100% !important; display: inline-flex !important;">
                                                                <div style="width: 25% !important; margin-right: 5px !important;">
                                                                    {{Form::label('paymentMethodId', 'Método de pago *', array('class' => 'hasPopover required'))}}
                                                                </div>
                                                                <div style="width: 74% !important;">
                                                                    <select name="paymentMethodId" id="paymentMethodId" onchange="this.form.submit()">
                                                                        <option value="">Seleccione</option>
                                                                        @foreach($paymentMethods as $paymentMethod)
                                                                            @if($idPaymentMethods == $paymentMethod->id)
                                                                                <option value="{{$paymentMethod->id}}" data-thumbnail="{{asset('images/' . $paymentMethod->type_card->icon)}}" selected="selected">
                                                                                    @if($paymentMethod->card != "")
                                                                                        {{$paymentMethod->card}}
                                                                                    @else
                                                                                        {{$paymentMethod->name}}
                                                                                    @endif
                                                                                </option>
                                                                            @else
                                                                                <option value="{{$paymentMethod->id}}" data-thumbnail="{{asset('images/' . $paymentMethod->type_card->icon)}}">
                                                                                    @if($paymentMethod->card != "")
                                                                                        {{$paymentMethod->card}}
                                                                                    @else
                                                                                        {{$paymentMethod->name}}
                                                                                    @endif
                                                                                </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{ Form::close() }}
                                                            <br>

                                                            <div style="width: 100% !important; display: inline-flex !important; margin-bottom: 10px;">
                                                                <div style="width: 49.5% !important;">
                                                                    <a href="{{ url('services/create/coordinates') }}" class="button button-4 btn-danger">Cancelar</a>
                                                                </div>
                                                                <div style="width: 49.5% !important;">
                                                                    <a href="{{ url('services/create/deliveries') }}" class="btn-success button button-4">Continar</a>
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
                            <div class="g-block size-50">
                                <div id="infolist-3773-particle" class="g-content g-particle">
                                    <div class="g-infolist g-1cols spaced noborder">


                                        <div class="g-infolist-item ">


                                            <div class="g-infolist-item-text g-infolist-textstyle-large">
                                                <div class="g-infolist-item-title ">
                                                    <div class="g-title-hero">
                                                        <a href="#">
                                                            Compras &nbsp; &nbsp; &nbsp;
                                                        </a>
                                                        <a href="#" style="right: 0px !important;" id="addChargeOthers">
                                                            +
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="g-grid">
                                                    <div class="g-block">
                                                        <div class="g-content nomargintop nopaddingtop">
                                                            <table id="chargesOthers">
                                                                <thead>
                                                                <tr>
                                                                    <th>Compra</th>
                                                                    <th>Precio</th>
                                                                    <th>Eliminar</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($chargeOthers as $key => $value)
                                                                    <tr>
                                                                        <td>{{ $value['chargeOthersName'] }}</td>
                                                                        <td>{{ $value['chargeOthersPrice'] }}</td>
                                                                        <td>
                                                                            {{ Form::open(array('method' => 'post')) }}
                                                                            {{ Form::hidden('idChargeOthers', $key) }}
                                                                            <button type="submit">Eliminar</button>

                                                                            {{ Form::close() }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
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

        <div id="dialog-form" title="Agregar compra">
            {{ Form::open(array('id' => 'frmChargesOthers', 'method' => 'post')) }}
            <fieldset>
                <p class="validateTips">*Campos requeridos</p>
                <div style="margin: 15px;">
                    <div style="display: inline-block; width: 150px !important; text-align: right">
                        {{Form::label('chargeOthersName', 'Nombre *', array('class' => 'hasPopover required'))}}
                    </div>
                    <div style="display: inline-block; width: 300px !important;">
                        {{ Form::text('chargeOthersName', null, array('required' => 'required')) }}
                    </div>
                </div>
                <div style="margin: 15px;">
                    <div style="display: inline-block; width: 150px !important; text-align: right">
                        {{Form::label('chargeOthersPrice', 'Precio *', array('class' => 'hasPopover required'))}}
                    </div>
                    <div style="display: inline-block; width: 300px !important;">
                        {{ Form::number('chargeOthersPrice', null, array('required' => 'required')) }}
                    </div>
                </div>
                <div style="margin: 15px;">
                    <div style="display: inline-block; width: 150px !important; text-align: right">
                        {{Form::label('chargeOthersDescription', 'Descripción', array('class' => 'hasPopover required'))}}
                    </div>
                    <div style="display: inline-block; width: 300px !important;">
                        {!! Form::textarea('chargeOthersDescription', null, ['rows' => 3]) !!}
                    </div>
                </div>
                <div style="text-align: right !important;">
                    <button class="button btn-primary validate" type="submit">Agregar
                    </button>
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/service-step-two.js') }}"></script>
@endsection

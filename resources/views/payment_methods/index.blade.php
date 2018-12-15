{{-- \resources\views\peyment_methods\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Mis metodos de pago')

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
                                                                    <h3>Mis métodos de pago</h3>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <a href="{{ URL::to('payment-methods/create') }}" class="button btn-primary validate">
                                                                        Agregar
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <th>Métodos</th>
                                                                    <th class="tdOptions">Opciones</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($paymentMethods as $paymentMethod)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="row">
                                                                                <div class="col-2">
                                                                                    <img src="{{ asset('images/' . $paymentMethods->type_card->icon) }}" alt="{{$typeCard->icon}}" width="32px">
                                                                                </div>
                                                                                <div class="col-2">
                                                                                    {{ $paymentMethods->type_card->name }}
                                                                                </div>
                                                                                <div class="col-6 text-left">
                                                                                    {{ $paymentMethods->card }}
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tdOptions">
                                                                            <div style="display: inline-flex;">
                                                                                <a href="{{ URL::to('paymennt-methods/'.$paymentMethod->id.'/edit') }}" class="button button-grey button-2">
                                                                                    <i class="fa fa-fw fa-edit"></i>
                                                                                </a>

                                                                                {!! Form::open(['method' => 'DELETE', 'route' => ['payment-methods.destroy', $paymentMethod->id] ]) !!}
                                                                                <button class="button button-red button-2" type="submit">
                                                                                    <i class="fa fa-fw fa-trash"></i>
                                                                                </button>
                                                                                {!! Form::close() !!}
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                            <div class="pagination">
                                                                {{ $paymentMethods->links() }}
                                                            </div>


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
                                                                    <a href="{{ route('address.index') }}" class="active">Mi dirección</a>
                                                                    <a href="{{ route('billings.index') }}">Datos de facturación</a>
                                                                    <a href="{{ route('payment-methods.index') }}">Métodos de pago</a>
                                                                    <a href="{{ route('cards.index') }}">Eliminar mi cuenta</a>
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



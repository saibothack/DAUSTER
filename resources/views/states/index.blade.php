{{-- \resources\views\states\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Estados')

@section('content')
<div aria-controls="g-offcanvas" aria-expanded="false" class="g-offcanvas-hide g-offcanvas-toggle" data-offcanvas-toggle="">
    <i class="fa fa-fw fa-bars">
    </i>
</div>
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
                                        Catalógo de Estados
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
<section id="g-bottom">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100">
                <div class="g-content">
                    <div class="platform-content">
                        <div class="moduletable ">
                            <div class="custom">
                                <div class="g-grid">
                                    <div class="g-block">
                                        <div class="g-content nomargintop nopaddingtop">
                                            @if(Session::has('flash_message'))
                                                <div class="container">      
                                                    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                                                    </div>
                                                </div>
                                            @endif 

                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">              
                                                    @include ('errors.list') {{-- Including error file --}}
                                                </div>
                                            </div>

                                            <br>
                                            {!! Form::open(['route' => 'states.index', 'method' => 'get', 'class' => 'row']) !!}
                                                <div class="col-md-2">
                                                    <a href="{{ URL::to('states/create') }}" class="button btn-primary validate">
                                                        Agregar
                                                    </a>
                                                </div>
                                                <div class="offset-md-2 col-md-4">
                                                    <input type="text" placeholder="Ingrese su busqueda" id="search" name="search">
                                                </div>
                                                <div class="col-md-2">
                                                    {{Form::select('countries_id', $contries, 0)}}
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="submit" value="Buscar" class="button btn-primary" style="margin-left: 10px !important;">
                                                </div>
                                            {!! Form::close() !!}

                                            <br>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>País</th>
                                                            <th>Nombre</th>
                                                            <th>Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($states as $state)
                                                        <tr>
                                                            <td>{{ $contries[$state->countries_id]}}</td>
                                                            <td>{{ $state->name}}</td>
                                                            <td class="tdOptions">
                                                                <div style="display: inline-flex;">
                                                                    <a href="{{ URL::to('states/'.$state->id.'/edit') }}" class="button button-grey button-2">
                                                                        <i class="fa fa-fw fa-edit"></i>
                                                                    </a>

                                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['states.destroy', $state->id] ]) !!}
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
                                                    {{ $states->links() }}
                                                </div>
                                            </br>
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
@endsection

@extends('layout.base')

@push('stylesheets')
    <style>
        .organization-data-line {
            display: flex;
            margin-bottom: 15px;
        }

        .data-value {
            margin-left: 10px;
            display: flex;
        }
    </style>
@endpush

@section('title', 'Organizaciones')

@section('container')
    <div class="row">
        <div class="col s12">
            <div class="input-field">
                <i class="material-icons prefix">search</i>
                <input type="text" id="search">
                <label for="icon-prefix">Buscar ...</label>
            </div>
        </div>
    </div>

    <ul class="tabs">
        <li class="tab col s4">
            <a class="active purple-text" href="#organizaciones">
                Organizaciones
            </a>
        </li>
        <li class="tab col s4 disabled">
            <a class="purple-text text-lighten-2" href="{{url('servicios')}}" onclick="javascript:window.location.href='{{url('servicios')}}'" style="cursor: pointer;">
                Servicios
            </a>
        </li>
    </ul>

    <div id="organizaciones">
        @foreach ($organizaciones as $organizacion)
            <div class="section">
                <div class="row">
                    <div class="col s3">
                        <a href="{{url('/organizaciones/'.$organizacion->id)}}">
                            <img src="{{asset($organizacion->imagen)}}" alt="" class="circle responsive-img">
                        </a>
                    </div>
                    <div class="col s9">
                        <ul class="organization-data">
                            <li class="organization-data-line">
                                <i class="material-icons purple-text">business</i>
                                <span class="data-value">
                                    <a href="{{url('/organizaciones/'.$organizacion->id)}}" class="purple-text bold">
                                        {{$organizacion->titulo}}
                                    </a>
                                </span>
                            </li>
                            <li class="organization-data-line">
                                <i class="material-icons purple-text">local_phone</i>
                                <span class="data-value">
                                    {{$organizacion->telefono}}
                                </span>
                            </li>
                            <li class="organization-data-line">
                                <i class="material-icons purple-text">place</i>
                                <span class="data-value">
                                    {{$organizacion->ubicacion}}
                                </span>
                            </li>
                            <li class="organization-data-line">
                                <i class="material-icons purple-text">rate_review</i>
                                <span class="data-value">
                                    {{$organizacion->promedioResena()}}
                                    <span class="rateYo-rating" data-rating="{{$organizacion->promedioResena()}}" data-rateyo-read-only="true"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        @endforeach
    </div>
@endsection

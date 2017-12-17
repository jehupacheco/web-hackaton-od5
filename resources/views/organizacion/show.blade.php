@extends('layout.base')

@push('stylesheets')
  <style>
    .line {
      display: flex;
      margin: 20px 0;
    }

    .data {
      margin-left: 10px;
    }
  </style>
@endpush

@section('title', $organizacion->titulo)

@section('container')
<div class="container">
  <p>
    <h5 class="bold purple-text">{{$organizacion->titulo}}</h5>
  </p>
  <img src="{{asset($organizacion->banner)}}" alt="" class="responsive-img">
  <p>
    <div class="line">
      <span>{{$organizacion->nivel}}</span>
      <span class="rateYo-rating" data-rating="{{$organizacion->nivel}}" data-rateyo-read-only="true"></span>
    </div>
  </p>
  <p>{{$organizacion->descripcion}}</p>
  <h6 class="bold purple-text">Contacto:</h6>
  <p>
    <div class="line">
      <i class="material-icons purple-text">local_phone</i>
      <span class="data">
        {{$organizacion->telefono}}
      </span>
    </div>
    <div class="line">
      <i class="material-icons purple-text">place</i>
      <span class="data">
        {{$organizacion->ubicacion}}
      </span>
    </div>
    @if($organizacion->correo != 'NO APLICA')
      <div class="line">
        <i class="material-icons purple-text">email</i>
        <span class="data">
          {{$organizacion->correo}}
        </span>
      </div>
    @endif
    @if($organizacion->encargado != 'NO APLICA')
      <div class="line">
        <i class="material-icons purple-text">person</i>
        <span class="data">
          {{$organizacion->encargado}}
        </span>
      </div>
    @endif
    <div class="line">
      <i class="material-icons purple-text">schedule</i>
      <span class="data">
        {{Carbon::createFromFormat('H:i:s',$organizacion->comienzoAtencion)->format('h:i a')}}
        -
        {{Carbon::createFromFormat('H:i:s',$organizacion->finAtencion)->format('h:i a')}}
      </span>
    </div>
  </p>
  <h6 class="bold purple-text">Opiniones:</h6>
  @foreach($organizacion->resenas()->get() as $resena)
    <p class="resena-container">
      <div class="line">
        <span>{{$resena->nivel}}</span>
        <span class="rateYo-rating" data-rating="{{$resena->nivel}}" data-rateyo-read-only="true"></span>
      </div>
      @if($resena->created_at)
        <div class="italic blue-grey-text line">
          {{(new Carbon($resena->created_at))->format('d/m/Y')}}
        </div>
      @endif
      <p>{{$resena->descripcion}}</p>
    </p>
  @endforeach
  <h6 class="bold purple-text">Déjanos tu opinión:</h6>
  <p>
    <form method="POST" action="/resenas">
            {{ csrf_field() }}   
      <div class="input-field">
        <input type="number" id="nivel" name="nivel" placeholder="Puntaje" max="5" min="0" required>
      </div>
      <div class="input-field">
        <select name="servicio" required>
          <option value="" disabled selected>Elige un servicio</option>
          @foreach($organizacion->servicios()->get() as $servicio)
            <option value="{{$servicio->id}}">{{$servicio->titulo}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-field">
        <textarea id="descripcion" name="descripcion" cols="30" rows="10" class="materialize-textarea" required></textarea>
        <label for="descripcion">Comentario</label>
      </div>
      <div class="center-align">
        <button class="btn waves-effect waves-light purple" type="submit" name="action">
          Enviar
        </button>
      </div>
    </form>
  </p>
</div>
@endsection

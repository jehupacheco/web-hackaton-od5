@extends('layout.base')

@section('title', 'AconsejaTEC')

@section('container')
  <div class="banner">
    <img src="{{asset('img/banner.png')}}" class="responsive-img" alt="">
  </div>
  <div class="container">
    <h5 class="purple-text bold">Quiénes somos</h5>
    <p class="justify-align">
      Somos una plataforma, la cual permite que una mujer que sufre de violencia, pueda buscar y acceder de manera rápida y sencilla a las organizaciones que brindan servicios en violencia de género, por medio de su testimonio.
    </p>
    <h5 class="purple-text bold">Nuestro objetivo</h5>
    <p class="justify-align">
      Queremos mejorar la búsqueda de asesoría en violencia de género de las organizaciones de la sociedad civil, en la ciudad de Chimbote.
    </p>
  </div>
@endsection

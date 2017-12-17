<h1>servicios</h1>
<ul>
@foreach ($servicios as $servicio)
    <a href="/servicios/{{ $servicio->id}}">
    	{{ $servicio->titulo }}
    </a>
    {{ $servicio->promedioResena() }}
    {{ $servicio->descripcion }}
    {{ $servicio->nivel }}
    {{ $servicio->comienzoAtencion }}
    {{ $servicio->finAtencion }}
    {{ $servicio->costo }}
@endforeach
</ul>

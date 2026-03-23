<h1>Lista de Superhéroes</h1>

<a href="/superheroes/create">Crear nuevo</a>

@foreach($heroes as $hero)
    <div style="margin-bottom:20px; border-bottom:1px solid #ccc; padding-bottom:10px;">
        <h3>{{ $hero->hero_name }}</h3>

        {{-- Mostrar la imagen --}}
        @if($hero->photo)
            <img src="{{ asset($hero->photo) }}" alt="{{ $hero->hero_name }}" width="150">
        @else
            <p>No hay imagen disponible</p>
        @endif

        <p>Nombre real: {{ $hero->real_name }}</p>

        <a href="/superheroes/{{ $hero->id }}">Ver</a>
        <a href="/superheroes/{{ $hero->id }}/edit">Editar</a>

        <form action="/superheroes/{{ $hero->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endforeach
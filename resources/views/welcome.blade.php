@if(isset($likes) && $likes->count() > 0)
    <h3>Likes del usuario:</h3>
    <ul>
        @foreach($likes as $like)
            <li>{{ $like->name }}</li>
            <li>{{$like->link}}</li> <!-- Suponiendo que 'nombre' es un campo de la tabla 'likes' -->
        @endforeach
    </ul>
@else
    <p>El usuario no tiene likes.</p>
@endif

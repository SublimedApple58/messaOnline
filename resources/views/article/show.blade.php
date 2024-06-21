<x-layout>
    <h3>{{$article->title}}</h3>
    <p>{{$article->content}}</p>
    <img src="{{Storage::url($article->img)}}" alt="immagine non disponibile">
</x-layout>
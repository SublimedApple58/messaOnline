<div class="card my-4" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <p class="card-text">{{$article->content}}</p>
      <p class="card-text">Category: {{$article->category ? $article->category->name : 'Non categorizzato'}}</p>
      <p class="card-text">
        @if ($article->countries->isNotEmpty()) 
          Countries:
          @foreach ($article->countries as $country)
            {{$country->name}}
          @endforeach
        @endif
      </p>
      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Details</a>
      @auth
        @if (Auth::id() == $article->user->id)
          <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Edit</a>
          <form action="{{route('article.delete', compact('article'))}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        @endif
      @endauth
    </div>
  </div>
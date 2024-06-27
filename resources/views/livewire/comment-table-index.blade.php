<div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Body</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td>{{$comment->title}}</td>
                    <td>{{$comment->subtitle}}</td>
                    <td>{{$comment->body}}</td>
                    <td><button class="btn btn-info">Dettaglio</button></td>
                    <td><a href="{{route('comments.edit', compact('comment'))}}" class="btn btn-warning">Modifica</a></td>
                    <td><button class="btn btn-danger" wire:click="deleteComment({{$comment}})">Elimina</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

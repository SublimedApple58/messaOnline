
    <div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
    
    <form wire:submit="commentStore">
        <div class="mb-3">
           {{-- <p>Il valore di Title è: {{$title}}</p>  --}}
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" wire:model="title">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea wire:model="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

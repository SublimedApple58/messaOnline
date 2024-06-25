<x-layout>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-10 col-md-6">
                <form action="{{route('article.update', compact('article'))}}" method="POST" class="bg-primary text-white p-5 rounded-3" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" value="{{$article->title}}" class="form-control" id="title" name="title">
                    </div>
                    <label for="category" class="form-label">category</label>
                    <select class="form-select mb-3" name="category" id="category">           
                      @foreach ($categories as $category)
                        @if ($article->category_id == $category->id)
                          <option selected value="{{$category->id}}">{{$category->name}}</option>
                        @else
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                      @endforeach
                        <option value="">altro</option>
                    </select>
                    <div class="mb-3">
                      @foreach ($countries as $country)                       
                        <div class="form-check">
                          @if ($article->countries->contains($country))
                            <input checked class="form-check-input" type="checkbox" value="{{$country->id}}" id="flexCheckDefault" name='countries[]'>
                          @else
                            <input class="form-check-input" type="checkbox" value="{{$country->id}}" id="flexCheckDefault" name='countries[]'>
                          @endif
                          <label class="form-check-label" for="flexCheckDefault">
                            {{$country->name}}
                          </label>
                        </div>
                      @endforeach
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Content</label>
                      <input type="text" value="{{$article->content}}" class="form-control" id="content" name="content">
                    </div>
                    <div class="mb-3">
                      <label for="img" class="form-label">Image</label>
                      <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
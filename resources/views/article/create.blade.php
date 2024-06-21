<x-layout>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6">
                <form action="{{route('article.store')}}" method="POST" class="bg-primary text-white p-5 rounded-3" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="topic" class="form-label">Topic</label>
                      <input type="text" class="form-control" id="topic" name="topic">
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Content</label>
                      <input type="text" class="form-control" id="content" name="content">
                    </div>
                    <div class="mb-3">
                      <label for="img" class="form-label">Image</label>
                      <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
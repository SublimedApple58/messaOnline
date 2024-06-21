<x-layout>
    @if ($errors->any())
    <div class="container bg-danger p-4 mt-3 rounded-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif  
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
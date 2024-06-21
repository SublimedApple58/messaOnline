<x-layout>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    @if(session()->has('alert'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-around align-items-center my-5">
            @foreach ($articles as $article)
                <div class="col-10 col-md-3">
                    <x-card
                    :article="$article"></x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
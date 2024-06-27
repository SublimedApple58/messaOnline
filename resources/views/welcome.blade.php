<x-layout>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    @if(session()->has('alert'))
        <div class="alert alert-danger">
            {{session('alert')}}
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:counter>
            </div>
        </div>
    </div>

</x-layout>
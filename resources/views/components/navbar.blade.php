<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Aritcoli usciti</a>
          </li>
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Scrivi articolo</a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST"> @csrf
                <button type="sumbit" class="nav-link">Logout</button>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.my_article')}}">My articles</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
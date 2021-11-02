<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('pagina-home')}}">Comics Archive</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('pagina-home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('comics.index')}}">Lista fumetti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('comics.create')}}">Inserisci un fumetto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
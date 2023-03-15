<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{Request::path() === '/' ? 'nav-link active' : 'nav-link'}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{Request::path() === 'animals' ? 'nav-link active' : 'nav-link'}}" href="/animals">Animals</a>
        </li>
        <li class="nav-item">
          <a class="{{Request::path() === 'aliens' ? 'nav-link active' : 'nav-link'}}" href="/aliens">Aliens</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
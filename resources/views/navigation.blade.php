<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{Request::path() === '/' ? 'nav-link active' : 'nav-link'}}" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{Request::path() === 'about' ? 'nav-link active' : 'nav-link'}}" href="{{route('about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="{{Request::path() === 'blog' ? 'nav-link active' : 'nav-link'}}" href="{{route('blog')}}">Blog</a>
        </li>

        <li class="nav-item">
          <a class="{{Request::path() === 'aliens' ? 'nav-link active' : 'nav-link'}}" href="{{route('aliens')}}">Sightings</a>
        </li>

        <li class="nav-item">
          <a class="{{Request::path() === 'contact' ? 'nav-link active' : 'nav-link'}}" href="{{route('contact')}}">Contact</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
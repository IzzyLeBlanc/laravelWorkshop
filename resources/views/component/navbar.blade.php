<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{route('about-me')}}">About Me <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{route('my-hobby')}}">My Hobby</a>
        <a class="nav-item nav-link" href="{{route('contact-me')}}">Contact Me</a>
      </div>
    </div>
</nav>
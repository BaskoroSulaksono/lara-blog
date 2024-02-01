<nav class="navbar navbar-expand-lg" style="background-color:#cdb4db">
    <div class="container">
      <a class="navbar-brand" href="/home">Lara Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $active == 'home' ? 'active' : null }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'about' ? 'active' : null }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'posts' ? 'active' : null }}" href="/posts">Posts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
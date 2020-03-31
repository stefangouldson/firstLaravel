<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./welcome">First Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('pages/index')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pages/about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pages/users')}}">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
        </li>
      </ul>
    </div>
</nav>

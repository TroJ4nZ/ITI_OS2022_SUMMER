<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  @class([
            'nav-link',
            'active' => request()->routeIs('home'),
          ])
          href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a @class([
            'nav-link dropdown-toggle',
            'active' => request()->routeIs(['users.index', 'users.create']),
          ])
          class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu">
            <li><a @class([
              'dropdown-item',
              'bg-info' => request()->routeIs('users.index'),
            ])
             href="{{route('users.index')}}">Users List</a></li>
            <li><a
              @class([
              'dropdown-item',
              'bg-info' => request()->routeIs('users.create'),
            ])
               href="{{route('users.create')}}">New User</a></li>

          </ul>


        </li>
        <li class="nav-item dropdown">
            <a @class([
              'nav-link dropdown-toggle',
              'active' => request()->routeIs(['posts.index', 'posts.create']),
            ])
            class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Posts
            </a>
            <ul class="dropdown-menu">
              <li><a @class([
                'dropdown-item',
                'bg-info' => request()->routeIs('posts.index'),
              ])
               href="{{route('posts.index')}}">Posts List</a></li>
              <li><a
                @class([
                'dropdown-item',
                'bg-info' => request()->routeIs('posts.create'),
              ])
                 href="{{route('posts.create')}}">New Post</a></li>

                 <li><a
                    @class([
                    'dropdown-item',
                    'bg-info' => request()->routeIs('posts.softs'),
                  ])
                     href="{{route('posts.softs')}}">Deleted Posts</a></li>

            </ul>


          </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</nav>

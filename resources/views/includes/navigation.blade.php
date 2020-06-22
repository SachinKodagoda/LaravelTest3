<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link {{ Request::route()->getName() == 'searchUser' ? 'active' : 'diact'}}" href="{{ route('searchUser') }}">SEARCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::route()->getName() == 'addUser' ?  'active' : 'diact'}}" href="{{ route('addUser') }}">ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled {{ Request::route()->getName() == 'updateUser' ?  'active' : 'diact'}}" href="#" tabindex="-1" aria-disabled="true">UPDATE</a>
      </li>
    </ul>
  </div>
</nav>
<header class="header">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <a href="{{url('admin/dashboard')}}" class="navbar-brand">
          <div class="brand-text brand-big visible text-uppercase"><strong>Admin</strong></div>
          <div class="brand-text brand-sm"><strong>A</strong></div>
        </a>

        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>
      <div class="list-inline-item logout">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input type="submit" value="Logout">
        </form>
      </div>
    </div>
  </nav>
</header>
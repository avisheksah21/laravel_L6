<!-- header section strats -->
<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{ url('/') }}">
      <span>
        LARABOOKS
      </span>
    </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:rgb(167, 202, 169)">
      <ul class="navbar-nav  ">
        <li class="nav-item active">
          <a class="nav-link" style="margin-right: 150px;" href="{{url('/')}}">Home <span
              class="sr-only">(current)</span></a>
        </li>
        <li>

          <form action="{{url('product_search')}}" method="GET">
            <input type="search" name="search" placeholder="Search by title">
            <select name="category">
              <option value="">All Categories</option>

              @if(isset($categories))
          @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
        {{ $category->category_name }}</option>
      @endforeach
        @endif


            </select>
            <input type="submit" class="btn btn-secondary" value="Search">
          </form>


        </li>
      </ul>
      <div class="user_option" style="margin-left: 100px">
        @if (Route::has('login'))
      @auth
      <form style="padding: 10px;" method="POST" action="{{ route('logout') }}">
      @csrf
      <input class="btn btn-danger" type="submit" value="Logout">
      </form>
    @else
      <a href="{{url('/login')}}">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>
      Login
      </span>
      </a>
      <a href="{{url('/register')}}">
      <i class="fa fa-vcard" aria-hidden="true"></i>
      <span>
      Register
      </span>
      </a>
    @endauth
    @endif

      </div>
    </div>
  </nav>
</header>
<!-- end header section -->
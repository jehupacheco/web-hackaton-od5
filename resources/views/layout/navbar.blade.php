<div class="navbar-fixed">
  <nav class="top-nav purple">
    <a href="#" class="button-collapse top-nav full hide-on-large" data-activates="nav-mobile">
      <i class="material-icons">menu</i>
    </a>
    <div class="container">
      <div class="nav-wrapper" style="display: flex; align-items: center; justify-content: space-between">
        <a class="truncate" style="text-transform: uppercase;font-weight: bold;">
          @yield('title')
        </a>
        <a href="{{url('')}}" style="width: 30px; line-height: 0">
          <img src="{{asset('img/logo.png')}}" class="responsive-img" alt="">
        </a>
      </div>
    </div>
  </nav>
</div>
@include('layout.sidebar')

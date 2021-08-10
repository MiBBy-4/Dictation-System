<nav class="navbar navbar-expand navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('dict.index')}}" class="nav-link">Главная</a>
    </li>
    @guest
    @else
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('dict.show')}}" class="nav-link">
        Просмотреть написанный диктант
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('dict.activeShow')}}" class="nav-link">
        Просмотреть активный диктант
      </a>
    </li>
    @can('view', auth()->user())
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('admin.dict.index')}}" class="nav-link">Админ панель</a>
    </li>
    @endcan
    @endguest
   
    
  </ul>

  <!-- Right navbar links -->
  {{-- <ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link btn">Вход</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Регистрация</a>
    </li>
  </ul> --}}
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
</nav>



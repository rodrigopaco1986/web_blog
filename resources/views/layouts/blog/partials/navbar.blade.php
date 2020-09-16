      <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
          <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light">Blog</span>
        </a>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            @if(Auth::check())
                <li>
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        Login
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
<!-- /.navbar -->
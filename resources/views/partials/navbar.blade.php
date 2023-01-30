<nav class="navbar navbar-expand-lg  bg-danger">
    <div class="container text-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "about") ? 'active' : ''}}" href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">categories</a>
                </li>
               
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-book"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</li></button>
                        </form>
                        
                    </ul>
                  </li>
                @else 
                <li>
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-universal-access"></i>Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
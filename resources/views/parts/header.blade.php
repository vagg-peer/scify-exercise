<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SC!FY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if (!session('username'))
                    <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login.page') }}">Login</a>
                    </li>        
                @else
                    <li class="nav-item">
                        <p class="nav-link" href="#">Welcome {{ session('username') }}</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('logout.handler') }}">Logout</a>
                    </li>         
                @endif     
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Assistive Technologies
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('users.activity') }}">User's activity</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
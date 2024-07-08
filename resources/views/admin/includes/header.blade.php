<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">

<nav class="nav nav-expand-lg justify-content-end border">
    <li class="nav-item dropdown m-3">
        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>
                        Logout</button>
                </form>
            </li>
        </ul>
    </li>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
    <div class="container-fluid bg-white">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav my-3 mx-auto">
                <li class="nav-item mx-5">
                    <a class="nav-link " href="{{ route('home') }}"><img class="img-nav"
                            src="{{ asset('img/dc-logo.png') }}" alt=""></a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">CHARACTERS</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">COMICS</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link " href="{{ route('comics.index') }}">MOVIES</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">TV</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">GAMES</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">COLLECTIBLES</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">VIDEOS</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">FANS</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">NEWS</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{ route('comics.index') }}">SHOP</a>
                </li>
                <li class="nav-item mx-5 my-auto">
                    <input placeholder="Search" class="input-text" type="text">
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .img-nav {
        width: 50px
    }

    .input-text {
        border-style: none;
        border-bottom: 3px solid lightblue
    }
</style>

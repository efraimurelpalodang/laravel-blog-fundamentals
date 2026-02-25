<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
        <a class="navbar-brand fw-semibold" href="{{ env('APP_URL') }}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a @class(['nav-link', 'active' => request()->routeIs('home')]) href="{{ route('home') }}">Home</a>
                <a @class(['nav-link', 'active' => request()->routeIs('about')]) href="{{ route('about') }}">About</a>
                <a @class(['nav-link', 'active' => request()->routeIs('posts')]) href="{{ route('posts') }}">Posts</a>
            </div>
        </div>
    </div>
</nav>
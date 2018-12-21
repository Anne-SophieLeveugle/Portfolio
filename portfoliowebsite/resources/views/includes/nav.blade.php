<nav class="navbar navbar-expand-lg navbar-light bg-transparent clearfix">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ml-auto w-100 justify-content-end">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('about') }}">About me</a>
            </li>
            <li class="nav-item {{Request::is('work') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('work') }}">Work</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.index') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
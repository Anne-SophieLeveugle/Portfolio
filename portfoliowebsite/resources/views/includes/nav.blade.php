<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="/portfolio/portfoliowebsite/public/">Home</a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                <a class="nav-link" href="/portfolio/portfoliowebsite/public/about">About me</a>
            </li>
            <li class="nav-item {{Request::is('work') ? 'active' : ''}}">
                <a class="nav-link" href="/portfolio/portfoliowebsite/public/work">Work</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="/portfolio/portfoliowebsite/public/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
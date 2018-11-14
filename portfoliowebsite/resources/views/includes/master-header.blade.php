<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Portfolio ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{Request::is('admin.create') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.create') }}">Create</a>
            </li>
            <li class="nav-item {{Request::is('admin.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('admin.index') }}">Index</a>
            </li>
        </ul>
    </div>
</nav>
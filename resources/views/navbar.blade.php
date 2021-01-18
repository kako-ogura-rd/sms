<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Student Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMakeup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('./create') }}">Create</a>
        </div>
    </div>
</nav>

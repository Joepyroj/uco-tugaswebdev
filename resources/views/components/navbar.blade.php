<!-- resources/views/components/navbar.blade.php -->



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Jobify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item {{ request()->routeIs('add-job') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('add-job') }}">Add Job</a>
            </li>
            <li class="nav-item {{ request()->routeIs('all-jobs') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('all-jobs') }}">All Jobs</a>
            </li>
            <li class="nav-item {{ request()->routeIs('stats') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('stats') }}">Stats</a>
            </li>
            <li class="nav-item {{ request()->routeIs('profile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            </li>
            {{-- Uncomment this when you have a logout route --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route($logoutRoute) }}">Logout</a>
            </li> --}}
        </ul>
    </div>
</nav>

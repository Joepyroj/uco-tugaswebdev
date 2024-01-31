<!-- resources/views/components/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Your App Name</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add-job') }}">Add Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('all-jobs') }}">All Jobs</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('stats') }}">Stats</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
            {{-- Add a logout link if needed --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li> --}}
        </ul>
    </div>
</nav>

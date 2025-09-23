<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="w-100 d-flex justify-content-between align-items-center px-3">

        @auth
            <div class="d-flex align-items-center">
                <!-- Foto Profil -->
                <img src="{{ asset('storage/' . (Auth::user()->photo ?? 'profile/default.png')) }}" alt="Profile Photo"
                    class="rounded-circle mr-2" width="50" height="50">

                <!-- Nama User -->
                <span class="mr-3">
                    Welcome back, <strong>{{ Auth::user()->username }}</strong>
                </span>
            </div>

            <!-- Tombol Logout -->
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">
                    Logout
                </button>
            </form>
        @endauth

    </div>
</nav>
<!-- /.navbar -->

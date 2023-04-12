<h1>
    {{ Auth::user()->name }}
    <br>
    This is Admin Dashboard.
    <br>
    <a href="{{ route('logout') }}">Logout</a>
</h1>

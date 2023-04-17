<h1>
    {{ Auth::user()->name }}
    <br>
    This is Admin Dashboard.
    <br>
    <a href="{{ route('admin.logout') }}">Logout</a>
</h1>

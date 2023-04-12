<h1>
    {{ Auth::user()->name }}
    <br>
    This is Donor Dashboard.
    <br>
    <a href="{{ route('logout') }}">Logout</a>
</h1>

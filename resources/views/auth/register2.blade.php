<div>
    <div>
        <h2>Register</h2>
    </div>
    <div>
        @if (session('success'))
            <div style="color: green">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div style="color: red">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span role="alert" style="color:red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <label for="phone">Phone</label>
                <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                    <span role="alert" style="color:red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <span role="alert" style="color:red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
            <br>
            <div>
                <label for="role">User Type:</label><br>
                <input type="radio" id="donor" name="role" value=2>
                <label for="donor">Donor</label><br>
                <input type="radio" id="receiver" name="role" value=1>
                <label for="receiver">Receiver</label><br>
                @error('role')
                    <span role="alert" style="color:red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>

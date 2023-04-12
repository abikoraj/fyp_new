<div>
    <div>
        <h2>Login</h2>
    </div>
    <div>
        @if (session()->has('error'))
            <div role="alert" style="color: red">
                <strong>{{ session()->get('error') }}</strong>
            </div>
            <br>
        @endif
        @if (session('success'))
            <div style="color: green">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autofocus>
                @error('phone')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div>
                <button type="submit">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify</title>
</head>
<body>
<div>
    <h1>Enter your OTP</h1>

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

    <form action="{{ route('verified') }}" method="post">
        @csrf
        <label for="phone">Enter OTP Code</label>
        <br>
        <input type="text" name="code" placeholder="Enter OTP Code" required value="{{ old('code') }}">
        <input type="text" name="phone" hidden value="{{ $phone }}">
        <br>
        @error('code')
            <span style="color: red">
                {{ $message }}
            </span>
        @enderror
        <br>
        <button type="submit">Verify</button>
    </form>
</div>
</body>
</html>

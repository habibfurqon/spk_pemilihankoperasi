{{-- reset-password.blade.php --}}
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <label for="email">{{ __('Email') }}</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" name="password" required>

    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required>

    @error('email')
        <span role="alert">{{ $message }}</span>
    @enderror

    @error('password')
        <span role="alert">{{ $message }}</span>
    @enderror

    <button type="submit">
        {{ __('Reset Password') }}
    </button>
</form>

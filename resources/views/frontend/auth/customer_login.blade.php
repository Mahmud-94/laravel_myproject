<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{ route('customer.login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" />
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="remember_me">
                                    <input type="checkbox" name="remember" id="remember_me" />
                                    Remember Me
                                </label>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                <div class="mt-3">
                                    <a href="{{ route('customer.register') }}">Don't have account? register now</a>
                                </div>
                            </div>

                        </form>

</body>
</html>

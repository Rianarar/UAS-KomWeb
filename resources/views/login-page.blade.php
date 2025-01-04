<!DOCTYPE html>
<html lang="en">
<x-head>Login Page</x-head>
<body>
    <div class="wrapper">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>
            <div class="input-box"> 
                <input type="email" name="email" class="form-control"  placeholder="Email Adress" autofocus required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="button">Login</button>
            <div class="register-link">
                <p>Don't have an account? 
                    <a href="/register-page">Register</a>
                </p>
            </div>
        </form>
    </div>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</body>
</html>

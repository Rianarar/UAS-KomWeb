<!DOCTYPE html>
<html lang="en">
<x-head>Register Page</x-head>
<body>
    @if(session('status'))
        <div style="color: green;">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="wrapper">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter Password" required>
            </div>
            <button type="submit" class="button">Submit</button>
        </form>
    </div>
</body>
</html>

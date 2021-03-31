@extends('layout.template')

@section('title', 'Login')

@section('content')

    <div class="login-page">
        <div class="login-box">
            <h1>Login</h1>
            <form action="">
                <div class="inputBox">
                    <input type="text" required>
                    <label>E-mail</label>
                </div>
                <div class="inputBox">
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <input type="submit" name="" id="" value="LOGIN">
                <p>Belum punya akun? <a href="/registrasi"><strong>Daftar</strong></a></p>
            </form>
        </div>
    </div>

@endsection

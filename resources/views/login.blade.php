<style>
    .sign-in-form {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px #ddd;
    }
    .sign-in-form .title {
        text-align: center;
        margin-bottom: 30px;
    }
    .sign-in-form .input-field {
        position: relative;
        margin-bottom: 30px;
    }
    .sign-in-form .input-field i {
        position: absolute;
        left: 10px;
        top: 10px;
        color: #aaa;
    }
    .sign-in-form .input-field input {
        width: 100%;
        padding: 10px 10px 10px 40px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        color: #555;
        transition: border 0.3s;
    }
    .sign-in-form .input-field input:focus {
        border: 1px solid #555;
        outline: none;
    }
    .sign-in-form .btn {
        width: 100%;
        background: #555;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.3s;
    }
    .sign-in-form .btn:hover {
        background: #333;
    }
</style>
@section('container')
@extends('layout.layout')
<br><br><br><br><br>
<form method="POST" action="/login" class="sign-in-form">
    @csrf
    <h2 class="title">Masuk</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Masukkan email" name="email" value="{{ old('email') }}" autocomplete='off' />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Masukkan kata sandi" name="password" autocomplete='off' />
    </div>
    <input type="submit" value="MASUK" class="btn solid" />
</form>
<script>
    const togglePassword = document.querySelector('.fa-lock');
    const passwordInput = document.querySelector('input[name="password"]');

    togglePassword.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            togglePassword.classList.remove('fa-lock');
            togglePassword.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-lock');
        }
    });
</script>
@endsection

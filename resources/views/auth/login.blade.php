@extends('layouts.app')

@section('content')
 
<style>
   @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 50vh;
    margin: 150px 0 50px;
}

h1 {
    margin: 0px;
}

h2 {
    text-align: center;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: blue;
    font-size: 12px;
    text-decoration: none;
    margin: 15px 0;
    cursor: pointer;
}

button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

    button:active {
        transform: scale(0.95);
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }

form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

.containe {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 800px;
    max-width: 100%;
    min-height: 480px;
}

.form-containe {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-containe {
    left: 0;
    width: 50%;
    z-index: 2;
}

.containe.right-panel-active .sign-in-containe {
    transform: translateX(100%);
}

.sign-up-containe {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.containe.right-panel-active .sign-up-containe {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {
    0%, 49.99% {
        opacity: 0;
        z-index: 1;
    }

    50%, 100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-containe {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.containe.right-panel-active .overlay-containe {
    transform: translateX(-100%);
}

.overlay {
    
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.containe.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.containe.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.containe.right-panel-active .overlay-right {
    transform: translateX(20%);
} 
</style>


<div class="containe" id="containe">
        <div class="form-containe sign-up-containe">
        <form method="POST" action="{{ route('register') }}">
        @csrf
                <h1 style="padding-top: 15px"> Create Account</h1>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password_confirmation" placeholder="password_confirmation"  class="form-control" name="password_confirmation">
 
                <button style="margin-top:10px"> Create Account</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:blue;"><u>Sign In</u></a></h5>
            </form>
        </div>
        <div class="form-containe sign-in-containe">
        <form method="POST" action="{{ route('login') }}">
        @csrf
                <h1 style="padding-bottom: 15px"> Login Now</h1>
                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror">
                @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button style="margin-top: 10px"> Let Me In...</button>
                <h5>New to here! <a class="ghost" id="signUp" style="color:blue;"><u>Sign Up</u></a></h5>
            </form>
            
        </div>
        <div class="overlay-containe">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="conv.jpeg" alt="movie-1" height="450" width="500"/>
                    
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="arn.jpg" alt="movie-2" height="480" width="500"/>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const containe = document.getElementById('containe');

    signUpButton.addEventListener('click', () => {
        containe.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        containe.classList.remove("right-panel-active");
    });
    </script>

@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Login Aplikasi Toko Bunga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
    <div class="masuk">
        @if(session()->has('success'))
        
        <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
       
       {{session('succes')}}
        
        @endif
    </div>
        <form method="POST" action="{{route('checklogin')}}">
            <h1>Login</h1>
            @csrf
            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="/forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
        </form>
    </div>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('/imageStock/background3.png');
    /* background-color: red; */
    /* background-image: url(background.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper {
    width: 420px;
    background: rgba(0, 0, 0, 0.189);
    border: 2px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color: aliceblue;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 40px;
    font-size: 16px;
    color: aliceblue;
    padding: 20px 45px 20px 45px;
}

.input-box input::placeholder {
    color: aliceblue;
}

.input-box i {
    position: absolute;
    left: 20px; 
    top: 50%;
    transform: translateY(-50%);
}

.wrapper .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-forgot label input {
    accent-color: aliceblue;
    margin-right: 3px;
}

.remember-forgot a {
    color: aliceblue;
    text-decoration: none;
}

.wrapper .btn {
    width: 100%;
    height: 45px;
    background: aliceblue;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 600;
}

.wrapper .register-link {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    color: aliceblue;
    text-decoration: none;
    font-weight: 600;
}

.register-link p a:hover {
    text-decoration: underline;
}

.register-form {
    display: none;
}

.wrapper .register-link a.active {
    color: aliceblue;
    text-decoration: none;
    font-weight: 600;
}

.wrapper .register-link a.active:hover {
    text-decoration: underline;
}
</style>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register | Luxora</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="register-section">

    <div class="register-container">

        <!-- LEFT SIDE -->
        <div class="register-left">
          
            <h1>Create Your Account</h1>
            <p>Join us and enjoy premium shopping experience.</p>
        </div>

        <!-- RIGHT SIDE -->
        <div class="register-form-box">
            @session('$msg')
            <div class="alert alert-success">{{session('msg')}}</div>
            @endsession
            

            <h2>Sign Up</h2>

            <form action="{{route('store.vender')}}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="text" name="full_name" value="{{old('full_name')}}" required>
                    <label>Full Name</label>
                    @error("full_name")
                   <div class="text-danger"> {{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email" required>
                    <label>Email Address</label>
                      @error("email")
                   <div class="text-danger"> {{$message}}</div>
                    @enderror
                </div>

                <div class="form-group password-group">
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye"></i>
                    </span>
                      @error("password")
                   <div class="text-danger"> {{$message}}</div>
                    @enderror
                </div>

                <!-- <div class="form-group">
                    <input type="password" name="confirm_password" required>
                    <label>Confirm Password</label>
                </div> -->

                <button type="submit" class="register-btn">
                    Create Account
                </button>

                <p class="login-link">
                    Already have an account?
                    <a href="{{url('login')}}">Login</a>
                </p>

            </form>

        </div>

    </div>

</section>

<script>
function togglePassword() {
    let pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>
<style>
    /* ===========================
   REGISTER PAGE
=========================== */

.register-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #fdf0f0, #f5f5f5);
    padding: 60px 5%;
}

.register-container {
    display: flex;
    max-width: 1100px;
    width: 100%;
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08);
    flex-wrap: wrap;
}

/* Left Side */

.register-left {
    flex: 1;
    background: linear-gradient(135deg, #800000, #b00000);
    color: white;
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.register-left h1 {
    font-size: 40px;
    margin-bottom: 20px;
}

.register-left p {
    font-size: 16px;
    opacity: 0.9;
}

/* Right Side */

.register-form-box {
    flex: 1;
    padding: 60px;
}

.register-form-box h2 {
    margin-bottom: 30px;
    color: #800000;
}

/* Floating Form */

.form-group {
    position: relative;
    margin-bottom: 25px;
}

.form-group input {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: 1px solid #ddd;
    outline: none;
    background: transparent;
    transition: 0.3s;
}

.form-group label {
    position: absolute;
    top: 14px;
    left: 15px;
    font-size: 14px;
    color: #777;
    background: white;
    padding: 0 5px;
    transition: 0.3s;
    pointer-events: none;
}

.form-group input:focus {
    border-color: #800000;
}

.form-group input:focus + label,
.form-group input:valid + label {
    top: -8px;
    font-size: 12px;
    color: #800000;
}

/* Password Toggle */

.password-group {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 15px;
    top: 14px;
    cursor: pointer;
    color: #800000;
}

/* Button */

.register-btn {
    width: 100%;
    padding: 14px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(135deg, #800000, #b00000);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.register-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(128,0,0,0.3);
}

/* Divider */

.divider {
    text-align: center;
    margin: 25px 0;
    color: #999;
}

/* Social */

.google-btn {
    width: 100%;
    padding: 12px;
    border-radius: 30px;
    border: 1px solid #ddd;
    background: white;
    cursor: pointer;
    transition: 0.3s;
}

.google-btn:hover {
    background: #f5f5f5;
}

/* Login Link */

.login-link {
    margin-top: 20px;
    text-align: center;
}

.login-link a {
    color: #800000;
    font-weight: 600;
    text-decoration: none;
}

/* Responsive */

@media (max-width: 992px) {
    .register-container {
        flex-direction: column;
    }

    .register-left,
    .register-form-box {
        padding: 40px;
    }
}
</style>
</body>
</html>
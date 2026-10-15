<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Luxora</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ===============================
   GLOBAL STYLES
================================= */

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  height:100vh;
  background: linear-gradient(135deg, #790303, #a52a2a);
  display:flex;
  align-items:center;
  justify-content:center;
  overflow:hidden;
}

/* ===============================
   LOGIN CONTAINER
================================= */

.login-container{
  width:100%;
  max-width:420px;
  padding:40px;
  border-radius:20px;
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(15px);
  box-shadow:0 20px 40px rgba(0,0,0,0.3);
  color:#fff;
  animation:fadeIn 1s ease;
}

/* ===============================
   LOGO
================================= */

.logo{
  font-family:'Playfair Display', serif;
  font-size:32px;
  font-weight:700;
  text-align:center;
  margin-bottom:10px;
  letter-spacing:1px;
}

.logo span{
  color:#ffd700;
}

/* ===============================
   HEADING
================================= */

.login-container h2{
  text-align:center;
  margin-bottom:30px;
  font-weight:500;
  font-size:22px;
}

/* ===============================
   INPUT FIELDS
================================= */

.input-group{
  position:relative;
  margin-bottom:20px;
}

.input-group input{
  width:100%;
  padding:12px 45px;
  border-radius:30px;
  border:none;
  outline:none;
  background:rgba(255, 255, 255, 0.08);
  color:#fff;
  font-size:14px;
  transition:0.3s ease;
}

.input-group input::placeholder{
  color:#eee;
}

.input-group i{
  position:absolute;
  left:15px;
  top:50%;
  transform:translateY(-50%);
  color:#800000;
}

.input-group input:focus{
  background:rgba(129, 72, 72, 0.16);
  box-shadow:0 0 5px rgba(255, 255, 255, 0.4);
}

/* ===============================
   OPTIONS
================================= */

.options{
  display:flex;
  justify-content:space-between;
  align-items:center;
  font-size:13px;
  margin-bottom:20px;
}

.options a{
  color:white;
  text-decoration:none;
  transition:0.3s;
}

.options a:hover{
  text-decoration:underline;
}

/* ===============================
   BUTTON
================================= */

.login-btn{
  width:100%;
  padding:12px;
  border:none;
  border-radius:30px;
  background:linear-gradient(45deg, #f1f1f1, #ffffff);
  color:#800000;
  font-weight:600;
  font-size:15px;
  cursor:pointer;
  transition:0.3s ease;
  box-shadow:0 5px 15px rgba(255, 255, 255, 0.4);
}

.login-btn:hover{
  transform:translateY(-3px);
  box-shadow:0 5px 15px rgba(255, 255, 255, 0.6);
}

/* ===============================
   REGISTER LINK
================================= */

.register{
  text-align:center;
  margin-top:20px;
  font-size:14px;
}

.register a{
  color:white;
  text-decoration:none;
  font-weight:500;
}

.register a:hover{
  text-decoration:underline;
}

/* ===============================
   ANIMATION
================================= */

@keyframes fadeIn{
  from{
    opacity:0;
    transform:translateY(20px);
  }
  to{
    opacity:1;
    transform:translateY(0);
  }
}

/* ===============================
   RESPONSIVE
================================= */

@media(max-width:480px){
  .login-container{
    margin:20px;
    padding:30px;
  }
}

</style>
</head>

<body>

<div class="login-container">

  <div class="logo">Luxora</div>
  <h2>Welcome Back</h2>

  <form>

    <div class="input-group">
      <i class="fa fa-envelope"></i>
      <input type="email" placeholder="Email Address" required>
    </div>

    <div class="input-group">
      <i class="fa fa-lock"></i>
      <input type="password" placeholder="Password" required>
    </div>

    <div class="options">
      <label>
        <input type="checkbox"> Remember me
      </label>
      <a href="#">Forgot Password?</a>
    </div>

    <button type="submit" class="login-btn">Login</button>

    <div class="register">
      Don't have an account? <a href="{{url('vender-register')}}">Sign Up</a>
    </div>

  </form>

</div>

</body>
</html>
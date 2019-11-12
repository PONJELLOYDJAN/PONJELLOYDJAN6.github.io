<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Login</h2>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
            
            <li><a href="aboutus.php"><i class="fas fa-address-card"></i>About Us</a></li>
             <li><a href="login.php"><i class="fas fa-address-card"></i>Login</a></li>
              <li><a href="req.php"><i class="fas fa-address-card"></i>Regestration</a></li>
               <li><a href="contactus.php"><i class="fas fa-map-pin"></i>Contact Us</a></li>
            
        </ul> 
       
    </div>


    <div class="main_content">
        <div class="header">Welcome!! Log in Here.</div>  
        

        <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div><br>
              <br/>

            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div><br>
              <br/>
              
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.html">Login</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>

</body>
</html>
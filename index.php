<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Doit Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!-- cek apakah sudah login -->

  <div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#signup">Sign Up</a></li>
    <li class="tab"><a href="#login">Log In</a></li>
  </ul>

  <div class="tab-content">
    <div id="signup">
      <h1>Let's Join Our Journey</h1>
<h2>
  <?php 
  session_start();
  if(isset($_GET['pesan']))
  {
    if($_GET['pesan'] == "belum_login"){
      echo "You must login berfore accessing dashboard!";
    }
    else if($_GET['pesan'] == "logout"){echo "You are log out successfully";}
  }
  ?>
</h2>
      <form action="register.php" method="post">

        <div class="top-row">
          <div class="field-wrap">
            <label>
                First Name<span class="req">*</span>
              </label>
            <input type="text" name="first_name" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
                Last Name<span class="req">*</span>
              </label>
            <input type="text" name="last_name" required autocomplete="off" />
          </div>
        </div>

        <div class="field-wrap">
          <label>
              Email Address<span class="req">*</span>
            </label>
          <input type="email" name="email" required autocomplete="off" />
        </div>

        <div class="field-wrap">
          <label>
              Set A Password<span class="req">*</span>
            </label>
          <input type="password" name="password" required autocomplete="off" />
        </div>

        <button type="submit" class="button button-block" />Sign Up</button>

      </form>

    </div>

    <div id="login">
      <h1>Welcome Back!</h1>

      <form action="cek_login.php" method="post">

        <div class="field-wrap">
          <label>
              Email Address<span class="req">*</span>
            </label>
          <input type="email" name="email" required autocomplete="off" />
        </div>

        <div class="field-wrap">
          <label>
              Password<span class="req">*</span>
            </label>
          <input type="password" name="password" required autocomplete="off" />
        </div>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

        <button class="button button-block" />Log In</button>

      </form>

    </div>

  </div>
  <!-- tab-content -->

</div>
<!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

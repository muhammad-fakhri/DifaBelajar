<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  
  
  
      <link rel="stylesheet" href="css/dashboard.css">

  
</head>

<body>

  <!-- cek apakah sudah login -->
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
  if(isset($_GET['pesan']))
  {
    if($_GET['pesan'] == "delete_fail"){
      echo "You data is wrong for request deleting account !";
    }
    else if($_GET['pesan'] == "register"){
      echo "Congratulation ! Your account has been created !";
    }
  }
  ?>

  <span class='bckg'></span>
<header>
  <h1>
    Doit
  </h1>
  <nav>
    <ul>
      <li>
        <a data-title='Projects'>Projects</a>
      </li>
      <li>
        <a data-title='Team'>Team</a>
      </li>
      <li>
        <a data-title='Diary'>Diary</a>
      </li>
      <li>
        <a data-title='Timeline'>Timeline</a>
      </li>
      <li>
        <a data-title='Settings'>Settings</a>
      </li>
      <li>
        <a data-title='Search'>Search</a>
      </li>
      <li>
        <a href="logout.php">Log Out</a>
      </li>
    </ul>
  </nav>
</header>
<main>
  <div class='title'>
    <h2>Projects</h2>
    <a href='#' title='Profil'>  
      Hello <?php echo $_SESSION['last_name']; ?> !
    </a>
  </div>
  <article class='larg'></article>

<?php 
  if(isset($_GET['view_status'])){
    
  }
 ?>
  <table>
    <h3>Account Data</h3>
      <tr>
        <td>First Name</td>
        <td>:</td>
        <td><?php echo $_SESSION['first_name']; ?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><?php echo $_SESSION['last_name']; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $_SESSION['email']; ?></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $_SESSION['password']; ?></td>
      </tr>
  </table>

</main>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/dashboard.js"></script>




</body>

</html>

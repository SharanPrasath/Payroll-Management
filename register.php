<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "payroll";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['register']))
{
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $email = $_POST["email"];
  $phno = $_POST["phonenumber"];
  $id = $_POST["id"];
  $am = $_POST["bamount"];

  $sql_query = "INSERT INTO pay (name,password,email,phone,id,bonus) VALUES ('$user','$pass','$email','$phno','$id','$am')";
  if(mysqli_query($conn, $sql_query))
  {
    echo "<script>alert('Employee added Successfully');</script>";
  }
  else
  {
    echo"Error: " . $sql . "" . mysqli_error($conn);

  }
  

}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>My Payroll</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

  <section id="title">
    <div class="container-fluid">



    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">

      <a class="navbar-brand" href="">My Payroll</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
             <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
        </ul>
        </ul>

      </div>
    </nav>

    <hr>

    <div class="row">
      <div class="col-lg-12">
      <div class="container title-image">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Register Employee</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><a class="iconf" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></span>
          <span><a class="iconf" href="https://mail.google.com/"><i class="fab fa-google-plus-square"></i></a></span>
          <span><a class="iconf" href="https://twitter.com/?lang=en"><i class="fab fa-twitter-square"></i></a></span>
        </div>
      </div>
      <div class="card-body">
        <form  method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="username">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">

          </div>
          
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="number" class="form-control" name="phonenumber" placeholder="Phonenumber">

          </div>
          <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div><input type="text" class="form-control" name="id" placeholder="Employee Id">

          </div>
          <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div><input type="text" class="form-control" name="bamount" placeholder="Bonus amount">

          </div>
          

          
          <div class="form-group">
            <input type="submit" value="Register" name="register" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
         have an account?<a href="index.php">Sign in</a>
        </div>
      
      </div>
    </div>
  </div>
</div>
    </div>
      
    </div>
    <footer id="footer">
    <a class="icon" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
    <a class="icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a class="icon" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a class="icon" href="https://mail.google.com/"><i class="fas fa-envelope"></i></a>

    <p class="Copyright">?? Copyright 2021 Sharan </p>

  </footer>
  </section>
</body>
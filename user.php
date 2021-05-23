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
            <a class="nav-link" href="user.php">Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
          
        </ul>

      </div>
    </nav>

    <hr>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card searching ">
                <div class="card-header">
                    <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form action="search.php" method="post" >
                                 <!-- End -->
                    <!-- Paypal info -->
                    
                    <!-- bank transfer info -->
                    <div id="net-banking" >
                        <div class="form-group ">  <select class="form-control" id="ccmonth" name="emid">
                                <option value="" selected disabled>--Select Employee--</option>
                                <option>EM1</option>
                                <option>EM2</option>
                                <option>EM3</option>
                                <option>EM4</option>
                                <option>EM5</option>
                                <option>EM6</option>
                                <option>EM7</option>
                                <option>EM8</option>
                                <option>EM9</option>
                                <option>EM10</option>
                            </select> </div>
                         <div class="butto">    
                        <div class="row">

                        <div class="col-lg-4 form-group">
                            <p> <button type="submit" name="search" class="btn btn-outline-danger search-button ">Search</button></p>
                        </div>
                        
                      </div>
                        </div>
                        
                     <!-- End -->
                    <!-- End -->
                </div>
            
            </div>
        </div>
            </div>
        </div>
    </div>
    </form>
    <table class="database">
  <tr class="tablehead">
    <th>Name</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Employee Id</th>
    <th>Bonus Amount</th>

  </tr>
  <?php
  $conn = mysqli_connect("localhost","root","","payroll");
  
  $sql = "SELECT name, email, phone, id, bonus FROM pay";
  $result = $conn-> query($sql);
  if ($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["name"]. "</td><td>". $row["email"] . "</td><td>". $row["phone"]."</td><td>" . $row["id"] . "</td><td>" . $row["bonus"] . "</td></tr>";
    }

    echo "</table>";
  }
  else {
    echo "0 result";
  }
  $conn-> close();
  ?>
</table>
  <footer id="footer">
    <a class="icon" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
    <a class="icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a class="icon" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a class="icon" href="https://mail.google.com/"><i class="fas fa-envelope"></i></a>

    <p class="Copyright">© Copyright 2021 Sharan </p>

  </footer>
  </section>

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
        </ul>

      </div>
    </nav>

        <?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "payroll";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['search']))
{
$empid= $_POST["emid"];
 

}






$sql = "SELECT * FROM `pay` where `id`='$empid'";
 $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
 $rows = mysqli_fetch_array($result);
?>
 <table class="database">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Employee Id</th>
                    <th class="text center">Bonus Amount</th>
                    <th class="text-center">Pay Employee</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Payrollslip</th>






                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['phone'] ?></td>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['bonus'] ?></td>
                    <td class="py-2"><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HBOS1rDnKxBtCo" async> </script> </form></td>
                    <td class="py-2"><a href="delete.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
                    <td class="py-2"><a href="update.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-outline-danger">Update</button></a></td>
                    <td class="py-2"><a href="payroll.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-outline-danger">Payroll</button></a></td>



                    




                </tr>
            </table>


    <hr>

    
  <footer id="footer">
    <a class="icon" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
    <a class="icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a class="icon" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
    <a class="icon" href="https://mail.google.com/"><i class="fas fa-envelope"></i></a>

    <p class="Copyright">© Copyright 2021 Sharan </p>

  </footer>
  </section>
</body>
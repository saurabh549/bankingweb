<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <title>Basic Banking System</title>
</head>
<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro py-1" style="background-color : #72add5;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome to</h3>
          <h1>BANK OF INDIA</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="img/bank.jpg" class="img-fluid pt-2" style="width:400px;height:200px;">
      </div>
    </div>

    <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="img/user.png" class="img-fluid" style="width:250px;height:250px;">
        <br>
        <a href="createuser.php"><button style="background-color : black;">Create a User</button></a>
      </div>
      <div class="col-md act">
        <img src="img/transection.png" class="img-fluid" style="width:250px;height:250px;">
        <br>
        <a href="transfermoney.php"><button style="background-color : black;">Make a Transaction</button></a>
      </div>
      <div class="col-md act">
        <img src="img/transection_history.png" class="img-fluid" style="width:250px;height:250px;">
        <br>
        <a href="transactionhistory.php"><button style="background-color : black;">Transaction History</button></a>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2">
    <p>&copy 2021. Made by <b>Saurabh Sharma</b></p>
  </footer>
</body>

</html>
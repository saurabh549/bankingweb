<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">
  <style type="text/css">
        body{
            min-height: 100vh;
        }

        footer {
            position: sticky;
            top: 100%;
            color: white;
            background-color: #EAF0F1;
            letter-spacing: 0.5px;
            background: black;
        }

        footer p {
            margin: 0;
            font-size: 15px;
        }
    </style>
</head>

<body style="background-color : #111cf0;">
  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
    }
  }
  ?>

  <?php
  include 'navbar.php';
  ?>

  <h2 class="text-center pt-4" style="color : black;">Register User</h2>
  <br>

  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <img class="img-fluid" src="img/user3.png" style="border: none; border-radius: 50%;">
          </div>
          <div class="screen-body-item">
            <form class="app-form" method="post">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
              </div>
              <br>
              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2">
    <p>&copy 2021. Made by <b>Saurabh Sharma</b> <br></p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
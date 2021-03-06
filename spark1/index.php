
<!--  Index Page -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Banking System</title>

</head>

<body>
  <?php
  include 'navbar.php';
  ?>
  <img src="bank1.jpg" alt="" height="600px" width="100%">
  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h3>Welcome to</h3>
          <h1>sparks bank</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="img/bank1.jpg" class="img-fluid pt-2" width="300px">
      </div>
    </div>

    <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
        <img src="img/bank1.jpg" class="img-fluid" width="200px">
  </br>
        <a href="createuser.php"><button>Create customer</button></a>
      </div>
      <div class="col-md act">
        <img src="img/b1.jpg" class="img-fluid" height="50%" width="50%">
  </br>
        <a href="transfermoney.php"><button>transfer</button></a>
      </div>
      <div class="col-md act">
        <img src="img/b2.jpg" class="img-fluid" width="50%" height="50%">
  </br>
        <a href="transactionhistory.php"><button>view Transaction history</button></a>
      </div>
    </div>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
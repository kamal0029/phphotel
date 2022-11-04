<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
    crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <br>
    <br>
    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">KEC</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    <div class="navbar-nav">
                        <a href="http://localhost/product/index.html" class="nav-item nav-link active">Add Customer</a>
                        <a href="http://localhost/product/index.php" class="nav-item nav-link active">Customer Details</a>
                        <a href="find.html" class="nav-item nav-link">Find Customer</a>
                        <a href="delete.html" class="nav-item nav-link">Delete Customer</a>
                        <a href="http://localhost/product/joinroom.php" class="nav-item nav-link">Room Details</a>
                        <a href="http://localhost/product/joinmanage.php" class="nav-item nav-link">Room Management </a>
                        <a href="http://localhost/product/room.html" class="nav-item nav-link active">Add room</a>
                    </div>
                    <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-sm-2" placeholder="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </br>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";
   $r_no = $_POST['r_no'];
   $r_type= $_POST['r_type'];
     if($r_no == "" || $r_type == ""){
         die("Please enter the fields!");
     }
  $conn = new mysqli($servername, $username,$password,$dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "insert into room(room_no,room_type) values('".$r_no."', '".$r_type."')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
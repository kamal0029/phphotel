header('Access-Control-Allow-Origin: http://localhost:3000');

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
<style>
.dbresult,.dbresult td,.dbresult th {
border : 1px solid black ;
border-collapse : collapse ;
padding : 8px ;
}
.dbresult {
width :800px;
margin :auto;
}
.dbresult tr:nth-child(odd){
background-color:#b2d0d6;
}
.dbresult tr:nth-child(even){
background-color:lightcyan;
}
</style >
<?php
$link=mysqli_connect('localhost','root','','product');
if (!$link) {
    die('connection error ' . mysqli_connect_error());
}
    $query ="select * from product_details ";
    $result=mysqli_query($link,$query);
    $numrow=mysqli_num_rows($result);
    if($numrow>0)
    {
echo '<table class="dbresult">';
echo '<tr>';
echo '<th>name</th>';
echo '<th>Aadhar</th>';
echo '<th>Phone</th>';
echo '<th>room no</th>';
while ($row =mysqli_fetch_assoc($result))
{
    echo '<tr>';
    echo '<td>' . $row['customer_name'].'</td>';
    echo '<td>' . $row['aadhar_number']. ' </td>';
    echo '<td>' . $row['phone_number']. '</td>';
    echo '<td>' . $row['room_no']. '</td>';
    echo '<tr>';
}
echo'</table>';
    }
else{
    echo("not found");

}

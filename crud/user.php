<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $category=$_POST['category'];
    $description=$_POST['description'];

    $sql="insert into crud (name,email,mobile,category,description) values ('$name','$email','$mobile','$category','$description')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <!--Navigation -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userhome.php">Entreprenuers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Success Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Businesses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Help</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End of navigation--->

    <div class="container my-5">

        <h2>Entreprenuer Registration</h2><br>

       <center>
        <button class="btn btn-warning" ><a href="display.php" class="text-dark">View Entreprenuer List</a></button>
        <button class="btn btn-secondary"><a href="display.php" class="text-light">Back</a></button>
      </center>
      <div class="p-3 mb-2 bg-light  text-dark">

        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete ="off" required="required" >
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete ="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" autocomplete ="off" required="required">
            </div>
            <div class="mb-3">
                <label>Category</label>
                <input type="text" class="form-control" placeholder="Enter Category" name="category" autocomplete ="off">
            </div>
            <div class="mb-3">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="description" autocomplete ="off">
            </div>
</div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </div>





  </body>
</html>
<?php
include 'connect.php';

$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$category=$row['category'];
$description=$row['description'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $category=$_POST['category'];
    $description=$_POST['description'];

    $sql="update crud set id=$id,name='$name',email='$email',mobile='$mobile',category='$category',description='$description' where id=$id";
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
    <title>Members</title>
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

        <h2>Entreprenuer Update</h2><br>

        <div class="p-3 mb-2 bg-light  text-dark">

        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete ="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete ="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" autocomplete ="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label>Category</label>
                <input type="text" class="form-control" placeholder="Enter Category" name="category" autocomplete ="off" value=<?php echo $category;?>>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter Description" name="description" autocomplete ="off" value=<?php echo $description;?>>
            </div>

</div>


            <button type="submit" class="btn btn-success" name="submit">Update</button>
            <button class="btn btn-secondary"><a href="display.php" class="text-light">Back</a></button>
        </form>
    </div>





  </body>
</html>
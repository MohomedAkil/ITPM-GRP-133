<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprenuer List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    

</head>
<body>
<script>
        window.jsPDF = window.jspdf.jsPDF;
      var docPDF = new jsPDF();
      function print(){
      var elementHTML = document.querySelector("#printTable");
      docPDF.html(elementHTML, {
      callback: function(docPDF) {
        docPDF.save('HTML Linuxhint web page.pdf');
      },
      x: 15,
      y: 15,
      width: 170,
      windowWidth: 650
      });
      }
</script>

<div id="printTable">


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

    <div class="container">

        <h2>Entreprenuer's Dashboard</h2><br>
        
        <div class="p-3 mb-2 bg-light  text-dark">

        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add New Member</a></button>

        </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Member ID</th>
      <th scope="col">Entreprenuer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
        $sql="select * from crud";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $category=$row['category'];
                $description=$row['description'];

                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$category.'</td>
                <td>'.$description.'</td>

                <td>
                    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
              </tr>';
            }     
        }
    ?>
</table>
      </div>

<button class="btn btn-warning my-5" id="printButton" onclick="print()">Download Records</button>
<button class="btn btn-secondary my-5"><a href="userhome.php" class="text-light">Back to Home</a></button>




    </div>
    </div>
</body>
</html>
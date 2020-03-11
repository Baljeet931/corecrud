<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 bg-primary text-light">
               <?php
               echo $_SESSION['email'];
               if($_SESSION['email'])
                  {
                ?>
                    <h1 class="text-center">DASHBOARD<a href="logout.php" class=" btn btn-danger float-right">logout</a></h1>
                <?php
                  }
                  else
                  {
                      header("location:index.php");
                  }
               ?>
           </div>
       </div>
       <div class="row">
           <a href="dashboard.php" class="btn btn-primary mt-2 ml-3">HOME</a>
       </div>
       <div class="row">
           <div class="col-md-3 mt-2">
               <a href="?a=add" class="btn btn-success btn-block">ADD POST</a>
               <a href="?a=show" class="btn btn-success btn-block">SHOW POST</a>
           </div>
           <div class="col-md-9">
               <?php
                  if(isset($_GET['a']))
                  {
                      $a=$_GET['a'];
                      if($a=="add")
                      {
                          include("addpost.php");
                      }
                      if($a=="show")
                      {
                          include("showpost.php");
                      }
                  }
              ?>
           </div>
       </div>
   </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
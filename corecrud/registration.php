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
         <div class="col-md-2">
             <a href="index.php" class="btn btn-primary">BACK</a>
         </div>
         <div class="col-md-8">
             <h1 class="text-center text-primary">REGISTRATION FORM</h1>
             <form action="" method="post">
                 <label for="">Name</label>
                 <input type="text" name="name" placeholder="enter name here" class="form-control">
                 <label for="">Email-ID</label>
                 <input type="email" name="email" placeholder="enter email here" class="form-control">
                 <label for="">Password</label>
                 <input type="password" name="password" placeholder="enter password here" class="form-control">
                 <label for="">Confirm-Password</label>
                 <input type="password" name="password1" placeholder="enter confirm password" class="form-control">
                 <label for="">Phone No.</label>
                 <input type="text" name="phone" placeholder="enter phone no. here" class="form-control">
                 <button type="submit" class="btn btn-success mt-3" name="submit">SUBMIT</button>
                 <button type="reset" class="btn btn-danger mt-3">RESET</button>
             </form>
         </div>
         <div class="col-md-2"></div>
     </div>
 </div>
    <?php
    $connection=mysqli_connect("localhost","root","","corecrud");
    if(isset($_POST['submit']))
    {
     extract($_POST);
        if($password==$password1)
        {
            $password=md5($password);
            $query=mysqli_query($connection,"insert into login(name,email,password,phone)values('$name','$email','$password','$phone')")or die(mysqli_error($connection));
            header("location:index.php");
            echo "Registration Successfully Done";
        }
        else
        {
            header("location:registration.php");
            echo "password does not matched";
        }
     
    }
    
    
    
    
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
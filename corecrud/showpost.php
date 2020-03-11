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
   <table class="table table-hover">
       <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>CATEGORY</th>
           <th>DESCRIPTION</th>
           <th>IMAGE</th>
           <th>CREATED_AT</th>
           <th>EDIT</th>
           <th>DELETE</th>
       </tr>
    
    <?php
    $connection=mysqli_connect("localhost","root","","corecrud");
    $query=mysqli_query($connection,"select * from post") or die(mysqli_error($connection));
    while($data=mysqli_fetch_assoc($query))
    {
    
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['category']; ?></td>
        <td><?php echo $data['description']; ?></td>
        <td><img src='image/<?php echo $data['image'];?>' height="100px"></td>
        <td><?php echo $data['created_at']?></td>
        <td><a href="edit.php?edit=<?php echo $data['id'];?>" class="btn btn-warning">EDIT</a></td>
        <td><a href="delete.php?del=<?php echo $data['id'];?>" class="btn btn-danger">DELETE</a></td>
        
    </tr>
    <?php
    }
    ?>
    </table>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
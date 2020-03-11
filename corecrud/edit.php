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

<?php
$connection=mysqli_connect("localhost","root","","corecrud");
if(isset($_GET['edit']))
{
    $edit=$_GET['edit'];
    $query=mysqli_query($connection,"select * from post where id='$edit'") or die(mysqli_error($connection));
    $data=mysqli_fetch_assoc($query);
}
?>
<div class="conatiner">
    <div class="row">
        <div class="col-md-2">
          <a href="dashboard.php" class="btn btn-success mt-1 ml-1">GO BACK</a>
        </div>
        <div class="col-md-8">
         <h1 class="text-center text-primary">EDIT FORM</h1>
         <form action="" method="post" enctype='multipart/form-data'>
            <label for="">Post Name</label>
            <input type="text" name="name" value="<?php echo $data['name'];?>" class="form-control">
            <label for="">Post Category</label><br>
            <select name="category" id="">
              <option value="">Category</option>
              <option value="games" 
              <?php if($data['category']=='games')
               {
                echo "selected";
               }?>>
             Games</option>
              <option value="news"
              <?php if($data['category']=='news')
               {
                echo "selected";
               }?>>
               News</option>
              <option value="politics"
              <?php if($data['category']=='politics')
               {
                echo "selected";
               }?>
              >politics</option>
              <option value="social"
              <?php if($data['category']=='social')
               {
                echo "selected";
               }?>
              >Social</option>
              <option value="other"
              <?php if($data['category']=='other')
               {
                echo "selected";
               }?>
              >other</option>
            </select><br>
    <label for="">Post Description</label>
    <textarea name="description" id="" cols="30" rows="10" placeholder="enter post description here" class="form-control"><?php echo $data['description'];?></textarea>
    <label for="">Post Image</label><br>
    <img src='image/<?php echo $data['image'];?>' height="50" width="50">
    <p>Do You Want To Change ?</p>
    <input type="file" name="image" class="form-control">
    <button type="submit" name="submit" class="btn btn-success mt-2">UPDATE</button>
    <button type="reset" class="btn btn-danger mt-2 ml-2">RESET</button>
</form>
    </div>
        <div class="col-md-2"></div>
    </div>
</div>
    <?php
    if(isset($_POST['submit']))
    {
        extract($_POST);
        $imagename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        
        if($imagename==null or empty($imagename))
        {
         if(mysqli_query($connection,"update post set name='$name', category='$category', description='$description' where id='$edit'") or die(mysqli_error($connection)))
        {
            header("location:dashboard.php?a=show");
        }
        }
        else
        {
        
        move_uploaded_file($tempname,"image/$imagename");
        if(mysqli_query($connection,"update post set name='$name', category='$category', description='$description', image='$imagename' where id='$edit'") or die(mysqli_error($connection)))
        {
            header("location:dashboard.php?a=show");
        }
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

<?php
$connection=mysqli_connect("localhost","root","","corecrud");
if(isset($_GET['del']))
{
    $delete=$_GET['del'];
    if(mysqli_query($connection,"delete  from post where id='$delete'") or die(mysqli_error($connection)))
    {
        header("location:dashboard.php?a=show");
    }
}


?>
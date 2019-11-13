<html>
<style>
.container
{
    width:350px;
    height:350px;
    background-color:black;
}
</style>
<body>
    <div class="container">
     <?php
    include("connection.php");
    session_start();
    $id=$_SESSION['id'];
    $sql="select image from tbl_reg where lid=$id";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
    $image="uploads/".$row['image'];
    echo "<img src=$image>";
    
    ?>
    </div>
       
<body>
</html>
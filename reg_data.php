<?php
        $con=mysqli_connect("localhost","root","","sampledb");
        $name=$_POST['n1'];
        $address=$_POST['n2'];
        $phone=$_POST['phone'];
        $email=$_POST['emailaddres'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="select * from tbl_login where username='$username' and password='$password'";
        echo $sql;
        $result=mysqli_query($con,$sql);
        ?>
        <script>var b=0;</script>
        <?php
        if(mysqli_num_rows($result)>0)
        {
            ?>
            <script> var b=1;
            alert("registration already exist ");
            location.href="SIGNUP.html";</script>
            <?php
        }
        else
        {
            $sql1="insert into tbl_login (username,password) values ('$username','$password')";
            mysqli_query($con,$sql1);
            $pk=mysqli_insert_id($con);
            $sql2="insert into tbl_reg (lid,name,address,email,phone) VALUES ($pk,'$name','$address','$phone','$email')";
            echo($sql2);
            mysqli_query($con,$sql2);
             header("location:login.html");
            
        }
        
        mysqli_close($con)
        ?>
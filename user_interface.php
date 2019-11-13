<?php
            $con=mysqli_connect("localhost","root","","sampledb");
            if(isset($_POST['im']))
            {
                $con=mysqli_connect("localhost","root","","sampledb");
                session_start();
                echo $_SESSION['uname'];
              
            }
            ?>


<html>
    <head>
        <title>
            userinterface
        </title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <style>
        .topstyle
        {
            width:100%;
            height:15%;
            opacity:.5;
            background-color:rgb(161, 174, 179);
            position: relative;
            top:5%;
        }
        p
        {
            color: rgb(19, 18, 18);
            text-align: left;
            position: absolute;
            top:10%;
            left:10%;
           font-family: cursive;
        }
        .icon
        {
            width:5%;
            height: 5%;
            position: absolute;
            top:5%;

        }
        
    </style>
    
           
       
    <body>
        
           
        <div class="user">
            <div class="topstyle"></div>
            <p><b>GOOD SHEPHERD RETREAT CENTER</b></p>
            <img src="mic.png" style="width:10%;height: 15%;position: absolute;top: 5%;">
            <form  method="POST">
            <input type="image" src="logicon.png" class="rounded-circle" style="position:absolute;left:85%;top:5%;height:15%;width:8%;" name="im" onmousemover="myFunction()"> 
            </form>
        <div class="col-sm-4" style="background-color: black; border-radius:90px;position:absolute;top:22%;left:5%; width:15%;height:20%;text-align:center; padding:25px 20px;">
        
            <a href="user_interface.php" style="font-size:40px;">Home</a>
        </div>
        <div class="col-sm-4" style="background-color: black; border-radius:90px;position:absolute;top:22%;left:22%; width:15%;height:20%;text-align:center; padding:30px 30px;">
        
            <a href="booking.php" style="font-size:40px;">Booking</a>
        </div>
        <div class="col-sm-4" style="background-color: black; border-radius:90px;position:absolute;top:22%;left:39%; width:15%;height:20%;text-align:center; padding:30px 25px;">
        
             <a href="feedback.php" style="font-size:40px;">Feedback</a>
         </div>
         <div class="col-sm-4" style="background-color: black; border-radius:90px;position:absolute;top:22%;left:56%; width:15%;height:20%;text-align:center; padding:35px 30px;">
        
        <a href="gallary.html" style="font-size:40px;">Gallary</a>
    </div>
    <div class="col-sm-4" style="background-color: black; border-radius:90px;position:absolute;top:22%;left:75%; width:15%;height:20%;text-align:center; padding:35px 30px;">
        
        <a href="logout.php" style="font-size:40px;">Logout</a>
    </div>
        </div>
        <div class="bottom">
            
        </div>
    </body>
</html>
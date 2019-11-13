<!DOCTYPE html>

<html>
<head>
<title>SIGNUP</title>
<style>
body
{
background-repeat:no-repeat;
background-size: cover;
}
table
{
font-family:monospace;
font-size:15px;
}
    .error{
  color: red;
  font-size: 12px;
}
</style>
  <script>
          function myname()
          {
          var n=document.getElementById("txt1");
          var letter=/[A-Za-z]+$/;
          if(n.value == "")
          {
            document.getElementById("consid").innerHTML = "<span class='error'>Please enter a valid name</span>";
                txt1.focus();
                return false;
        }
        else if(!n.value.match(letter))
          {
            document.getElementById("consid").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                txt1.focus();
                return false;
          }
          else if(n.value.match(letter))
          {
              document.getElementById("consid").innerHTML = "<span class='error'></span>";
              return false;
          }
        }
        function myaddress()
        {
          var n=document.getElementById("textarea1");
          var letter=/[A-Za-z]+$/;
          if(n.value == "")
          {
            document.getElementById("consid3").innerHTML = "<span class='error'>Please enter a valid Address</span>";
            textarea1.focus();
                return false;
        }
        else if(!n.value.match(letter))
          {
            document.getElementById("consid3").innerHTML = "<span class='error'>This is not a valid address. Please try again</span>";
            textarea1.focus();
                return false;
          }
          else if(n.value.match(letter))
          {
              document.getElementById("consid3").innerHTML = "<span class='error'></span>";
              return false;
          }
        }
function myphno()
        {
          var n4=document.getElementById("phno");
          var p=/([789][0-9]{9})+$/;
          if(n4.value == "")
          {
            document.getElementById("consid4").innerHTML = "<span class='error'>Please enter a valid Phone number</span>";
            phno.focus();
                return false;
        }
        if(!n4.value.match(p))
        {
          document.getElementById("consid4").innerHTML = "<span class='error'>This is not a valid Phone number. Please try again</span>";
          phno.focus();
              return false;
        }
        else if(n4.value.match(p))
            {
              document.getElementById("consid4").innerHTML = "<span class='error'></span>";
                  return false;
            }
        }
       function myemail()
        {
          var n=document.getElementById("inputEmail");
          var e=/\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          if(n.value == "")
          {
            document.getElementById("consid3").innerHTML = "<span class='error'>Please enter a valid email Address</span>";
            inputEmail.focus();
                return false;
        }
        else if(!n.value.match(e))
          {
            document.getElementById("consid3").innerHTML = "<span class='error'>This is not a valid email address. Please try again</span>";
            inputEmail.focus();
                return false;
          }
        else if(n.value.match(e))
            {
              document.getElementById("consid3").innerHTML = "<span class='error'></span>";
                  return false;
            }
        }
        function myusername()
        {
          var n5=document.getElementById("txt6");
          var u=/[a-zA-Z]+$/;
          if(n5.value == "")
          {
            document.getElementById("consid5").innerHTML = "<span class='error'>Please enter a valid username Address</span>";
            txt6.focus();
                return false;
        }
        if(!n5.value.match(u))
        {
          document.getElementById("consid5").innerHTML = "<span class='error'>This is not a valid Username. Please try again</span>";
              txt6.focus();
              return false;
        }
        else if(n5.value.match(u))
            {
              document.getElementById("consid5").innerHTML = "<span class='error'></span>";
                  return false;
            }
        }
        function mypassword()
        {
          var n6=document.getElementById("txt7");
          var ps=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
          if(n6.value == "")
          {
            document.getElementById("consid7").innerHTML = "<span class='error'>Please enter a valid password</span>";
            txt7.focus();
                return false;
        }
        if(!n6.value.match(ps))
        {
          document.getElementById("consid7").innerHTML = "<span class='error'>This is not a valid Username. Please try again</span>";
              txt7.focus();
              return false;
        }
        else if(n6.value.match(ps))
            {
              document.getElementById("consid7").innerHTML = "<span class='error'></span>";
                  return false;
            }
        }
        function mycpassword()
        {
          var n7=document.getElementById("txt7");
          var n8=document.getElementById("txt8");
          if(n8.value == "")
          {
            document.getElementById("consid8").innerHTML = "<span class='error'>Please enter a valid password</span>";
            txt8.focus();
                return false;
        }
        if(n7.value==n8.value)
        {

          document.getElementById("consid8").innerHTML = "<span class='error'></span>";
              return false;
        }
        else {
          document.getElementById("consid8").innerHTML = "<span class='error'> Password Missmatch</span>";
              txt8.focus();
              return false;
        }
  }
  </script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="icon1.jpg">
<a href="blah.html"><img src="mic.png" width="110" height="110"></a>
<div class="avatar">
   <form  method="POST">
                 <center>
                 REGISTRATION FORM
                 <center><a href="login.html">Login Page</a></center>
                 <table>
                  <tr>
                  <td><label for="txt1">First name</label></td>
                  <td><input type="text" id="txt1" name="n1" class="form-control" placeholder="First name" required autofocus="autofocus" onblur="myname()"><br><span id = "consid"></span></td>
                  </tr>
                  <tr>
                      <td> <label for="textarea1">Address</label></td>
                      <td> <input type="textarea"  id="textarea1" name="n2" class="form-control" placeholder="Address" required onblur="myaddress()"><br>
                      <span id = "consid2"></span></td>
                  </tr>
                  <tr>
                      <td><label for="inputEmail">Email address</label></td>
                      <td><input type="email" id="inputEmail" class="form-control" name="emailaddres" placeholder="Email address" data-toggle="tooltip" data-placement="right" title="eg:abc@gmail.com" required onblur="myemail()"><br>
                      <span id ="consid3"></span></td>
                  </tr>
             <tr>
                 <td>
                   <label for="phno">Phone</label>  
                 </td>
                 <td>
              <input type="text" id="phno" class="form-control" name="phone" placeholder="Phone" required onblur="myphno()"><br><span id = "consid4"></span></td>
             </tr>   
                 <tr>
                    <td>
                     <label for="txt6">UserName </label> 
                    </td>
                     <td>
                         <input type="text"  id="txt6" class="form-control" name="username" placeholder="UserName" required onblur="myusername()"><br>
                          <span id = "consid5"></span>
                     </td>
                 </tr>
                 <tr>
                     <td>
                        <label for="txt7">Password</label> 
                     </td>
                     <td>
                        <input type="password" id="txt7" class="form-control" name="password" placeholder="Password" data-toggle="tooltip" data-placement="right" title="Password must contain atleast a captial letter,small letter,special characters and number" required onblur="mypassword()"><br>
                        <span id = "consid7"></span>
                     </td>
                 </tr>  
                 <tr>
                     <td>
                        <label for="txt8">Confirm password</label>
                     </td>
                     <td>
                       <input type="password" id="txt8" class="form-control"  placeholder="Confirm password" data-toggle="tooltip" data-placement="right" title="Password must contain atleast a captial letter,small letter,special characters and number" required onblur="mycpassword()"><br>
                       <span id = "consid8"></span>  
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2">
                         <center><button class="btn btn-primary btn-block" href="loginstudent.html" name="button">Register</button></center>
                     </td>
                 </tr>
          </table>
       </center>
        </form>
      </div>
     
      
    </body>
</html>

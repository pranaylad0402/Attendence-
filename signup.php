


<?php

include('connect.php');

  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          throw new Exception("Email cann't be empty.");
        }

        if(empty($_POST['uname'])){
           throw new Exception("Username cann't be empty.");
        }

        if(empty($_POST['pass'])){
           throw new Exception("Password cann't be empty.");
        }
        
        if(empty($_POST['fname'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['phone'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['type'])){
           throw new Exception("Username cann't be empty.");
        }

        $result = mysqli_query($conn,"insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
        $success_msg="Signup Successfully!";

  
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-image:url(https://www.phptpoint.com/wp-content/uploads/2018/08/abhi12.png);
  padding: 20px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #000;
  padding: 5px;
  text-align: center;
  color: white;
}
img {
  border-radius: 4px;
  padding: 5px;
  height:40px;
  width: 40px;
}
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 30px;
    font-weight: bold !important;
    text-align: left !important;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>

  <h1>Online Attendance Management System</h1>

</header>

<div class="content">

  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
    <!-- Old version started -->
    <!--<form action="" method="post">
      
      <table>
        
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname"></td>

        </tr>
        <tr>
          <td>Password</td>
          <td><input type="Password" name="pass"></td>
        </tr>

        <tr>
          <td>Full Name</td>
          <td><input type="text" name="fname"></td>
        </tr>

        <tr>
          <td>Phone Number</td>
          <td><input type="text" name="phone"></td>
        </tr>

        <tr>
          <td>Type</td>
          <td>      <select name="type">
        <option name="teacher" value="teacher">Teacher</option>
        <option name="student" value="student">Student</option>
      </select></td>
        </tr>

        <tr><td><br></td></tr>
        <tr>
          <td></td>
          <td><input type="submit" name="signup" value="Signup"></td>
        </tr>

      </table>
    </form>--><!-- Old version ended -->

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Signup</legend>

      <div class="form-group">

          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="text" name="email"  class="form-control" id="input1" placeholder="your email" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="choose username" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="password" name="pass"  class="form-control" id="input1" placeholder="choose a strong password" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="your full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Phone Number</label>
          <div class="col-sm-7">
            <input type="text" name="phone"  class="form-control" id="input1" placeholder="your phone number" />
          </div>
      </div>


      <div class="form-group" class="radio">
      <label for="input1" class="col-sm-3 control-label">Role</label>
      <div class="col-sm-7">
        <label>
          <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
        </label>
            <label>
          <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
        </label>
                
        <!-- <label>
          <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
        </label> -->
      </div>
      </div>
</fieldset>
      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Signup" name="signup" />

    </form>
  </div></div><br>
  <footer>
    <br>
    <p><strong>Already have an account? <a href="index.php">Login</a> here.</strong></p>
</footer>


</center>

</body>
</html>

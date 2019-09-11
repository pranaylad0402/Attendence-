


<?php 
  
  include('connect.php');


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

  <h1>Online Attendance Management System MGMCET</h1>


</div>

</header>

<center>

<div class="content">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Reset</legend>
      <div class="form-group">

          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="your email" />
          </div>
      </div>
</fieldset>
      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Go" name="reset" />
    </form>

      <br>


      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['email'];
          $row = 0;
          $query = mysqli_query($conn,"select password from admininfo where email = '$test'");
          $row = mysqli_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p>Copyright By Pranay Lad</p></div>

<?php
          }

          else{

            $query = mysql_query("select password from admininfo where email = '$test'");
            $i =0;
            while($dat = mysql_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: left;">Hi there!<br>You requested for a password recovery. You may <a href="index.php">Login here</a> and enter this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark><br>Regards,<br>Online Attendance Management System 1.0</p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>
     <p><strong>Already have an account? <a href="index.php">Login</a> here.</strong></p>
</center>

   

</body>
</html>

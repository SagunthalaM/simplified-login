<?php
//connect to database
$db=mysqli_connect("localhost","root","","mysite");
  if(isset($_POST['login_btn'])){
      $username=($_POST['username']);
      $password=($_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      if($result){
        if( mysqli_num_rows($result)>=1){
            header("Location:table.php");
        }else{
            echo "<h1>Username and Password combiation incorrect</h1>";
       }
      }
  }
?>

<!--<div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">Login, Registration, Logout</h1><br>
  </hgroup>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav center">
        <li><a href="register.php">SignUp</a></li>
      </ul>

    </div>
  </div>
</nav>

<main class="main-content">
 <div class="col-md-6 col-md-offset-2">

<form method="post" action="login.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In"></td>
     </tr>
 
</table>
</form>
</div>

</main>
</div>  -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
   <link rel="icon" href="favicon.ico">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<div style="background-image:url('banner.png');background-repeat:no-repeat;background-size:100% 100%;bottom:0;top:0;left:0;right:0;position:absolute;" >

<h1 class=" bg-dark text-center text-white py-2  ">  Login Page </h1>
<div class="fs-5">
<br><br>
    <form action="login.php" method="post"
    class="container bg-light" 
    style="min-width:100px;width:70vh;border-radius:5px;padding:4%;">
    <label for="" class="form-label">UserName</label>
    <input type="text" class="form-control" name="username"
     placeholder="username" required><br>
    <label for="" class="form-label">Password</label>

    <input type="password"  class="form-control"  name="password"
     placeholder="password" required><br>
    <button type="submit"  class="form-control bg-primary text-white fs-5"
     name="login_btn"> Submit</button>
    <br>
      <div class="container" style="margin-left:17%;">No account? 
      <a href="register.php">Register here!</a></div>
    </form>
</div>
</div>

<a href="open-page.php" style="color:white;text-decoration:none;">

<div class="btn btn-dark " style="bottom:10px;right:10px;position:fixed;">
Logout
</div>
</a>
    
</body>
</html>
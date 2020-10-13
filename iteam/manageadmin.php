<?php
include("db.php");
include("fonctions.php");
include("header/header.php"); 


if(isset($_POST['submit_admin']))
{
    if (isset($_POST['username'])) 
    {
        $user = $_POST['username'];
    }

    if (isset($_POST['password'])) 
    {
        $pass = $_POST['password'];
    }

    $sql= "SELECT * FROM user";
    $result = query($sql);
    $row = fetch_array($result);
    $username = $row['username'];
    $password = $row['password'];

    if($user == $username && $pass == $password)
    {
        header('Location: manageadminpage.php');
    }
    else
    {
        set_message("Username or Password is incorrect. Please try again", "danger");
    }

    return $username;
}           



?>
<br><br><br><br><br>
<center>
<h2>ADMIN ITEAM</h2><br><br>
<form id="member-form" method="post" role="form">
  <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="Username" style="width:50%" required>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Password" style="width:50%" required>
  </div>
  <button type="submit" name="submit_admin" class="btn btn-primary">Submit</button>
</form>
</center>


<?php
require_once "server.php";
if(isset($_POST['submit'])){
  $num=$data->login($_POST['email'],$_POST['password']);
  echo mysqli_fetch_array($num)>0 
  ?'<script>window.location.href="home.php"</script>'
  :'<script>alert("username or password incorrect")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
  <div>
      <label for="">Email</label>
      <input type="email" name="email">
    </div>
    <div>
      <label for="">Password</label>
      <input type="password" name="password" id="">
    </div>
    <button type="submit" name="submit">submit</button>
    <a href="register.php">ลงทะเบียน</a>
  </form>
</body>
</html>
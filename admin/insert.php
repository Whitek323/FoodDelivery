<?php
require_once "../server.php";
if(isset($_POST['submit'])){
  $data->insert($_POST['username'],$_POST['email'],$_POST['password'],$_POST['status']);
  echo '<script>window.location.href="index.php"</script>';
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
  <a href="index.php">Go back</a>
  <form action="" method="post">
    <div>
      <label for="">Username</label>
      <input type="text" name="username" require>
    </div>
    <div>
      <label for="">Email</label>
      <input type="email" name="email" id="" require>
    </div>
    <div>
      <label for="">Password</label>
      <input type="password" name="password" id="" require>
    </div>
    <div>
      <label for="">Status</label>
      <select name="status" id="">
        <option value="user">User</option>
        <option value="rider">Rider</option>
        <option value="store">Store</option>
        <option value="admin">Admin</option>
      </select>
    </div>
    <button type="submit" name="submit">submit</button>
    <a href="index.php">เข้าสู่ระบบ</a>
  </form>
</body>
</html>
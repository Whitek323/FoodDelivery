<?php
include_once('../server.php');
$update = new Dfa;
if(isset($_POST['submit'])){
  $update->update($_GET['id'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['allow']);

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
  <h1>Update Page</h1>
  <hr>
  <?php
  $user_id = $data->fetchonerecord($_GET['id']);
  while ($row = mysqli_fetch_array($user_id)) {
  ?>
    <form action="" method="post">
      <div>
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo $row['username']?>">
      </div>
      <div>
        <label for="">Email</label>
        <input type="email" name="email" id="" value="<?php echo $row['email']?>">
      </div>
      <div>
        <label for="">Password</label>
        <input type="text" name="password" id="" value="<?php echo $row['password']?>">
      </div>
      <div>
        <label for="">allow</label>
        <select name="allow" id="">
          <option value="" selected disabled hidden >choose here</option>
          <option value="Y">allow</option>
          <option value="N">not allow</option>
        </select>
      </div>
    <?php
  }
    ?>
    <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>
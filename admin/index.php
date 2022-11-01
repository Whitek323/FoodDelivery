<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Admin DashBoard</h1>
  <hr>
  <a href="insert.php">Insert</a>
  <table border=1>
    <thead>
      <th>#</th>
      <th>username</th>
      <th>email</th>
      <th>password</th>
      <th>status</th>
      <th>allow</th>
      <th colspan="2">action</th>
    </thead>
    <tbody>
      <td>
        <?php
        require_once '../server.php';
        $x = mysqli_query($data->dbcon, "SELECT * FROM user");
        while ($row = $x->fetch_assoc()) {
        ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><?php echo $row['allow'] ?></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
          </tr>
        <?php
        }
        ?>
      </td>
    </tbody>
  </table>
  <a href="#">Logout</a>
</body>

</html>
<?php
class Dfa{
  function __construct()
  {
    $conn = mysqli_connect("localhost:3307","root","","dfa");
    $this->dbcon = $conn;
    if(mysqli_connect_error()){
      echo "eror";
    }
  }

  function login($a,$b){
    return mysqli_query($this->dbcon,
    "SELECT * FROM user WHERE email = '$a' AND password = '$b'");
  }
  function insert($a,$b,$c,$d){
    return mysqli_query($this->dbcon,
    "INSERT INTO user(username,email,password,status) VALUES('$a','$b','$c','$d')");
  }

  function fetchonerecord($id){
    return mysqli_query($this->dbcon,
    "SELECT * FROM user WHERE id = $id");
  }

  function update($id,$a,$b,$c,$d){
    return mysqli_query($this->dbcon,
    "UPDATE user SET username='$a',email='$b',password=$c,allow='$d' WHERE id = '$id'");
  }

  function delete($a){
    return mysqli_query($this->dbcon,
    "DELETE FROM user WHERE id = $a");
  }
}
$data = new Dfa;
?>
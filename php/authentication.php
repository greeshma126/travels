<?php


include "connection.php";
$userid=$_POST['userid'];
$password=$_POST['password'];

session_start();
$_SESSION['user-id']=$userid;


$sql1 = "SELECT * FROM admin where admin_id='$userid' and  admin_password='$password' ";

$result = $conn->query($sql1);
if ($result->num_rows > 0) {
   header('Location:../php/admin-page.php');
}
else{
   $sql = "SELECT * FROM registration where userid='$userid' and password='$password' ";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      header('Location:../php/index.php');
   } else {
      echo "<script>
      window.location.href='../templates/login.html';
         alert('incorrect credentials!!!');
      </script>
      ";
   }

}


$conn->close();

?>
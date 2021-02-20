<?php 
include 'config.php';
$loginErr = $dean_id = $dean_pass = "";

if(isset($_POST['admin_login'])){
session_start();
        $loginusername = $_POST['admin_id'];
      $loginpassword = $_POST['admin_pass'];
    $result = mysqli_query($conn , "SELECT * FROM admin WHERE username = '$loginusername' AND password='$loginpassword'"); 
    $_SESSION['username'] = $loginusername; 
    $usr = $_SESSION['username'];
        $count = mysqli_num_rows($result);
    if($count > 0 ){
        $row = mysqli_fetch_array($result);
        $_SESSION['admin_username'] = $loginusername;
        echo '<script>alert("Login Successful")
        location.href="../admino/dashboard.php" </script>';
                                }else{
      
      $loginErr = "<div class='alert alert-warning' style='color:red;'>Username or Password Incorrect</div>";
    
    }
    
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
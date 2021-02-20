<?php 
$loginErr = $dean_id = $dean_pass = "";
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'aes';

    $conn = mysqli_connect($db_host, $db_user, $db_pass) or die("Connection failed");
    mysqli_select_db($conn, $db_name) or die("Database connection failed");

if(isset($_POST['admin_login'])){
session_start();
        $loginusername = $_POST['user_id'];
    $result = mysqli_query($conn , "SELECT * FROM admin WHERE username = '$loginusername' AND password='$loginpassword'"); 
    $_SESSION['username'] = $loginusername; 
    $usr = $_SESSION['username'];
        $count = mysqli_num_rows($result);
    if($count > 0 ){
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $loginusername;
        echo '<script>alert("Login Successful")
        location.href="../agba-do/agba-dashboard.php" </script>';
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
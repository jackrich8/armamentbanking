<?php 
include 'connect.php';

    if(isset($_POST['submit'])){
        $userLogin = $_POST['userLogin'];
        $userPass = $_POST['userPass'];

            $sql = "SELECT * FROM user WHERE username='$userLogin' AND password='$userPass'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);

                if($row > 0){
                    echo 0;
                    $_SESSION['username'] = $userLogin;
                }
                else{

                    echo 1;
                }
    }

?>
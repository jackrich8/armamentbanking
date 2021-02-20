<?php 
include '../connect.php';
$usr = $_SESSION['username'];

    if(isset($_POST['submit'])){

        $oldPin = $_POST['oldPin'];
        $newPin = $_POST['newPin'];
        $reNewPin = $_POST['reNewPin'];


        $sql = "SELECT * FROM user WHERE username='$usr'";
                $query = mysqli_query($conn, $sql);
                $fetch = mysqli_fetch_array($query);
                    echo $fetch['pin'];
                if($oldPin == $fetch['pin']){
                    if($newPin == $reNewPin){
                        $sql1 = "UPDATE user SET pin='$newPin' WHERE username='$usr'";
                        $query1 = mysqli_query($conn, $sql1);

                    if($query1){
                        // echo '<div class="alert alert-success">Transfer Pin Updated Successfully</div>';
                        echo 0;
                    }
                    else{

                        // echo '<div class="alert alert-danger">Error</div>';
                        echo 1;
                    }
                }else{
                    // echo '<div class="alert alert-danger">Password doesnt match</div>';
                    echo 2;
                }
            }
                else{
    
                    // echo '<div class="alert alert-danger">Wrong Old Pin</div>';
                    echo 3;
                }

    }

?>
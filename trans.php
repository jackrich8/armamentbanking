<?php 
include 'connect.php';

    if(isset($_POST['submit'])){

        $act_num = $_POST['act_num'];
        $bankName = $_POST['bankName'];
        $country = $_POST['country'];
        $amt = $_POST['amt'];

        if($act_num != "" || $bankName != "" || $country != "" || $amt != ""){
            $sql = "INSERT INTO trans (act_num, bankName, country, amt, date_time)
                        VALUES('$act_num', '$bankName', '$country', '$amt', now())";
                $query = mysqli_query($conn, $sql);

                if($query){
                    echo '<div class="alert alert-success">Information Saved Successfully</div>';
                }
                else{

                    echo '<div class="alert alert-danger">Error</div>';
                }
        }else{
            echo '<div class="alert alert-danger">Password doesnt match</div>';
        }
    }

?>
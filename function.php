<?php
function check_login ($conn)
{
    if(isset($_SESSION['user_name'])){
        $user_name = $_SESSION['user_name'];
        $query = "select * from patients where user_name = '$user_namwe' limit ";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_row($result)> 0) {
            $user_data - mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location : login.php");
    die;
}
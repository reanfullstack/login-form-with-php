<?php
    $conn = mysqli_connect('localhost', 'root', '', 'burgershop');
    $username = $_POST['username'];
    $newpassword = $_POST['newpassword'];

    if(isset($_POST['resetpassword'])){
        $sql = "UPDATE register SET password='$newpassword' WHERE username='$username'";
        $query = mysqli_query($conn, $sql);
        header('location: ./index.php');
    }
?>
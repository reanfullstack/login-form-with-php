<?php
    $conn = mysqli_connect('localhost', 'root','', 'burgershop');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE username ='$username'";
    $query= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    if(mysqli_num_rows($query) == 1){
        if($row['password'] == $password){
            header("location: ./burgershop.html");
        }else{
            echo "Please recheck your password again";
        }
    }else{
        echo "Invalid information, please try again"; 
    }
?>
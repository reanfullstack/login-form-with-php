<?php
    $conn = mysqli_connect('localhost', 'root', '', 'burgershop');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(isset($_POST['register'])){
        if($username && $password && $repassword){
            if($password == $repassword){
                $sql = "select username from register where username = '$username'";
                $query = mysqli_query($conn, $sql);
                if(mysqli_fetch_row($query) == 1){
                    echo "Account existed";
                }else{
                    $sql = "insert into register(username, password) values('$username', '$password')";
                    $query = mysqli_query($conn, $sql);
                    if($query){
                        // echo "Account created";
                        header('location: ./index.php');
                    }else{
                        echo "Fail to create account";
                    }
                }
            }else{
                // echo "try again";
                header('location: ./index.php');
            }
        }
    }
?>
<?php



$conn = mysqli_connect("localhost", "snap", "snap1647", "web_login");

    if(isset($_POST['register'])){
        $username = $_POST['user'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];



        $s = "select * from login where Username = '$username'";

        $result = mysqli_query($conn,$s);

        $num = mysqli_num_rows($result);

        if($num == 1){
            echo " Username Already Exists";
        }
        else{
            
        if(count($errors) == 0){
            $password = md5($password);
            $sql = "INSERT INTO login(Username,Password,Phone,Email) values('$username', '$password','$phone','$email')";
            mysqli_query($conn,$sql);
            header("location:login.html");
        }
        }





    }


?>

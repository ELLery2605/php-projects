<?php
if (isset($_POST["submit"])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $date = $_POST['date'];
   if (!empty($id) && !empty($name) && !empty($number)  && !empty($email)  && !empty($department)  && !empty($date) ){
    $link = mysqli_connect("localhost", "root", "", "bitscare");

        if($link==false){
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO bookings(id, name, number, email, department, date) VALUES ('$id', '$name', '$number', '$email', '$department', '$date')";
        if(mysqli_query($link,$sql)) {
            echo "Record inserted successfully";
        }else{
            echo "something went wrong";
        }
    }else{
        echo "please provide all information";
    }
}
?>

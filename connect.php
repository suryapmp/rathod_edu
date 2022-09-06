<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   


    //DATABASE CONNECTION

    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact (name, email, phone, subject, message)values(?,?,?,?)");
        $stmt->bind_param("ssis",$name, $email, $phone, $message);
        $stmt->execute();
        echo "Thank you We will get back soon...";
        $stmt->close();
        $conn->close();
   
    }
?>
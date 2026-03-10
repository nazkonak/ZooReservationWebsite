<?php 

include 'connect.php';

if(isset($POST['signUp'])){
    $firstName=$POST['fName'];
    $lastName=$POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $gender=$POST['cc'];

    $checkEmail="SELECT* From users where email ='$email' ";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Adress Already Exists";
    }
    else{
       $insertQuery = "INSERT INTO users(firtsName,lastName, email, password, cc)
                        VALUES($firstName,$lastName,'$email', '$password, $gender)";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }else{
                echo "Error: ".$conn->error;
            }
    }
}
if(isset($POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql= "SELECT * FROM users where email = '$email' and password = '$password' ";
    $result= $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
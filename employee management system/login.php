<div class=container-float></div>  




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php

$servername="";
$username="root";
$password="";
$dbname="crudki";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error connection".$conn->connect_error."<br>");
}else{
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];
    $sql="SELECT email, password FROM crud WHERE email='$email' ;";
    $result=$conn->query($sql);
    if($result){ 
        $row=$result->fetch_assoc();
        $emaildb=$row['e_mail'];
        $passworddb=$row['password'];
        
        if(password_verify($pwd,$passworddb)){
            echo"<script>
            window.alert('Log in sucessfull');
            window .location.href='view.php';
            </script>";
        }else{
            ?>
            <script>
                   window.alert("Invalid username or password");
                   window.history.back();
            </script>
            <?php
        }}}
        
        
?>
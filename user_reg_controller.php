<?php 
$db = mysqli_connect("localhost", "root", "", "php_blog_and_news_project");
if(isset($_POST['register'])){
    $username=$_POST['name'];
    $department=$_POST['dept'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['add'];
    $password=$_POST['pass'];
    
    $sql="insert into user values (id ,'$username','$department', '$email','$mobile','$address','$password')";
    $result=  mysqli_query($db, $sql);
       header('location: regis_success.php');
}
<?php 
$db = mysqli_connect("localhost", "root", "", "php_blog_and_news_project");
if(isset($_POST['login'])){
    $username=$_POST['name'];
   
    $email=$_POST['email'];
    
    $password=$_POST['pass'];
    
    $sql="select * from  user where  username='$username' and email= '$email' and  password ='$password'";
    $result=  mysqli_query($db, $sql);
    $row=  mysqli_fetch_array($result);
    
    
    if($row["email"]==$email && $row["email"]==$email){
          echo"You are a validated user.";}
    else
   {
    echo"Sorry, your credentials are not valid, Please try again.";

   }
}
?>
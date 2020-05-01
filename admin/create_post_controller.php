<?php

$conn = new mysqli("localhost", "root", "", "php_blog_and_news_project");
if(isset($_POST['btn-upload']))
{    
     $title=$_POST['title']; 
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="image_holder/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);

 $body=$_POST['body'];
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO post(title,filename,directory,body,date) VALUES('$title','$final_file','$folder','$body',now())";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='create_post_form.php?success';
        </script>
        <?php
 }
 else
 {
     ?>
  <script>
  alert('error while uploading file');
        window.location.href='create_post_form.php?fail';
        </script>
  <?php
 }
}
?>
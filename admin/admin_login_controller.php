<?php
       if (isset($_POST['login'])) {
	
        $name_set='nasim';
        $pass_set='dclove';
	$name = $_POST['name'];
        $pass = $_POST['pass'];
        
        echo $name;
        echo $pass;
        if($name_set==$name && $pass_set==$pass)
        {
        
            header('location: admin_main_page.php');
       
        }
        
 else {
            echo 'no wait, unsuccessful ';
 }
       }
       
       ?>
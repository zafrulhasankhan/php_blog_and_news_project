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
        
          echo 'login successfully';
       
        }
        
 else {
            echo 'no wait';
 }
       }
       
       ?>
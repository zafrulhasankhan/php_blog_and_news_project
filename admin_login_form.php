<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">
            <form action="admin_login_controller.php" method="POST">
                           <div class="username">
                               
                               <input type="text" name="name" placeholder="UserName" required="" class="name"/>
                           </div><br>
                             
                            
                            <div class="pass"><br>
								
			    
                            <input type="password" name="pass" placeholder="PassWord" required="" class="password" />
							</div>
                            
                             
                            <br><div class="st">
                                <button class="button button2" type="submit" name="login">Login</button>
                                
                            </div>
                            
                        </form>
        </div>
    </body>
</html>
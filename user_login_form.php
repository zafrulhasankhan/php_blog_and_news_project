
<!DOCTYPE html>
<html>

<head>
    <title>BootStrap Of Darkchocolate</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">  

    <style>
           
            
            body
            {
                background-image:url("image/manage_user.jpg");
                background-size: 270px 370px;
            }
        </style>
</head>

<body>
    
     <div class="main-wrapper">
         
         <br> <h2 class="title " align="center"><b><u>Sign In</u></b></h2>

             <div class="container">
                <div class="account-box">
                    <div class="account-wrapper"><br>
                        <div class="account-logo" align="center">
                            <a href="index.html"><img src="image/logo.png" height="90px" alt=""></a>
                        </div><br>
                        

                        <form action="user_login_controller.php" method="POST">
                           <div class="form-group custom-mt-form-group">
                               <label class="control-label">Username:  </label><i class="bar"></i><br>
                               <input type="text" name="name" placeholder="Your Name" required="" class="name"/>
                           </div>
                             
                            <div class="form-group custom-mt-form-group" align="center">
 				
								<label class="control-label">Email: </label><i class="bar"></i><br>
                           <input type="text" name="email" placeholder="Your Email ID" required="" class="email"/>
							</div>
                           
                            
                            <div class="form-group custom-mt-form-group" align="center><br>
								
								<label class="control-label">Password :</label><i class="bar"></i><br>
                            <input type="password" name="pass" placeholder="PassWord" required="" class="password" />
							</div>
                            
                             
                           <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" type="submit" name="login">Register</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
   
    
</body>

</html>
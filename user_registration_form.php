<!DOCTYPE html>
<html>

<head>
    <title>BootStrap Of Darkchocolate</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/registration.css">  

    <style>
           
            
            body
            {
                background-image:url("image/manage_user.jpg");
                background-size: 270px 370px;
            }
        </style>
</head>

<body>
    <div class="title" >
        <h1 style=" color: blue; text-align: center"> <u>Sign Up </u></h1>
    </div>
     <div class="main-wrapper">
         <div class="account-page">
             

             <div class="container">
                <div class="account-box">
                    <div class="account-wrapper"><br>
                        <div class="account-logo" align="center">
                            <a href="index.html"><img src="image/logo.png" height="90px" alt=""></a>
                        </div><br>
                        

                        <form action="user_reg_controller.php" method="POST">
                           <div class="form-group custom-mt-form-group">
                               <label class="control-label">Username:  </label><i class="bar"></i><br>
                               <input type="text" name="name" placeholder="Your Name" required="" class="name"/>
                           </div>
                             <div class="form-group custom-mt-form-group" align="center>
								
								<label class="control-label">Department Name: </label><i class="bar"></i><br>
                             <input type="text" name="dept" placeholder=" Your Department name" required="" class="dept" />
							</div>
                           <div class="form-group custom-mt-form-group" align="center>
								
								<label class="control-label">Email: </label><i class="bar"></i><br>
                           <input type="text" name="email" placeholder="Your Email ID" required="" class="email"/>
							</div>
                            <div class="form-group custom-mt-form-group" align="center >
                                                                
								<label class="control-label">Mobile Number </label><i class="bar"></i><br>
                            <input type="text" name="mobile" placeholder="Your Mobile Number" required=" " class="mobile" />
							</div>
                            
                            <div class="form-group custom-mt-form-group" align="center><br>
								
								<label class="control-label">Address :</label><i class="bar"></i><br>
                            <input type="text" name="add" placeholder="Address" required="" class="pass" />
							</div>
                             <div class="form-group custom-mt-form-group" align="center><br>
								
								<label class="control-label">Password :</label><i class="bar"></i><br>
                            <input type="password" name="pass" placeholder="PassWord" required="" class="pass" />
							</div>
                            
                             
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" type="submit" name="register">Register</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
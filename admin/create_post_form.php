<html>
    <head>
        
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
        <title>
            
        </title>
        
    </head>
    
    <body>
        
        <div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="#home" class="active">Home</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    
    
  </div>
  
        </div><br>
        
        <div class="cre_po_title">
            <h3> <u>Create Post</u> </h3>            
        </div>
        
        <div class="container">
            
        <form method="post" enctype="multipart/form-data" action="create_post_controller.php" >
			

				
            <input type="text" class="post-title" name="title" value="" placeholder="Title"><br>
            <label>Featured image :</label><br>
                                <input  class="image" type="file" name="file" ><br><br>
                                
                                <textarea class="text_box" name="body" id="body" cols="30" rows="10"></textarea><br>
				
                                <button type="submit" class="btnn" name="btn-upload">upload</button>

			</form>
				
				<!-- if editing post, display the update button instead of create button -->
				
			
		</div>
		<!-- // Middle form - to create and edit -->
	
        
    </body>
    
    
    
    
    
    
</html>
<script>
	CKEDITOR.replace('body');
        
        
</script>

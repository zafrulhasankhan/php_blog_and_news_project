<?php session_start(); ?>
<?php $conn = new mysqli("localhost", "root", "", "php_blog_and_news_project");?>
<html>
    <head>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
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
  
  
</div>
        <br>
         <?php  
          $query= "select * from post";
          $query_result= mysqli_query($conn, $query);
          
          while ($row=  mysqli_fetch_array($query_result)) { 
              $filename=$row['filename'];
              $title=$row['title'];
              $date=$row['date'];
              $body=$row['body'];
              ?>
        
        <div class="form">
        <div class="gmd gmd-1">
             <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="admin/image_holder/<?php echo $filename;  ?>" alt=""></a>
                            </div>
                 
                 <hr class="line">
                 
                     <div class="date">
                     <img src='image/calander4.png' height="40" width="40" >&ensp;
                     <?php echo $date;  ?>
                     </div>
             </div> 
            
            
                 <div class="post_title">
                 <b><?php  echo $title ; ?></b>
                 </div>
            
            
            <div class="comment">
                <h5><i class="em em-speech_balloon" aria-role="presentation"></i></h5>
                <h6>22555</h6>
            </div>
            
            <div class="seer-eye">
                <h5><i class="em em-eye" aria-role="presentation" aria-label=""></i></h5>
                <h6>22555</h6>
            </div>
            
            <div class="like-react">
                <h5><i class="em em---1" aria-role="presentation" aria-label="THUMBS UP SIGN"></i></h5>
                <h6>22555</h6>
            </div>
            <div class="dislike-reactt">
                <h5><i class="em em--1" aria-role="presentation" aria-label="THUMBS UP SIGN"></i></h5>
                <h6>22555</h6>
            </div>
            
            
             <div class="body-title">
                <h5><?php $body_crop =strpos($body, ' ', 90);
                echo substr($body,0,$body_crop );  ?></h5>
               
             </div>
            <div class="read-more">
                
                <a href="read-more.php"><i class="em em-soon" aria-role="presentation" aria-label="SOON WITH RIGHTWARDS ARROW ABOVE"></i> Read more...</a>
            </div>
           
        
            
            
        </div>
             
        </div>
 <?php } ?>
        
       
       
 </body>   
</html>

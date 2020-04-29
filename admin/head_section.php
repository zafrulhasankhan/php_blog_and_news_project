<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- ckeditor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
<!-- Styling for public area -->
<link rel="stylesheet" href="css/admin_styling.css">


<form method="post" enctype="multipart/form-data" action="create_post_controller.php" >
			

				
            <input type="text" class="post-title" name="title" value="" placeholder="Title"><br>
            <label>Featured image :</label><br>
                                <input  class="image" type="file" name="file" ><br><br>
                                
                                <textarea class="text_box" name="body" id="body" cols="30" rows="10"></textarea>
				
				<button type="submit" name="btn-upload">upload</button>

			</form>

<?php

	include('../config/connect.php');

	
	if(@$_POST['submit']){
		

		if (empty($_POST['postName']) || empty($_POST['category']) || empty($_POST['GenjourName']) || empty($_POST['tags']) || empty($_POST['postContent'])) {

			echo "Please fill all the field amd Check carefully before submitting";

		}else {
	
		$postName = $_POST["postName"];
		$category = $_POST["categories"];
		$GenjouristName = $_POST["GenjouristName"];
		$tags = $_POST["tags"];
		$postContent  = $_POST["postContent"];
		$post_url = str_replace(' ', '-', $postName);;

		// Current date and time
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d H:i:s');
		


		// image upload

		// Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../uploads/journal/" . $_FILES["photo"]["name"])){

                echo $_FILES["photo"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../uploads/journal/" . $_FILES["photo"]["name"]);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

    $imageName = $_FILES["photo"]["name"];  // Image name
	$img_url = "uploads/journal/".$imageName;    // Image Url

	
    // end image upload

	//echo " ".$postName. " ".$category." ".$GenjouristName." ".$tags." ". $postContent." ". $img_url." ".$date; 

	
	$query = "insert into journals (post_title, post_category, genjourist_name, post_content,post_tags, post_counter, post_date, post_url, img_url) values ('$postName','$category','$GenjouristName','$postContent','$tags', NULL ,'$date','$post_url','$img_url')";

		if (!mysqli_query($conn,$query))
		  {
		  echo("Error description: " . mysqli_error($conn));
		  }


			$conn->close();

	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Journal Form | Genjour</title>


    <!-- Normalize HTML5 Reset -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">

.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>

</head>

<body>

<div class="container">
	<div class="mt-3">
		
	</div>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
		<div class="col-md-7">
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">1</span>
		  <input type="text" class="form-control" name="postName" placeholder="Post Name" aria-label="Post Name" aria-describedby="basic-addon1">
		</div>

		<br>

	
			<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="radio" name="categories" value="Economics" id="option1" autocomplete="off" checked> Economics 
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Life" id="option2" autocomplete="off"> Life 
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Society" id="option3" autocomplete="off"> Society
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Controversy" id="option4" autocomplete="off"> Controversy
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Politics" id="option5" autocomplete="off"> Politics
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Self Help" id="option6" autocomplete="off"> Self Help
				  </label>
				  <label class="btn btn-secondary">
				    <input type="radio" name="categories" value="Philosophy" id="option7" autocomplete="off"> Philosophy
				  </label>
			</div>


		<br>
		<div class="mt-4"></div>
		
		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">3</span>
		  <input type="text" class="form-control" name="GenjouristName" placeholder="-by name Genjourist ( Only name)" aria-label="Genjourist Name" aria-describedby="basic-addon1">
		</div>	
		<br>
		
		<h4>Upload an image <small>less than 5MB</small> </h4> 
        <div class="input-group image-preview">
        
        <br>
        <span class="input-group-addon" id="basic-addon1">4</span>
            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
            <span class="input-group-btn">
                <!-- image-preview-clear button -->
                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                    <span class="glyphicon glyphicon-remove"></span> Clear
                </button>
                <!-- image-preview-input -->
                <div class="btn btn-default image-preview-input">
                    
                    <span class="image-preview-input-title">Browse</span>
                    <input type="file" accept="image/png, image/jpeg, image/gif" placeholder="Images only jpeg"  name="photo"/> <!-- rename it -->
                </div>
            </span>
        </div><!-- /input-group image-preview [TO HERE]--> 
        <br>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">5</span>
		  <input type="text" class="form-control" name="tags" placeholder="Enter all tags separated by commas" aria-label="Tags" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="form-group">
		  <label for="comment">Post Content:</label>
		  <textarea class="form-control" name="postContent" rows="10" id="comment"></textarea>
		</div>
		
		<input class="btn btn-primary" type="submit" name="submit" value="submit" id="submit">
	</div>
	</form>
	<br>
	<div class="col-md-5">
		<h1 class="display-4">Notes -</h1>
		<p class="lead">Use paragraph <code>&lt;p&gt;</code> opening and <code>&lt;/p&gt;</code> colsing tag while writing paragraph.  </p>
		<p>For Example : <br>
					<code>&lt;p&gt;</code> This is first para <code>&lt;/p&gt;</code><br>
					<code>&lt;p&gt;</code> This is second para <code>&lt;/p&gt;</code>  </p>
		<p class="lead"> For image insertion use <code>&lt;img&gt;</code> tag</p>
		<p>For Example : <br>
					<code>&lt;img src="img/image_name.jpg"&gt;</code> edit image_name only </p>
		<p class="lead"> For bold text use <code>&lt;b&gt;</code> tag</p>	
		<p>For Example : <br>
			<code>&lt;b&gt;</code> <b> Text </b> <code>&lt;/b&gt;</code>  </p>			
	</div>
	</div>
</div>


<!--  ===================================JAVASCRIPT=========================== -->

<script>

$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});

	</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
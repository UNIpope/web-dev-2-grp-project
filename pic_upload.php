<!-- 
	Website: Ice Cream Store
	Purpose: Display the menu of the shop
	Authors: Jack Duggan + Buchita Gitchamnan	
	Reference: https://codepen.io/anon/pen/EOomaQ
-->




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8"> 

	<!-- rsponsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- include CDN(Content Delivery Network) MaxCDN provides CDN support for Bootstrap's CSS and JavaScript. You must also include jQuery-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!--this code is from https://codepen.io/anon/pen/EOomaQ-->
	<style type="text/css">
		
		body 
		{
		  background-color: #efefef;
		}

		.profile-pic 
		{
		    max-width: 200px;
		    max-height: 200px;
		    display: block;
		}

		.file-upload 
		{
		    display: none;
		}
		.circle
		{
		    border-radius: 1000px !important;
		    overflow: hidden;
		    width: 128px;
		    height: 128px;
		    border: 8px solid rgba(255, 255, 255, 0.7);
		    position: absolute;
		    top: 72px;
		}
		img 
		{
		    max-width: 100%;
		    height: auto;
		}
		.p-image 
		{
		  position: absolute;
		  top: 170px;
		  color: #666666;
		  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
		}
		.p-image:hover 
		{
		  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
		}
		
	</style>


	<script type="text/javascript">
		$(document).ready(function() 
		{
			var readURL = function(input) 
			{
		        if (input.files && input.files[0]) 
		        {
		            var reader = new FileReader();

		            reader.onload = function (e) 
		            {
		                $('.profile-pic').attr('src', e.target.result);
		            }
		    
		            reader.readAsDataURL(input.files[0]);
		            
		        }
		    }
    

		    $(".file-upload").on('change', function()
		    {
		        readURL(this);
		    });
		    
		    $(".upload-button").on('click', function() 
		    {
		       $(".file-upload").click();
		    });
		});




	</script>




</head>
<body>
<div class="container">

	<div class="row">
	   <div class="small-12 medium-2 large-2 columns">

	    	<div class="circle">
		       	<!-- Default Image -->
		    	<!-- User Profile Image -->
		    	<img class="profile-pic" src="grey.jpg">		      
		    </div>

	    	<div class="p-image" style="float: left;">
	       		
	        	<input class="file-upload" type="file" accept="image/*" id="img" style="display:none;" />
	        	<label for="img"><span class="glyphicon glyphicon-camera"></span></label>
	        	
	    	</div>
	 	</div>
	</div>
</div>
</body>
</html>
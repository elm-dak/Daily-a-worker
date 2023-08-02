

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="style-2.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


	<title>Customer</title>
</head>
<body>
	<?php if(isset($_GET['error'])): ?>
	<script>	alert(" <?php echo $_GET['error']; ?> "); </script>
	<?php endif ?>
	<div class="wrapper">
		<div class="bar-logo"><a href="index.html"> <img class="logo" src="dw-logo.png" width="100px"/></a> 
				</div>
		

						
		<form action="uploads_db.php" method="POST" class="form" enctype="multipart/form-data">
			<div class="row">
				
				
				
				
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Full Name" required>
				</div>
				<div class="input-group">
					<label for="namework">Work Name</label>
					<input type="text" name="namework" id="namework" placeholder="Enter your Work Name"required>
				</div>
			
			<div class="input-group">
					<label for="days">Days</label>
					<input type="number" name="days" id="days" placeholder="Enter your Work Days"required>
				</div>
			
			<div class="input-group ">
					<label for="city">City</label>
				<div class="choose">
					<select name="city" id="city">
						<option selected disabled>Choose your City</option>
						<option value="Casablanca">Casablanca</option>
						<option value="Rabat">Rabat</option>
						<option value="Tanger">Tanger</option>
						<option value="Marrakech">Marrakech</option>
						<option value="Fes">Fes</option>
				
					</select>
				</div>
				<!--	<input type="text" name="namework" id="namework" placeholder="Enter your Name work"required>  -->
				</div>
			</div>
			<div class="input-group">
					<label for="num">Numero</label>
					<input type="tel" name="num" id="num" placeholder="Enter your Number"required>
				</div>
			
			
			<div class="input-group textarea">
				<label for="description">Description</label>
				<textarea id="description" name="description" placeholder="Enter your description"  required></textarea>
			</div>
			
			
			<div class="file-img">
					<p>Photo<p>
				<div class="input-group ">
					<label for="image">
						<span class="material-icons">
						add_a_photo
						</span>&nbsp;
						
						Choose photo of work</label>
					
					<input type="file" name="my_image" id="image" value="upload">
					
				</div>
			</div>
			
			
			<div class="input-group ">
				<button name="submit" class="btn">Post Work</button>
			</div>
		
			
			
		
	  </form>
	</div>
</body>
</html>
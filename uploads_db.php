<?php
			include "config.php";
		
				if (isset($_POST['submit'])){
					
						
				if(isset($_POST['name']) AND isset($_POST['namework']) AND isset($_POST['description']) AND isset($_POST['num']) AND isset($_POST['city']) AND isset($_FILES['my_image'])/**AND ($_FILES["image"]["error"] === 4)**/){
				if( !empty($_POST['name']) AND !empty($_POST['namework']) AND !empty($_POST['description']) AND !empty($_POST['num']) AND !empty($_POST['city'])){

					
					$name = htmlspecialchars($_POST['name']); 
					$namework = htmlspecialchars($_POST['namework']); 
					$days = htmlspecialchars($_POST['days']);
					$city = htmlspecialchars($_POST['city']);
					$num = htmlspecialchars($_POST['num']);
					$description = htmlspecialchars($_POST['description']); 

				
					echo"<pre>";
					print_r ($_FILES['my_image']);
					echo"<pre>";
					
						$img_name = $_FILES['my_image']['name'];
						$img_size = $_FILES['my_image']['size'];
						$tmp_name = $_FILES['my_image']['tmp_name'];
						$error = $_FILES['my_image']['error'];
							
						if($error === 0){
							if($img_size > 125000 ){
							$em = "sorry, your file is too large.";
								header("Location: index-2.php?error=$em");
								}
							else{
								$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
								$img_ex_1c = strtolower($img_ex);
								$allowed_exs = array("jpg", 'jpeg', 'png');
							
								if(in_array($img_ex_1c, $allowed_exs)){
									$new_img_name = uniqid("IMG", true).'.'.$img_ex_1c ;
									$img_upload_path = 'uploads/'.$new_img_name ;
									move_uploaded_file($tmp_name, $img_upload_path);						
										
											/*$sql = "INSERT INTO description (img)
												VALUES ('$new_img_name')";*/
									
					   $sql = "INSERT INTO description (name, namework, description, num, city, days, img)
						VALUES ('$name', '$namework', '$description',  '$num', '$city', '$days', '$new_img_name')";
						$result = mysqli_query($conn, $sql);
						if ($result) {
							echo "<script>alert('Comment added successfully.');
							document.location.href = 'index-1.php';
							</script>";
							
						} else {
							echo "<script>alert('Comment does not add.');
							document.location.href = 'index-2.php';</script>";
						   }
									
							
										header("Location: index-1.php");
									}
									else{
										$em = "you can't upload files of this type";
											
										header("Location: index-2.php?error=$em");
									
										}
								}
								
							}
							else{
								$em = "unkown error occurred!";
								header("Location: index-2.php?error=$em");
								
								}
				
						}
							   	}
			   
			}
			else{
					header("Location: index-2.php");
				
				}
				

		
		
	//}
					  
					
				

				   	
			   
			
	//}

?>
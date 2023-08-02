	
<?php include "config.php"; ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service </title>
    <link rel="stylesheet" href="style-1-1.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
	

</head>

<body>
	<nav class="nav-bar">
			<a href="index.html"> <img class="logo" src="dw-logo-1.png" width="250px"/></a> 
		</nav>
	<div class="line">
	</div>
    <div class="container">
		
	<div class="post-worker">
				<h2 class="title-first">Worker
				</h2>
				<h2 class="title-second">Customer
				</h2>
			</div>
			<div class="add-ann"><a href="index-2.php">
				<div class="plus"><span class="material-icons">
									add_circle_outline
								</span>
				</div>
				<h3 class="service">ADD SERVICE</h3>
				</a>
			</div>
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
			 <div class="popup-image">
				  <span>&times;</span>
				  <img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU3fHx0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
			   </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span><i class="material-icons">
						person
						</i> Sagar Developer</span>
					<span><i class="material-icons">
						location_on
						</i>Casablanca</span>
                    <span> <i class="material-icons">
							schedule
							</i>Nov 12 2021</span>
					  <span> <i class="material-icons">
							date_range
							</i>3 Days</span>
					
                </div>
                <h1 class="blog-post_title"><span class="material-icons">
						handyman
						</span>&nbsp; Lorem ipsum dolor sit amet.</h1>
                <p class="blog-post_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores a, tempore veniam quasi sint fugiat
                    facilis, facere, amet magnam optio velit. Laudantium et temporibus soluta, esse cupiditate aliquid
                    dicta
                    accusantium.
                </p>
                <a href="#" class="blog-post_cta">Chat on Whatssap</a>
            </div>
				
        </div>
			<?php 
		
			
			
			$sql = "SELECT * FROM description";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($description = mysqli_fetch_assoc($result)) {

			?>

        <div class="blog-post">
            <div class="blog-post_img">
				
				
                <img src="uploads/<?=$description['img']?>"
                    title="img/<?=$description['img']?>" >
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span><i class="material-icons">
						person
						</i><?php echo $description['name']; ?></span>
					<span><i class="material-icons">
						location_on
						</i><?php echo $description['city']; ?></span>
                    <span> <i class="material-icons">
							schedule
							</i><?php echo $description['date']; ?></span>
					<span> <i class="material-icons">
							date_range
							</i><?php echo $description['days']; ?> Days</span>
                </div>
                <h1 class="blog-post_title"><span class="material-icons">
						handyman
						</span>&nbsp; <?php echo $description['namework']; ?>.</h1>
                <p class="blog-post_text">
                   <?php echo $description['description']; ?>
                </p>
                <a href="https://wa.me/<?php echo $rdescription['num']; ?>" class="blog-post_cta" target="_blank">Chat on Whatssap</a>
            </div>
        </div>
			<?php		
			}
		}
	?>
		
		
	</div>
		<footer>
			<div class="info">
				<p>help and infomation
				<br><br>
				application is coming soon</p>
			</div>
			<div class="social-media">
				<p>Follow us on:</p>
				<div class="icon-wrapper">
					<i class="fa fa-twitter icon" style="font-size:45px;color: aqua;"></i>
					<i class="fa fa-instagram icon" style="font-size:45px;color: orangered;"></i>
					<i class="material-icons icon" style="color: darkblue;font-size:45px;">facebook</i>
				</div>
			</div>
		</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		
		document.querySelectorAll('.blog-post_img img').forEach(image =>{  
			image.oneclick = () =>{
			document.querySelector('.popup-image').style.display = 'block';
			document.querySelector('.popup-image img').src = image.getAttribute('src');
			}
	
		});
		document.querySelector('.popup-image span').onclick = () =>{
			document.querySelector('.popup-image').style.display = 'none';
		}
		
	</script>
</body>

</html>
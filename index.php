<!DOCTYOE html>

<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		
		<!-- main style sheet -->
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Assistant:400,700|M+PLUS+Rounded+1c:400,700" rel="stylesheet">		<!-- style librarys 
		<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
		-->
		<!-- script librarys 
		<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		-->

		<?php
			$url = $_SERVER['SERVER_NAME'];
			$get_prodacts = file_get_contents("http://".$url."/sites/shop/api.php");
			$prodacts = json_decode($get_prodacts, true);


			function set_prodact($arr_prodact){
				echo "<div class='prodact'>
						<img class='prodactImg' src='images/{$arr_prodact["title"]}.jpg'/>
						<span class='prodactTitle'>{$arr_prodact["title"]}</span>
						<span class='prodactPrice'>{$arr_prodact["price"]} ש''ח </span>
						<span class='prodactDescription'>{$arr_prodact["description"]}</span>
						<span class='owner'>{$arr_prodact["owner"]}</span>
					</div>";
			}			
		?>

	</head>
	
	<body dir="rtl">
		<header>
			<img class="siteLogo" src="images/logo.png"/>
			<span class="headerTitle">תנור... מקרר... ארון... שידה... מכונת תפירה... מכונת כביסה... אלטע זאכן! אלטע זאכן!</span>
		</header>
		
		<section>

		
		
			<div class="content">
				<?php
					foreach($prodacts AS $singel){
						set_prodact($singel);
					}
				?>
				
			</div>
			
		</section>
		
		<footer>
			<div class="connect">
				<p>אלטע זאכן - דיגיטל</p>
				<span>אצלנו באלטע זאכן הלקוח הוא מעל הכל, <br> גם אם המוצרים לא אפעס... איי איי,<br> השירות הזמינות והאמינות מחפים על הכל.</span>
				<a href="tel:077-6508976">077-6508976</a>
			</div>
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26977.157829078933!2d35.046138203673245!3d32.30796526332568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d179d5d21d459%3A0x6bc7425a71c001a6!2z15jXldec15vXqNed!5e0!3m2!1siw!2sil!4v1541534003759" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			
			
		</footer>
	</body>

</html>
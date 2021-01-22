
<?php 
	include 'upload.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload just images</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<div class="container">
	<div class="upfrm">
		<?php if(!empty($statusMsg)){ ?>
			<p class="status-msg"><?php  echo $statusMsg; ?></p>
		
		<?php } ?>

		<form action="" method="POST" enctype="multipart/form-data">
			Select Image File to Upload:
			<input type="file" name="file">
			<input type="submit" name="submit" value="upload">
		</form>
	</div>
	
	<div class="gallery">
		<div class="gcon">
			<h2>uploaded images</h2>
			<?php 

			include 'dbconfig.php';

			$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

			if($query->num_rows > 0){
				while($row = $query->fetch_assoc()){
					$imageURL = 'uploads/'.$row["file_name"];	

			 ?>
			 <img src="<?php echo $imageURL; ?>" alt=""/>
			<?php }
			}else{
			 ?>
			 <p>No image(s) found...</p>
			<?php 
		}
		?>
		</div>
	</div>
</div>	
</body>
</html>

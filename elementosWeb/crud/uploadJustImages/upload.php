<?php  

include 'dbconfig.php';
$statusMsg ='';

$targetDir = "uploads/";

if(isset($_POST["submit"])){
	if(!empty($_FILES["file"]["name"])){
		
		$fileName = basename($_FILES["file"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
		$allowTypes =array('jpg', 'png', 'jpeg', 'gif','pdf');

		if(in_array($fileType, $allowTypes)){
		
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
				$insert = $db->query("INSERT into images (file_name, Uploaded_on) VALUES ('".$fileName."',NOW())");
				if($insert){
					$statusMsg =  "the file".$fileName."was uploaded";
				}else{
					$statusMsg = "upload failed";
				}

			}else{
				$statusMsg='error uploading';
			}
		}else{
			$statusMsg = 'just jpg,png y taca taca';
		}
	}else{
		$statusMsg='please select a file';
	}
}

?>
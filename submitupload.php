<?php
$target_dir = "resources/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
	require './includes/connect.php' ;
	
	
	$rid=$_POST['rid'];
	$rname=$_POST['rname'];
	$description=$_POST['description'];
	$published=$_POST['published'];
	$category=$_POST['category'];
	$type=$_POST['type'];
    $uid=$_POST['uid'];
	$uploaded=$_POST['uploaded'];
	$author=$_POST['author'];
	$isActive=$_POST['isActive'];
	$isFeatured=$_POST['isFeatured'];
	

,
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $query= "'insert into `resources` (`rname`, `description`,`published`,`category`,`type`,`uid`,`author`) values('$rname', '$description' ,'$published', '$category' ,'$type','$_SESSION['uid'],'$author',) ;" ;
        
        
        
    }
    
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
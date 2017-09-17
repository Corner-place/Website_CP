<?php
    session_start();

    if(isset($_SESSION["uid"])) {
        
    } else {
        header('Location: ./index.php');
    }

    $style_attrib = "none";
    $msg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Main code goes here
        require './includes/connect.php';
        require './includes/functions.php';
        
        $target = "resources/";
        $targetfile = $target.basename($_FILES["uploadFile"]["name"]);
        
        $style_attrib = "block";
        if (file_exists($targetfile)) {
            $msg = "Sorry, file already exists";
        }
        
        if ($_FILES["uploadFile"]["size"] > 50000) {
            $msg = "Sorry, your file is too large.";
        }
        
        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $targetfile)) {
            
            $rname = test_input($_POST["rname"]);
            $author = test_input($_POST["author"]);
            $description = test_input($_POST["description"]);
            $published = test_input($_POST["published"]);
            $category = test_input($_POST["category"]);
            $type = test_input($_POST["type"]);
            $location = basename($_FILES["uploadFile"]["name"]);
            $uid = $_SESSION["uid"];
            
            $query = "INSERT INTO resources (rname, author, description, published, category, type, location, uid, isActive) VALUES ('".$rname."', '".$author."', '".$description."', '".$published."', '".$category."', '".$type."', '".$location."', '".$uid."', '1');";
                    
                
                if ($conn->query($query)) {
                    $msg = "Resource Added Successfully.";
                } else {
                    $msg = "ERROR: Couldn't Update Data";
                }     
            
            
            $msg = "Resource Added Successfully.";
        } else {
            $msg = "Sorry, there was an error uploading your file.";
        }
                
        
    }
?>


<html>
<head>
<title>Upload | Cornerplace</title>


<link type="text/css" rel="stylesheet" media="all" href="stylesheets/screen.css" />
<link type="text/css" rel="stylesheet" media="all" href="stylesheets/style.css" />
<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="stylesheets/screen_ie.css" />
<![endif]-->

</head>
<body>
    <a href = "#"><h1><img src = "assets/img/logo-cornerplace-white.png" width = "20%"></h1></a>
    
    <div class="login">
        
        <form method="post" name="uploadform" id="uploadform" action="upload.php" enctype="multipart/form-data">
            <div id = 'error' class = 'error' style = "color:black; display:<?php echo $style_attrib; ?>;"><?php echo $msg; ?></div>

            <label for='rname'>Enter Resource/Book Name</label>
            <input type='text' id='rname' name='rname' placeholder='Enter Resource/Book Name'>
            
            <label for='author'>Enter Author Name</label>
            <input type='text' id='author' name='author' placeholder='Enter Author Name'>
            
            <label for='description'>Enter Resource/Book Description</label>
            <textarea row = '5' id='description' name='description' placeholder='Enter Description here'></textarea>
            
            <label for='published'>Enter Year Published</label>
            <input type='text' id='published' name='published' placeholder='Enter Year Published'>
            
            <label for='uploadFile'>Choose your File</label>
            <input type="file" name="uploadFile" id="uploadFile">
            
            <label for='category'>Enter Category</label>
            <input type='text' id='category' name='category' placeholder='Enter Category'>
            
            <label for='type'>Select Resource/Book Type</label>
            <select id='type' name='type'>&gt;
                <option value = '-1'> Select Resource/Book Type</option>
                <option value = '1'> Ebook</option>
                <option value = '2'> Lecture Note</option>
                <option value = '3'> Tutorial Sheet</option>
                <option value = '4'> Question Paper</option>
                <option value = '5'> Answer Sheet or Solutions</option>
                <option value = '6'> Magazine or Journal</option>
                <option value = '7'> Audiobook</option>
            </select>
            
            

            <button name="Submit" type="button" class = "search" onclick = "javascript:upload();">Upload</button>

        </form>
        <a href="dologout.php" class='logout' style = "float: right;">Logout</a>
    </div>
<!-- YOUR BODY HERE -->

<script src="js-files/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="js-files/validation.js" type="text/javascript"></script>

</body>
</html>
<?php
    session_start();
    require './includes/connect.php';
    require './includes/functions.php';

    if(isset($_SESSION["uid"])) {
        
    } else {
        header('Location: ./index.php');
    }
?>


<html>
<head>
<title>Messenger | Cornerplace</title>


<link type="text/css" rel="stylesheet" media="all" href="stylesheets/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="stylesheets/screen.css" />
<link type="text/css" rel="stylesheet" media="all" href="stylesheets/style.css" />
<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="stylesheets/screen_ie.css" />
<![endif]-->

</head>
<body>
    <a href = "#"><h1><img src = "assets/img/logo-cornerplace-white.png" width = "20%"></h1></a>
    
    <div class="login">
        <h3 style = "text-align:right;">Hello, <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?>!</h3>
        <form method="post" name="postform" id="postform">
            
            <div id = 'msg'></div>

            <label for='username'>Enter Username</label>
            <input type='text' id='username' name='username' placeholder='Enter Username'>

            <button name="Submit" type="button" class = "search" onclick="javascript:searchuser();" value="Message">Search</button>

        </form>
        <a href="dologout.php" class='logout' style = "float: right;">Logout</a>
    </div>
<!-- YOUR BODY HERE -->

<script src="js-files/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js-files/chat.js"></script>
<script type="text/javascript" src="js-files/messenger.js"></script>

</body>
</html>
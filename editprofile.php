<?php $pageName = "editProfile" ?> 
<?php
    
    session_start();
    if (isset($_SESSION['authenticated']) && !$_SESSION['authenticated'] || !isset($_SESSION['authenticated'])) {
    header("Location: Login.php");
    }
    require_once("nav.php"); ?>
<head>
    <link rel="stylesheet" type="text/css"  href="makePost.css">
</head>
<h2>Profile Details</h2>
<form method="POST" action="editprofile_handler.php" id="editProfile">
            <div><label for="newProf">Profile Details:</label>
            <textarea id="newProf" placeholder="put things here" name="txt" rows="8" cols ="100"></textarea></div>
            <div><input type="submit" value="Submit"></div>        
</form>
<?php require_once("footer.php"); ?>
</body>
</html>
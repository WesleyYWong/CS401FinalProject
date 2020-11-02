<?php $pageName = "ExampleApplication" ?> 
<?php 
        session_start();
        if (isset($_SESSION['authenticated']) && !$_SESSION['authenticated'] || !isset($_SESSION['authenticated'])) {
                header("Location: Login.php");
        }
        require_once("nav.php"); ?>
<head>
        <link rel="stylesheet" type="text/css"  href="application.css">
</head>
<h2>Apply</h2>
        <form method="POST" action="app_handler.php" id ="application">
            <div><label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"></div>
            <div><label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"></div>
            <div><label for="email">Email:&emsp;</label>
            <input type="text" id="email" name="email"></div>
            <div><label for="phonenumber">Phonenumber:&emsp;</label>
            <input type="text" id="phonenumber" name="phonenumber"></div>
            <div><input type="submit" value="Submit Application"></div>        
        </form>
<?php require_once("footer.php"); ?>
    </body>
</html>
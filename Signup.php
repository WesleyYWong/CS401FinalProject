<?php $pageName = "Signup" ?> 
<?php 
    session_start();
    require_once("nav.php"); 
?>
<head>
        <link rel="stylesheet" type="text/css"  href="signup.css">
</head>
<h2>Signup</h2>
        <form method="POST" action="signup_handler.php" id ="signup">
            <div><label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"></div>
            <div><label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"></div>
            <div><label for="email">Email:&emsp;</label>
            <input type="text" id="email" name="email"></div>
            <div><label for="pw">Password:&emsp;</label>
            <input type="text" id="pw" name="pw"></div>
            <div><input type="submit" value="Submit"></div>        
        </form>
        <?php
        if (isset($_SESSION['good'])) {
            foreach ($_SESSION['good'] as $message) {
                echo "<div class='good'>{$message}</div>";
            }
        }
        if (isset($_SESSION['bad'])) {
            foreach ($_SESSION['bad'] as $message) {
                echo "<div class='bad'>{$message}</div>";
            }
        }
        $_SESSION['bad'] = array();
        $_SESSION['good'] = array();

        ?>
<?php require_once("footer.php"); ?>
    </body>
</html>
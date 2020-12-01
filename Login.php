<?php $pageName = "Login" ?> 
<?php 
        session_start();
        require_once("nav.php"); ?>
<head>
        <link rel="stylesheet" type="text/css"  href="signup.css">
</head>
<h2>Login</h2>
        <div id="formwrapper">
        <form method="POST" action="Login_handler.php" id ="login">
            <div><label for="email">Email:&emsp;</label>
            <input type="text" id="email" name="email"></div>
            <div><label for="pw">Password:&emsp;</label>
            <input type="text" id="pw" name="pw"></div>
            <div><input type="submit" value="Submit"></div>        
        </form></div>
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
    </div>
    </body>
</html>


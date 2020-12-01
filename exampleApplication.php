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
        <div id="formwrapper">
        <form method="POST" action="app_handler.php" id ="application">
            <div><label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"></div>
            <div><label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"></div>
            <div><label for="email">Email:&emsp;</label>
            <input type="text" id="email" name="email"></div>
            <div><label for="phonenumber">Phonenumber:&emsp;</label>
            <input type="text" id="phonenumber" name="phonenumber"></div>
            <div><label for="datepicker">Start Date:&emsp;</label>
            <input type="text" id="datepicker" name="datepicker"></div>
            <div><input type="submit" value="Submit Application"></div>        
        </form></div>
<?php require_once("footer.php"); ?>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="application-form.js"></script>
    </body>
</html>
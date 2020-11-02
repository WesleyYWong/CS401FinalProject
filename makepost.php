<?php 
        session_start();
        require_once("nav.php"); ?>
<head>
    <link rel="stylesheet" type="text/css"  href="makePost.css">
</head>
<form method="POST" id ="signup">
            <div><label for="jobTitle">Volunteer Position:</label>
            <input type="text" id="jobTitle" name="jobTitle"></div>
            <div><label for="jobDetails">Position Description:</label>
            <textarea id="jobDetails" name="jobDetails" rows="6" cols ="75"></textarea></div>
            <div><input type="submit" value="Submit"></div>        
</form>
<?php require_once("footer.php"); ?>
</body>
</html>

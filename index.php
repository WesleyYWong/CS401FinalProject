<?php $pageName = "Home" ?> 
<?php 
        session_start();
        require_once("nav.php");       
?>
<h2>Welcome to Community Connections</h2>
<p>This website is dedicated to connecting volunteers with organizations that are looking for help in the community.
    From dogwalkers to food makers and beyond, find a volunteer opportunity that fits you. Click the <a href = "\Postings.php" >postings</a> tab to get 
    started by looking through open positions.</p>
<?php
 
    require_once("footer.php"); 
?>
</body>
</html>


<?php $pageName = "Profile" ?> 
<?php 
        require_once 'Dao.php';
        session_start();
        if (isset($_SESSION['authenticated']) && !$_SESSION['authenticated'] || !isset($_SESSION['authenticated'])) {
                header("Location: Login.php");
        }
        $dao = new Dao();
        $profileInfoArray = $dao->getProfile($_SESSION['userID']);
        require_once("nav.php"); 
?>
        
<head>
    <link rel="stylesheet" type="text/css"  href="profile.css">
</head>

<div class="sidenav">
  <a href="#"></a>
  <a href="#">My Info</a>
  <a href="#">Pending Applications</a>
  <a href="#">Accepted Applications</a>
  <a href="#">Completed Tasks</a>
</div>

<div class="main">
    <div class="personalinfo">
        <div><h2><?php echo $profileInfoArray[0]." ".$profileInfoArray[1]."'s Profile"?></h2>
        <form method="POST" action="editprofile_handler.php" id ="editProfile">
        <input type="submit" value="Edit Profile" id="edit">
        </form></div>
        </p><img src=<?php echo "$profileInfoArray[2]"?> alt="profilepic" id="profilepic">
        <?php echo file_get_contents("$profileInfoArray[3]") ?>
        </p>
           
    </div>
    <div>
    
    <form method="POST" action="makepost_handler.php" id ="makePost">
        <input type="submit" value="Make a Post" id="newPost">  
    </form>  
    </div> 
</div>
<?php require_once("footer.php"); ?>  
</body>
</html>


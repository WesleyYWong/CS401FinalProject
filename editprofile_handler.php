<?php
    require_once 'Dao.php';
    $dao = new Dao();
    $_SESSION['good'] = array();
    session_start();
        if (isset($_SESSION['authenticated']) && !$_SESSION['authenticated'] || !isset($_SESSION['authenticated'])) {
         header("Location: Login.php");
    }
    $userID = $_SESSION['userID'];
    $filename = $userID.".txt";
    $profileInfo = htmlspecialchars($_POST['txt']);
    $handle = fopen($filename, "w") or die('Couldn\'t open file!');
    fwrite($handle, $profileInfo);
    fclose();
    $dao->editProfile($_SESSION['userID']);
    $_SESSION['good'][] = "profile updated, please check myProfile again";
    header("Location: /editprofile.php" , true, 303);
?>
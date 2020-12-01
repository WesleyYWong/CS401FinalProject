<?php

    session_start();
    require_once 'Dao.php';
    $_SESSION['bad'] = array();
    $_SESSION['good'] = array();

    $dao = new Dao();
    $retrievedid = $dao->getUser($_POST['email'],hash('sha256' , $_POST['pw'] . "himalayanpinksalt"));
    if ($retrievedid != NULL && $retrievedid > 0)
    {
        $_SESSION['authenticated'] = true;
        $_SESSION['userID'] = $retrievedid;
        header("Location: /Postings.php");
    }
    else {
        $_SESSION['bad'][] = "login failed";
        $_SESSION['authenticated'] = false;
        header("Location: /Login.php", true, 303);
    }
    exit();


?>
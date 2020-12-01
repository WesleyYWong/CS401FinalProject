<?php

    session_start();
    require_once 'Dao.php';

    $_SESSION['bad'] = array();
    $_SESSION['good'] = array();
    
    $password = $_POST['pw'];
    if (strlen($_POST['fname']) == 0 || strlen($_POST['lname']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['pw']) == 0)
    {
        $_SESSION['bad'][] = "missing information";
    }

    if (strlen($_POST['fname']) > 64 || strlen($_POST['lname']) > 64 || strlen($_POST['email']) > 64 || strlen($_POST['pw']) > 64)
    {
        $_SESSION['bad'][] = "information too long, only supports up to 64 characters";
    }
    
    if (preg_match('~[0-9]~', $_POST['fname'])  === 1) {
        $_SESSION['bad'][] = "Invalid first name cannot contain numbers";
    }

    if (preg_match('~[0-9]~', $_POST['lname'])  === 1) {
        $_SESSION['bad'][] = "Invalid lastname name cannot contain numbers";
    }
    
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['bad'][] = "malformed email";
    }
    
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        $_SESSION['bad'][] = "Password must be at least 8 characters and
            contain at least 1 uppercase letter, 1 lowercase letter, and 1 number.";
    }
   
    $dao = new Dao();
    $test = $dao->getUserID($email);
    if ($test != null && $test > 0 ) {
        $_SESSION['bad'][] = "An account with that email already exists please use a new email";
    }
    
    if (count($_SESSION['bad']) > 0) {
        header("Location: /Signup.php", true, 303);
        exit();
    }

    



    $dao = new Dao();
    
    $dao->addUser($email, hash('sha256' , $_POST['pw'] . "himalayanpinksalt"));
    $userID = $dao->getUserID($email);
    $dao->addProfile($_POST['fname'], $_POST['lname'], $userID);
    $_SESSION['good'][] = "Sucessfully registered an account, please log in";
    //Redirect
    header("Location: /Signup.php" , true, 303);
    exit();


?>

<?php
require_once 'KLogger.php';

class Dao {

  // private $host = "localhost";
  // private $db = "localtest";
  // private $user = "localtest";
  // private $pass = "hunter2";
  private $host = "us-cdbr-east-02.cleardb.com";
  private $db = "heroku_ac3edd1a10e476e";
  private $user = "bdd22c69b79cd9"; 
  private $pass = "2810ef45";
  
  private $logger;

  public function __construct () {
      $this->logger = new KLogger("log.txt", KLogger::DEBUG);
  }

  public function getConnection () {
    $this->logger->LogInfo('getting a connection');
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
      return $conn;
    } catch (Exception $e) {
      echo print_r($e,1);
      $this->logger->LogFatal("Could not connect to database: " . print_r($e, 1));
      exit;
    }
  }

  public function addUser($email, $password) {
    $conn = $this->getConnection();
    $this->logger->LogInfo("Adding user [{$email}]");
    $addUserQuery = "insert into users (email, password, role) values (:email, :password, 1)";
    $q = $conn->prepare($addUserQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
    return "added user";
    
    
  }

  public function addProfile($fname, $lname, $userID) {
    $conn = $this->getConnection();
    $this->logger->LogInfo("Adding user profile [{$fname}] [{$lname}]");
    $defaultpfp = "hummingbird.jpg";
    $addProfileQuery ="insert into profiles (fName, lName, userID, pfplink) values (:fName, :lName, :userID, :pfplink)";
    $q = $conn->prepare($addProfileQuery);
    $q->bindParam(":fName", $fname);
    $q->bindParam(":lName", $lname);
    $q->bindParam(":userID", $userID);
    $q->bindParam(":pfplink", $defaultpfp);
    $q->execute();
    return "added profile";

  }

  public function getUserID($email){
    $conn = $this->getConnection();
    $this->logger->LogInfo("getting userID with [{$email}]");
    $getIDQuery = "select userID from users where email = :email";
    $q = $conn->prepare($getIDQuery);
    $q->bindParam("email", $email);
    $q->execute();
    $result = $q->fetchColumn();
    return $result;
  }

  public function test() {
    return "created this thing";
  }

  public function getUser($email, $pw) {
    $conn = $this->getConnection();
    $getIDQuery = "select userID from users where email = :email and password = :pw";
    $q = $conn->prepare($getIDQuery);
    $q->bindParam("email", $email);
    $q->bindParam("pw", $pw);
    $q->execute();
    $result = $q->fetchColumn();
    return $result;
  }

  public function getProfile($userID) {
    $conn = $this->getConnection();
    $getFnameQuery = "select fName from profiles where userID = :userID";
    $q1 = $conn->prepare($getFnameQuery);
    $q1->bindParam("userID" , $userID);
    $q1->execute();
    $getLnameQuery = "select lName from profiles where userID = :userID";
    $q2 = $conn->prepare($getLnameQuery);
    $q2->bindParam("userID" , $userID);
    $q2->execute();
    $getpfpQuery = "select pfpLink from profiles where userID = :userID";
    $q3 = $conn->prepare($getpfpQuery);
    $q3->bindParam("userID" , $userID);
    $q3->execute();
    $getTextQuery = "select txtLink from profiles where userID = :userID";
    $q4 = $conn ->prepare($getTextQuery);
    $q4->bindParam("userID" , $userID);
    $q4->execute();
    return array($q1->fetchColumn(), $q2->fetchColumn(), $q3->fetchColumn(), $q4->fetchColumn());
  }

  public function editProfile($userID) {
    $conn = $this->getConnection();
    $file = $userID.".txt";
    $updateProfileQuery = "update profiles set txtLink = :file where userID = :userID";
    $q = $conn->prepare($updateProfileQuery);
    $q->bindParam("userID", $userID);
    $q->bindParam("file", $file);
    $q->execute();
  }


}
 
?>

<?php $pageName = "Postings" ?> 
<?php 
      session_start();
      require_once("nav.php"); 
?>
<head>
    <link rel="stylesheet" type="text/css"  href="postings.css">
</head>

<div class="sidenav">
  <a href="#"></a>
  <a href="#">Favorites</a>
  <a href="#">In Your Area</a>
  <a href="#">Starting Soon</a>
</div>

<div class="main">
  <h2>Example Postings</h2>
  <h3><a href = examplepost.php>Example Post:Dog Walker</a></h3>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
      when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
      It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
      It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
      and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<div>
<form method="POST" action="makepost_handler.php" id ="makePost">
        <input type="submit" value="Make a Post" id="newPost">  
</form>
</div> 

</div>

<?php require_once("footer.php"); ?>  
</body>
</html>


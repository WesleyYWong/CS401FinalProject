<?php $pageName = "ExamplePost" ?> 
<?php 
      session_start();
      require_once("nav.php"); ?>
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
  <h2>Dog Walking for Idaho Humane Society</h2>
  <p><img src="dogwalking.png" alt="postpic" id="postpic">Do you like dogs, do you like being or want to be more active? Come walk
    dogs for the Idaho Humane Society. Hours are flexible from 8 am to sunset and dogs are friendly. Volunteer activity can be verified
    for school credit. Applicants must be 15 years or older and have no violent criminal history. Aren't dogs great, don't you guys
    love dogs; after all, dogs love you. If the world was run by dogs we would probably have less wars, less fighting, and more fluff.
    Please remember to vote in your local, state, and national elections to ensure that your voice is heard and you exercise your right
    to participate in policy.</p>
    <div>
    <form method="POST" action="app_handler.php" id ="applicationButton">
        <input type="submit" value="Apply to this Position" id="newApplication">  
    </form>
    </div> 
</div>


<?php require_once("footer.php"); ?>
</body>
</html>
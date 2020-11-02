<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="community.css">
        <link rel="shortcut icon" href="favico.ico">
    </head>   
    <body>
        <div id = "sitetitle"><img src="favico.ico" alt="site logo" id="sitelogo"><h1>Community Connections</h1></div>
        <div id = "navigation">
            <ol>
                <li><a <?php if ($pageName == "Home") {echo "class ='active';"; } ?> href="index.php">Home</a></li>
                <li><a <?php if ($pageName == "Postings") {echo "class ='active';"; } ?> href="Postings.php">Postings</a></li>
                <!-- <li><a <?php if ($pageName == "History") {echo "class ='active';"; } ?> href="History.php">History</a></li> -->
                <li><a <?php if ($pageName == "Signup") {echo "class ='active';"; } ?> href="Signup.php">Sign Up</a></li>
                <li><a <?php if ($pageName == "Login") {echo "class ='active';"; } ?> href="Login.php">Login</a></li>
                <li><a <?php if ($pageName == "Profile") {echo "class ='active';"; } ?> href="myProfile.php">myProfile</a></li>
                <li><a href = "logout.php">Log Out</a><li>
            </ol>
        </div>
        <div id = "content">
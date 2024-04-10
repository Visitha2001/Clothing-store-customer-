<?php
    $currentPage = 'deals';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMAGES/logo/Copy of Black White Minimalist Aesthetic Letter Initial Name Monogram Logo (3).png" type="image/x-icon">
    <title>SK Fashion Hub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Styles/deals_nav.css">
</head>
<body>
    <div id="navBarHome">   
        <?php include './header_HOME.php'; ?>
    </div>

    <div id="mobileNav">
        <?php include './header_HOME_M.php'; ?>
    </div>

    <div class="navbar2">
        <a href="./Deals_FH.php">Fashion Hub</a>
        <a href="./Deals_BW.php">Bridal Wear</a>
    </div>

    <div class="box_vid">
        <video id="myVideo" width="100%" height="auto" loop muted onended="stopVideo()" autoplay>
            <source src="./VIDEO/Design.mp4" type="video/mp4">
        </video>
    </div>
</body>
</html>
<?php 
 session_start();
 if(!isset($_SESSION["email"])){
    header("location: main.php");
    exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css5/main.css">
    <title>Services</title>
</head>
<body background="images/bg2option1.jpg">


<div class="container">
    <header>

    <img src="images/Group 2.svg" alt="logo-white" class="logo">
        
    <nav>
        <a href="#" class="hide-desktop">
            <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
        </a>

        <ul class="show-desktop hide-mobile" id="nav">
            <li id="exit" class="exit-btn hide-desktop">
                <img src="images/exit.svg" alt="exit menu">
            </li>
            <li><a href="landing.php">Home</a></li>
            Hi!! <?php echo $_SESSION["email"] ?>
            
        </ul>
    </nav>
    </header>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

  <div class="image-upload-wrap">
    <form action="zip.php" method="post" class="needs-validation" novalidate>
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
</div>
</body>
</html>
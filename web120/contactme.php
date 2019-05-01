<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/4cac021ad2.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/contact-form.css" />
<link rel="stylesheet" href="css/tables.css"/>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
 
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Hyokyoung Byun's WEB120 Portal</a></h1>
    


  <nav>
    <ul class="topnav" id="myTopnav">
     <?=makeLinks($nav)?>
       <!-- START COMMENT OUT NAV
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Hyokyoung</a></li>
      END COMMENT OUT NAV -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
        
<!-- START LEFT COL -->
<section>
 


<h2>Contact Hyokyoung</h2>
<?php include "includes/simple.php";?>
<p class="clear-recaptcha"></p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>

 
</aside>
<!-- END RIGHT COL -->

<?php
    include 'includes/footer.php';
?>
 

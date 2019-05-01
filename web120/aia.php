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


<h2 id="aia">Audience, Issues and Approach</h2>
  <table class="client">
   <tr>
       <th> Client's name and the final decision maker </th>
       <td>Hyokyoung Byun </td>
   </tr>
   <tr>
       <th> Client's business (website) name</th>
       <td>Organist Hyokyoung Byun</td>
   </tr>
   <tr>
       <th>Is this a redesign or brand new website? </th>
       <td>Brand New</td>
   </tr>
   <tr>
       <th>List the type of website</th>
       <td>Profile, Recordings, Upcoming-Concert, Great organs, Composers </td>
   </tr>
   <tr>
       <th>Client's goal(s) </th>
        <td>
         <ul>
          <li>Creating audiences for concerts</li>
          <li>Posting concerts' recordings</li>
          <li>Advertising as an accompanist</li>
         </ul>
       </td>
   </tr>
    </table>
   
<table class="audience">
   <tr>
       <th class="c1">Audience</th>
       <th class="c2">Issues</th>
       <th class="c3">Approach</th>
       
   </tr>
   
    <tr>
       <td class="c1"><b>Churches</b><br> These are the potential clients that have found their way to the site. Pastors and church office will know how to use a computer well enough to navigate through the site. Some churches have annual budget to host concert musicians. Most of these users would probably be using desktop computers but eventually it would be good to design a responsive site</td>
       <td>
        <ul>
           <li>Cost</li>
           <li>Repertoirs</li>
           <li>Examples of previous concerts</li>
        </ul>       
       </td>
      <td>
          <ul>
           <li>Contact page with a phone number, e-mail address, and contact form</li>
           <li>Repertoir lists</li>
           <li>Examples of previous concerts</li>
         </ul>   
       </td>
   </tr>
   
    <tr>
       <td class="c1"><b>Choirs</b><br> These are the potential clients that have found their way to the site. They know how to use a computer and to navigate through the site. They will have annual concert plan and when they will need an accompanist. Most of choir managers would probably be using desktop computers but eventually it would be good to design a responsive site</td>
       <td>
        <ul>
           <li>Cost</li>
           <li>Repertoirs</li>
           <li>Examples of previous work</li>
        </ul>       
       </td>
      <td>
          <ul>
           <li>Contact page with a phone number, e-mail address, and contact form</li>
           <li>Piano accompaniment and Organ accompaniment</li>
           <li>Examples of previous work</li>
         </ul>   
       </td>
   </tr>
   
   <tr>
       <td class="c1"><b>Performers(Singers, Instrument players)</b><br> These performers are either students who occassionally need an accompanist for school events and some regional competitions, or professional musicians who need an accompanist for their concerts or auditions. They usually look for an accompanist through their music teachers and collegues. These people will possibly access the site on a mobile device.</td>
       <td>
        <ul>
           <li>Cost</li>
           <li>Location and parking</li>
           <li>Rehearsal availibility</li>
        </ul>       
       </td>
        <td>
          <ul>
           <li>Contact page with a phone number, e-mail address, and contact form</li>
           <li>Piano accompaniment and Organ accompaniment</li>
           <li>Examples of previous work</li>
         </ul>   
       </td>   
   </tr>   
    
</table>
    </section>
</div>
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Hyokyoung Byun</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>


 

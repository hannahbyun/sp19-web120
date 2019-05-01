
<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

echo THIS_PAGE;

die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Sara's WEB120 Title Page";
    break;
    
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Sara";

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
//$siteKey = "6LebM54UAAAAAEeAllnuxCmmaoLUlvN9ocJsCku4";
//$secretKey = "6LebM54UAAAAAI1ToFgwbFM0BwdELumXgBdEqoWO";

?>


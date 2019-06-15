<?php
/* BIG CONFIG */

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Hyokyoung's Home Page";
    $logo = "fa-home";
    $PageID = "Homepage";
    break;

    case 'flexbox.php':
    $title = "Hyokyoung's Flexbox Research";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Flexbox Research";
    break;

    case 'galleries.php':
    $title = "Hyokyoung's Galleries Research";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Galleries Research";
    break;
         case 'map.php':
    $title = "Hyokyoung's google map";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Flexbox Research";
    break;

    case 'youtube.php':
    $title = "Hyokyoung's WordPress Intro Video";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "WordPress Intro Video";
    break;
         
    case 'calendar.php':
    $title = "Hyokyoung's Event Callendar";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "HK's event calendar";
    break;

    case 'parallax.php':
    $title = "Hyokyoung's Parallax Research";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Galleries Research";
    break;
        
    case 'shoppincarts.php':
    $title = "Hyokyoung's Shopping Carts Research";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Shopping Carts Research";
    break;

    case 'siteapp.php':
    $title = "Hyokyoung's Responsive Website vs Native Mobile App";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Galleries Research";
    break;
        
    case 'webcam.php':
    $title = "Hyokyoung's Two Examples of web cams";
    $logo = "";
    $logo_color = ' style="color:#00f"';
    $PageID = "Two Examples of web cams";
    break;
        
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
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

//Here are the keys for the server: hkmusic.me
$siteKey = "6LebM54UAAAAAEeAllnuxCmmaoLUlvN9ocJsCku4";
$secretKey = "6LebM54UAAAAAI1ToFgwbFM0BwdELumXgBdEqoWO";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

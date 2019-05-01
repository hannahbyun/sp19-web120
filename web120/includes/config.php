<?php

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


$logo_color = ''; //make logo_color an empty string by default
switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Hyokyoung's Home Page";
    $logo = "fa-home";
    break;

    case 'aia.php':
    $title = "Hyokyoung's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#00f"';
    break;

    case 'contactme.php':
    $title = "Contact Hyokyoung";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:#0f0"';
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
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}








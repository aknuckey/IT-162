<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Math 'n' Stuff";
        $logo = none;
        $PageID = 'home';
    break;
    
    case 'contact.php':
        $title = "Contact Us";
        $logo = none;
        $PageID = 'contact';
    break;

    default:
        $title = THIS_PAGE;
        $logo = none;
        $PageID = 'home';

}

$nav1['index.php'] = "Home";
$nav1['shop.php'] = "Shop";
$nav1['calendar.php'] = "Calendar";
$nav1['tutors.php'] = "Tutors";
$nav1['About.php'] = "About";
$nav1['contact.php'] = "Contact";

/*
<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Alex</a></li>
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
?>
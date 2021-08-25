<?php



//# Read from databases
    try{
    $dsn = "mysql:host=120.24.233.54;dbname=yaosheng";
    $db = new PDO($dsn, 'cm', 'Leocheung21326468');
    $db->query('set names utf8;');
    }catch(Exception $e){
        echo "Cannot connect to database,Please come back later!";
         echo  $e;
        exit();
    }

//# Global Iage
    $imgurl ="/admin/media/images/";

//# Read System
    $rs = $db->query("SELECT* FROM T_System");
    $system = $rs->fetch();





 //# Multi-Language
session_start();

if(isSet($_GET['lang']))
{
$current_lang = $_GET['lang'];
$_SESSION['lang'] = $current_lang;

}
else if(isSet($_SESSION['lang']))
{
$current_lang = $_SESSION['lang'];
}
else
{
    //# set default lang
$current_lang = 'tra';
}

switch ($current_lang) {


  case 'sim':
  $lang_file = 'sim.php';
  break;

  case 'tra':
  $lang_file = 'tra.php';
  break;

  default:
  $lang_file = 'eng.php';

}

  ?>

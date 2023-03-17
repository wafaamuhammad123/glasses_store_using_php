<?php


require_once("vendor/autoload.php");

session_start();

$db= new MySQLHandler("items");


//ene bb3t el id w bikon mrbot bl link wlw 3ndo id hidkhol 3l one product pg lw la ydkhol 3l all

if(isset ($_GET["id"]) && is_numeric($_GET["id"])){//lw gwa get feh par index etb3t f wdene ll single

    require_once("views/single.php");//lw feh id fl url hat el element da
}
else{
    require_once("views/all.php");
}



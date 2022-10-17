<?php

/*
*  Copyright (c) 2022 Hirech Baghdad Belkheir <hirechbaghdad@outlook.com>.
*  Cyf3r is a advanced phishing tool.
*/



    class INPUT_DATA
    { 
    
      public function SAFE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);

          if ($data == true)
           {
          return ($data);
            }          

          else
            {
            return (!$data) .trigger_error("Data was not be send safe");
             }

         } 
    
      } // end fo class INPUT_DATA
      
      







  class INPUT_DATA_AVAILABLE extends INPUT_DATA
    { 
    
      public function SAFE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);

          if ($data == true)
           {
          return ($data);
            }          

          else
            {
            return (!$data) .trigger_error("Data was not be send safe");
             }

         } 
    
      } // end fo class INPUT_DATA_AVAILABLE
      


?>

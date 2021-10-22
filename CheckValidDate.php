<?php   
   
   $date="2021-10-22";

   if (preg_match("/\d{4}\-\d{2}-\d{2}/", $date)) { 
    //d{4} is for the year for four characters, two d{2} is for month and day
    echo $date;
    } else {
    echo 'Invalid Date';
    }

?>
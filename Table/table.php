<!DOCTYPE html>
<html>
    <title>Multiplication table</title>
     <body>
       <?php
         echo "<table border= solid >";
           for ($i=1; $i <= 100; $i++) { 
               for ($j=1; $j <= 100; $j++) { 
                   $Times = $i * $j;
                   echo "<td> $Times </td> \n "; 
               }
               echo "<tr>";
           }

         echo "</table>";
          
       
       ?>
     </body>
</html>
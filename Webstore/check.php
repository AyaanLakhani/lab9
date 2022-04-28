<!DOCTYPE html>
<html>
<h1> Welcome to your reciept.</h1>
<?php
     $Email = $_POST['username'];
     $Pass = $_POST['Password'];
     $Qu1 = $_POST['quantity1'];
     $Qu2 = $_POST['quantity2'];
     $Qu3 = $_POST['quantity3'];
     $Rd = $_POST['shipping'];
     $shippingCost = 0;
     $item1Cost = $Qu1 * 10;
     $item2Cost = $Qu2 * 1000;
     $item3Cost = $Qu3 * 25;
     echo "Your password: ", $Pass, "<br>";
     echo "Duke's Cricket ball- ", "Quantity: ", $Qu1, " total cost: ", "$", $item1Cost, "<br>";
     echo "Gaming Laptop- ", "Quantity: ", $Qu2, " total cost: ", "$", $item2Cost, "<br>";
     echo "Memento Mori playing cards- ", "Quantity: ", $Qu3, " total cost: ", "$", $item3Cost, "<br>";
     if($Rd == "free")
     {
        echo "You picked: " ,$Rd," Shipping ", "<br>";
        $shippingCost = 0;
     }
     else if($Rd == "Express")
     {
        echo "You picked: " ,$Rd," Shipping($50) ", "<br>";
        $shippingCost = 50;
     }
     else if($Rd == "Standard")
     {
        echo "You picked: " ,$Rd," Shipping($5) ", "<br>";
        $shippingCost = 5;
     }
     $totalCost = $Qu1 * 10 + $Qu2 * 1000 + $Qu3 * 25 + $shippingCost;
     echo "Your total cost is: ", "$", $totalCost, "<br>";
?>
</html>
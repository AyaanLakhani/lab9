<!DOCTYPE html>
<html>
<title>Webstore</title>
<body>
    <h1>Welcome to the Webstore</h1> 
    <form action="check.php" method="POST">
    <input type="Email" id="User" name="username" value=" " placeholder="Enter your email" style="width: 300px;">
    <br>
    <input type="password" id="Pass" name="Password" value="" placeholder="Enter your password" style="width: 300px;">
    <br>
    <p>Dukes Cricket Ball ($10.00)</p>
    <img src="dukes.png" width="100" height="100">
    <br>
    <label for="Qt">Quantity (any amount):</label>
    <input type="number" id="QT1" name="quantity1" >
    <br>
    <p>Gaming Laptop ($1000.00)</p>
    <img src="gamingLaptop.jpg" width="100" height="100">
    <br>
    <label for="Qt">Quantity (any amount):</label>
    <input type="number" id="QT2" name="quantity2">
    <br>
    <p>Memento Mori Playing cards ($25.00)</p>
    <img src="memento.png" width="100" height="100">
    <br>
    <label for="Qt">Quantity (any amount):</label>
    <input type="number" id="QT3" name="quantity3">
    <br>
    <p>Please select preferred shipping</p>
    <input type="Radio" id="Free" name="shipping" value="free">
    <label for="free">Free shipping (7 business days)</label>
    <br>
    <input type="Radio" id="Express" name="shipping" value="Express">
    <label for="express">Express shipping ($50.00 overnight)</label>
    <br>
    <input type="Radio" id="Standard" name="shipping" value="Standard">
    <label for="standard">Standard shipping ($5.00 3 business days)</label>
    <br>
    <br>
    <input type="submit" value="submit">
    <input type="reset">
    </form>
    <style>
        form{
            text-align: center;
        }
        body{
            background-color: cornflowerblue;
        }
        h1{
            text-align: center; 
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: crimson;
        }
    </style>
</body>



</html>
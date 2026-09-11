<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 40px;
        text-align: center;
        background: #f2f2f2;
    }
    .box{
        width: 30%;
        background: white;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px gray;
    }
    h1{
        color: blue;
    }
    p{
        font-size: 18px;
    }
</style>
</head>
<body>
    <!-- 
Create calculateTotal(price, quantity).
Create calculateDiscount(total, rate).
Create calculatePayable(total, discount).
Return values instead of printing inside calculation functions.
Display the final result in HTML.
 -->
<div class="box">
    <h1>The Payment Result</h1>

 <?php
 function calculateTotal($price, $quantity){
    return $price * $quantity;
 }

 function calculateDiscount($total, $disCountrate){
    return ($total * $disCountrate)/100;
 }


function calculatePayable($total, $discount){
    return $total-$discount;
}
$price=100;
$quantity=5;
$disCountrate=10;

$total=calculateTotal($price,$quantity);
$discount=calculateDiscount($total,$disCountrate);
$finalPayement=calculatePayable($total,$discount);

echo "<p>Price :$price</p>";
echo "<p>Quantity: $quantity</p>";

echo "<hr>";
echo "<p>The total price is : $total</p>";
echo "<p>The discount is : $discount</p>";
echo "<p>The payment is : $finalPayement</p>";



 ?>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini Project - Invoice</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }

        .total {
            width: 70%;
            font-size: 18px;
        }
    </style>
</head>

<body>

<?php

// 1. Create arrays representing products, prices and quantities

$products = ["Laptop", "Mouse", "Keyboard", "Headphone"];

$prices = [500, 20, 50, 80];

$quantities = [1, 2, 1, 2];


// 2. Fixed tax rate

const TAX_RATE = 5;


// 3. Function to calculate line total

function calculateLineTotal($price, $quantity)
{
    return $price * $quantity;
}


// 4. Function to calculate discount

function calculateDiscount($subtotal)
{
    // If subtotal is 500 or more, give 10% discount

    if ($subtotal >= 500) {
        return $subtotal * 0.10;
    }

    return 0;
}


// 5. Function to calculate tax

function calculateTax($amount)
{
    return $amount * TAX_RATE / 100;
}


// 6. Function to calculate final payable amount

function calculateFinalPayable($subtotal, $discount, $tax)
{
    return $subtotal - $discount + $tax;
}


// 7. Calculate subtotal

$subtotal = 0;

?>

<h1>Shopping Invoice</h1>

<table>

    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Line Total</th>
    </tr>

<?php

// 8. Display product rows

for ($i = 0; $i < count($products); $i++) {

    $lineTotal = calculateLineTotal(
        $prices[$i],
        $quantities[$i]
    );

    $subtotal += $lineTotal;

?>

    <tr>
        <td><?php echo $products[$i]; ?></td>
        <td>$<?php echo $prices[$i]; ?></td>
        <td><?php echo $quantities[$i]; ?></td>
        <td>$<?php echo $lineTotal; ?></td>
    </tr>

<?php

}


// 9. Calculate discount

$discount = calculateDiscount($subtotal);


// 10. Calculate tax

$tax = calculateTax($subtotal - $discount);


// 11. Calculate final payable amount

$finalPayable = calculateFinalPayable(
    $subtotal,
    $discount,
    $tax
);

?>

</table>


<div class="total">

    <p>
        <strong>Subtotal:</strong>
        $<?php echo number_format($subtotal, 2); ?>
    </p>

    <p>
        <strong>Discount:</strong>
        $<?php echo number_format($discount, 2); ?>
    </p>

    <p>
        <strong>Tax (<?php echo TAX_RATE; ?>%):</strong>
        $<?php echo number_format($tax, 2); ?>
    </p>

    <p>
        <strong>Final Payable:</strong>
        $<?php echo number_format($finalPayable, 2); ?>
    </p>

</div>

</body>
</html>
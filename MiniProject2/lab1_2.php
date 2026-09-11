<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical_Lab</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        h1{
            color: #333;
            margin-bottom: 10px;
        }
        table{
            
            margin: auto;
            border-collapse: collapse;
            width: 90%;
            box-shadow: 0 0 15px gray;
            height: 250px;

        } th{
            color: white;
            padding: 12px;
            font-size: 18px;
            background: #3498db;
        }
        td{
            border: 1px solid #ddd;
            padding: 12px;
            font-size: 16px;
        }
      
        tr:nth-child(even){
            background: #f9f9f9;
        }
        tr:hover{
            background: #d6f5ff;
        }
     
    </style>
</head>
<body>
    

<table>
    <h3 style="text-align: center; color: #3498db; font-size: 30px;" >Multiplication table from 1 to 10</h3>
<?php

// Practical Lab 1:
// Example 1:Print numbers 1–20 using while.
// $numbers=1;
// while($numbers<=20){
//     echo $numbers ."-";
//     $numbers++ ;
// }


// Example 2:Print numbers 20–1 using for.

// for($numbers=20; $numbers>=1; $numbers--){
//   echo "<div > $numbers </div>";
// }

// Example 3:Print only even numbers.Print only odd numbers.

// $counters=9;
// if($counters%2==0){
//     echo "Even Number";
//  }
// else{
//         echo "Odd Number!";
//     }

// Example 4:
// Calculate the sum of numbers 1–100

// $text=0;
// for($counters=1;$counters<=100; $counters++){
//     $text=$text+$counters;
//     echo "The sum numbers from 1 to 100 is:" .$text ."<br>";
// }

// Practical Lab 2:
/*
Create a variable for a number.
Generate its multiplication table from 1 to 10.
Use a for loop.
Render output in an HTML table.
Add headings and basic CSS.

*/



echo "<tr>";
echo "<th>*</th>";

for($i=1;$i<=10;$i++){
    echo "<th>$i</th>";
}

echo "</tr>";
// Multiplication Table

for($i=1;$i<=10;$i++){ 
    echo "<tr>";
    echo "<th>$i</th>";
    
for($j=1;$j<=10;$j++){ 
    $re=$i*$j;
    $result="$i * $j";
    echo "<td>";echo $result . "   =  $re  ";echo "</td>";
    }
    echo "</tr>";
    }
?>
</table>
</body>
</html>
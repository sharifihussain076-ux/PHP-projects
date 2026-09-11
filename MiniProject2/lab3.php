<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3 Projects</title>
    <style>
    body{
            font-family: sans-serif Arial, Helvetica, sans-serif;
            padding: 0px;
            margin: 0px;
    }
h1{
    color: blue;
}
ul{
    background: #f2f2f2;
    padding: 20px;
    width: 300px;
    border-radius: 10px;

}
li{
    margin: 10px;
    font-size: 18px;
}
    </style>
</head>
<body>
    <h1>Students List</h1>
<!-- 
Create an array of at least five student names.
Use foreach to generate an unordered HTML list.
Add a sequence number.
Display the total number of students using count().
-->
<?php

$students=["hamid",'nabi',"ali","mahmod",'karim'];
echo "<ul>";
$number=1;
foreach($students as $student){
    echo "<li>";
    echo $number . "." .$student; 
    echo "</li>";
    $number++;
}
echo "</ul>";
$total=count($students);
echo "<h3>Total Students: "."  $total </h3>"
?>
</body>
</html>
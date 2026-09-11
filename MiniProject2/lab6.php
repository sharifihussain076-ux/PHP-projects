<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab6</title>
</head>
<body>
    
<?php
/*Create a global variable.
Attempt to access it directly inside a function.
Observe the problem.
Repeat using global.
Repeat by passing it as a parameter.
Explain which design is clearer and why.

Create a function with a normal local counter.
Call it three times and observe behavior.
Change the counter to static.
Call it three times again.
Explain the difference.

*/

$name="Hussain";
function globalVariable(){
    global $name;
    echo $name;
}

globalVariable();
echo "<br>";
$namber=10;
function showVariable($value){
    echo $value;
}
showVariable($namber);


echo "<br>";
// A normal local varible is used when a temporary value inside a function
// every time the functions run a new count is created after the function finishes the varibles is destroyed.
//  therfore it always starts with 0
echo "This is a normal varible";
function test(){
  $counter=0;
    $counter++;
    echo "Count :". $counter . "<br>";
}
test();
test();
test();

// A static varible is usd when a function needs to remember information from previous calls such as.
// The  varbele is create once.
// the value is not destroyed when functions ends.
echo "This is a global varible!";
echo "<br>";
function test1(){
 static $counter=0;
    $counter++;
    echo "Count :". $counter . "<br>";
}
test1();
test1();
test1();
?>

</body>
</html>
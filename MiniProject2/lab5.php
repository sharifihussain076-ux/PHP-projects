<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
            background: #f2f2f2;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }
        th{
            background: #3498db;
            color: white;
            padding: 12px;
        }
        td{
            border: 1px solid #ddd;
            padding: 10px;
        }
        tr:hover{
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    
<!-- 
Create getGrade(marks).
Return A/B/C/D/F or descriptive grades.
Create isPassed(marks).
Call both functions for multiple students using a loop.
Render a result table

 -->
<h1>Student Grade Result</h1>

 <?php
 $students=[
    ["Ahmad",95],
    ["Ali",87],
    ["Nabi",76],
    ["Hussain",66],
    ["Rasol",45]
];

echo "<table>";
echo "<tr>
<th>Name</th>
<th>Marks</th>
<th>Grades</th>
<th>Status</th>
</tr>";
foreach ($students as $student){
    $name=$student[0];
    $marks=$student[1];
    $grade=getGrade($marks);
    $status=isPassed($marks);
    echo "<tr>";
    echo "<td>$name</td>";
     echo "<td>$marks</td>";
      echo "<td>$grade</td>";
       echo "<td>$status</td>";
     echo "</tr>";
}

echo "</table>";

function getGrade($marks){
    if($marks>=90 and $marks<=100){
        return "A - Excellent";
    }
    else if($marks>=80 and $marks<90){
        return "B _very Good!";
    }
    else if($marks>=70 and $marks<80){
        return "C - good!";
    }
    else if($marks>=60 and $marks<70){
        return "D a little good!";
    }
    else if($marks>=55 and $marks<60){
        return "F grade not Bad!";
    } 
    else{
        return "Invalid marks or faild";
    }
}
 
function isPassed($marks){
    if($marks>=55){
        return "Passed!";
    }
    else{
        return "Faild!";
    }

}


 ?>
</body>
</html>
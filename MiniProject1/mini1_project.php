<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Result Card</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .result-card {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h1 {
            text-align: center;
        }

        .info {
            margin: 10px 0;
        }

        .pass {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }

        .warning {
            color: orange;
            font-weight: bold;
        }

        .grade {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<?php

// 1. Student variables

$studentName = "Hussain Sharifi";
$studentID = "ST001";
$subject = "PHP Programming";
$marks = 78;
$attendance = 85;


// 2. Calculate Grade

if ($marks >= 90) {
    $grade = "A";
}
elseif ($marks >= 80) {
    $grade = "B";
}
elseif ($marks >= 70) {
    $grade = "C";
}
elseif ($marks >= 60) {
    $grade = "D";
}
elseif ($marks >= 50) {
    $grade = "E";
}
else {
    $grade = "F";
}


// 3. Determine Pass / Fail

if ($marks >= 50 && $attendance >= 75) {
    $status = "PASSED";
}
else {
    $status = "FAILED";
}


// 4. Status message

if ($marks < 50 && $attendance < 75) {

    $message = "You failed because your marks and attendance are insufficient.";

}
elseif ($marks < 50) {

    $message = "Your marks are insufficient.";

}
elseif ($attendance < 75) {

    $message = "Warning: Your attendance is insufficient.";

}
else {

    $message = "Congratulations! You passed.";

}

?>

<div class="result-card">

    <h1>Student Result</h1>

    <div class="info">
        <strong>Name:</strong>
        <?php echo $studentName; ?>
    </div>

    <div class="info">
        <strong>Student ID:</strong>
        <?php echo $studentID; ?>
    </div>

    <div class="info">
        <strong>Subject:</strong>
        <?php echo $subject; ?>
    </div>

    <div class="info">
        <strong>Marks:</strong>
        <?php echo $marks; ?>
    </div>

    <div class="info">
        <strong>Attendance:</strong>
        <?php echo $attendance; ?>%
    </div>

    <div class="info grade">
        <strong>Grade:</strong>
        <?php echo $grade; ?>
    </div>

    <div class="info">

        <strong>Status:</strong>

        <?php

        if ($status == "PASSED") {
            echo "<span class='pass'>$status</span>";
        }
        else {
            echo "<span class='fail'>$status</span>";
        }

        ?>

    </div>

    <div class="info">

        <?php

        if ($attendance < 75) {
            echo "<span class='warning'>$message</span>";
        }
        elseif ($status == "PASSED") {
            echo "<span class='pass'>$message</span>";
        }
        else {
            echo "<span class='fail'>$message</span>";
        }

        ?>

    </div>

</div>

</body>
</html>
<?php

//Functions
function checkInteger($value) {
    return filter_var($value, FILTER_VALIDATE_INT);
}

function checkpositiveInteger($value) {
    return $value > 0;
}
function checkPrime($value) {
    if ($value == 1) {
        return false;
    }
    global $iterations;
    for ($i = 2; $i < sqrt($value); $i++) {
        ++$iterations;
        if ($value % $i == 0) {
            return "$value is not a prime number.";
        }
    }
    return "$value is a prime number.";
}

//Declared variables.
$iterations = 0;
$value = $_GET['value'];
$result = "";


//Main checking code
if (checkInteger($value)) {
    if (checkpositiveInteger($value)) {
        $result = checkPrime($value);
    } else {
        $result = "Not positive integer.";
    }
} else {
    $result = "Not an integer.";
}

?>

<html lang="en">
<head>
    <title>Result</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <fieldset style="display: inline-block">
        <legend>Result screen</legend>
        <p>Result: <span style="margin-left: 3px"><?php echo "$result"?></span></p>
        <p>Iterations: <span style="margin-left: 3px"><?php echo"$iterations"?></span></p>
    </fieldset>
</body>
</html>




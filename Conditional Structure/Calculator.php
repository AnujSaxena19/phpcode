<?php

$first=$second=$result="";

if(isset($_POST['operator']))
{

    $first=$_POST['first'];
    $second=$_POST['second'];
    $operator=$_POST['operator'];

    switch($operator){
        case "Add":
            $result=$first+$second;
        break;
        case "Subtract":
            $result=$first-$second;
        break;
        case "Multiply":
            $result=$first*$second;
        break;
        case "Divide":
            $result=$first/$second;
        break;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Simple Calculator</title>
</head>
<body>
    <div id="page-wrap">
    <h1>Simple Calulator</h1>
    <form method="POST">
    <p>
    <input type="number" name="first" required="required" value="<?php echo $first; ?>"/> <b>First Number</b>;
    </p>

    <p>
    <input type="number" name="second" required="required" value="<?php echo $second; ?>"/> <b>Second Number</b>;
    </p>

    <p>
    <input name="result" readonly="readonly" value="<?php echo $result; ?>"/> <b>Result</b>;
    </p>

    <input type="submit" name="operator" value="Add"/>

    <input type="submit" name="operator" value="Subtract"/>
    <input type="submit" name="operator" value="Multiply"/>
    <input type="submit" name="operator" value="Divide"/>

</form>
</div>

</body>
</html>
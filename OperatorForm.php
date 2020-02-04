<?php

extract($_POST);

if(isset($sub)){
    $a=$txt1;
    $b=$txt2;
    $c=$a+$b;

    echo "<p>The result is:".$c."</p><br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="form-group";
    <label for="">Enter Number-1</label>
    <input type="text" name="txt1" class="form-control" id="enternumber" placeholder="Enter Number-1">
    </div>

    <div class="container">
    <form method="POST">
    <div class="form-group";
    <label for="">Enter Number-2</label>
    <input type="text" name="txt2" class="form-control" id="enternumber" placeholder="Enter Number-2">
    </div>

<button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
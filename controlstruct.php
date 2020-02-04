<?php
extract($_POST);    
    $number=$text1;
    if($number>0){
        echo $number." is positive number";
    }
    else{
        echo $number."is negative number";
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
  <div class="form-group">
    <label for="">Enter no.</label>
    <input type="text" name="text1" class="form-control" id="enternumber" aria-describedby="enternumber" placeholder="Enter number">
    
  </div>
  
   
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
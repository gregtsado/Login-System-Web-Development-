<?php
session_start();
?>
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<input type="text" placeholder="first number" name="numb1"><br>
<input type="text" placeholder="second number" name="numb2"><br>
<select name="dop">
<option>add</option>
<option>subtract</option>
<option>multiply</option>
<option>divide</option>
</select>
<button type="summit" name="summit" value="summit">submit</button>
<?php
if (isset($_GET['summit'])){
    $result1 = $_GET['numb1'];
    $result2 = $_GET['numb2'];
    $operator = $_GET['dop'];
switch ($operator){
case "add":
 echo $result1+$result2; 
break;
case "subtract":
 echo $result1-$result2;
break;
case "multiply":
 echo $result1*$result2;
break;
case "divide":
 echo $result1/$result2;
break;
}
}
$dayoftheweek= date('w');
switch ($dayoftheweek){
    case 1:
    echo "it is monday";
    break;
    case 2:
    echo "it is Tuesday";
    break;
    case 3:
    echo "it is Wednesday";
    break;
    case 4:
    echo "it is Thursday";
    break;
    case 5:
    echo "it is Friday";
    break;
    case 6:
    echo "it is Saturday";
    break;
    case 0:
    echo "it is Sunday";
    break;
}
?>
</body>
</html>
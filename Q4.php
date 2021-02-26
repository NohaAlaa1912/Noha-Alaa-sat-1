<?php
 // Answer Question 4
//make for loop to  each column and each row and make a Mathematical operation to multiplication the row and column by the specified range in the loop
//and in every roll put the result of operation ofmultiplication  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time table</title>
</head>
<body>
    
    <table border="1" >
    <?php for ($c=1; $c <= 12; $c++) { ?> 
 <tr> <?php for ($r=1; $r <= 12; $r++) {?>
 <td>
 <?php $result= $c * $r;
  echo "$c * $r = $result";
  ?>
 </td>
<?php } ?>
 </tr>  
<?php } ?>
</table>

    
</body>
</html> 


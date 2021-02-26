  <?php
// Answer Question 6

?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>

    
</head>


<body>
  <?php
  // this array like a Multidimensional Associative Array ->
  //  Multidimensional array is used to store an arrays Associative array stores the data in the form of key and value pairs where the key can be an integer or string. Multidimensional associative array is often used to store data in group relation.

$employees = [
    
    [
        'name' => 'Ahmed Hamdy',
        'job'  => 'Front End',
        'experienc' => 3 ,
    ],
    [
        'name' => 'Mohammed Shaker',
        'job'  => 'Back End',
        'experienc' => 2,
    ],
    [
        'name' => 'Ali Hassan',
        'job'  => 'Full Stack',
        'experienc' => 4 ,
    ],
];
?>
<div class="card py-2 my-4 mx-2" style="width: 18rem;">
  <div class="card-body">
  <?php foreach($employees as $employee){?>
     <h5 class="card-title">
  <?php foreach($employee as $key => $value){?>
     <?php echo " $value <br> ";?> 

    
    
  </h5>
  <h6 class="card-subtitle mb-2 text-muted">
  
  </h6>
<?php
}
echo "<hr>";
}
?> 
  </div>
</div>
</body>
</html>
 

<?php
// // Answer Question 6

//  $employees = [
    
//     [
//         'name' => 'Ahmed Hamdy',
//         'job'  => 'Front End',
//         'experienc' => 3 ,
//     ],
//     [
//         'name' => 'Mohammed Shaker',
//         'job'  => 'Back End',
//         'experienc' => 2,
//     ],
//     [
//         'name' => 'Ali Hassan',
//         'job'  => 'Full Stack',
//         'experienc' => 4 ,
//     ],
// ];

// foreach($employees as $employee){
//   foreach($employee as $key => $value){
//   echo " $value <br> ";

// }
// echo "<br>";
// }
   
 

    
?>

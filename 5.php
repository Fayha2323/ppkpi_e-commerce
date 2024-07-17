<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Belajar PHP Part 5</title>
</head>
<body>
     <!-- for,while, do while, foreach-->
      <?php
      for ($i=10; $i<=1; $i++){
          echo"<h1>Text $i</h2>";
      }

$a= 1;
while ($a<=10){
    echo "total A sebanyak" .$a;
    $a++;
}
$siswa = ["Ade","Budi","Laras" ];
foreach($siswa as $key => $value){

    
    echo "Data siswa dengan indeks ke ". $key .
    "Dan nama-namanya ialah ". $value ."<br>";
}

?>
</body>
</html>
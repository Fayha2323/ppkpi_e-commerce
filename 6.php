<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP function</title>
</head>
<body>

<?php
$status=0;
switch ($status){
     case 1:
          $pesan= "Verifikasi";
          break;
          case 2:
               $pesan= "Selesai";
          break;
               default:
               $pesan="pending";
               break;
     
     
}
function labelStatus($status){
     switch ($status){
          case 1:
               $pesan= "Verifikasi";
               break;
               case 2:
                    $pesan= "Selesai";
               break;
                    default:
                    $pesan="pending";
                    break;
}
return $pesan;
}
     
?>

     <table width="100%" border="1">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Notes</th>
               </tr>
          </thead>
          <tbody>
               <tr>
                    <td>1</td>
                    <td>Fayha</td>
                    <td>Naz77@gmail.com</td>
                    <td><?php echo labelStatus(0)?></td>
                    <td>
                         Edit
                         Delete
                    </td>
               </tr>
               <tr>
                    <td>2</td>
                    <td>Fayha</td>
                    <td>Naz77@gmail.com</td>
                    <td><?php echo labelStatus(1) ?></td>
                    <td>
                         Edit
                         Delete
                    </td>
               </tr>
               <tr>
                    <td>3</td>
                    <td>Fayha</td>
                    <td>Naz77@gmail.com</td>
                    <td><?php echo labelStatus(2) ?></td>
                    <td>
                         Edit
                         Delete
                    </td>
               </tr>
          </tbody>
     </table>

</body>

</html>
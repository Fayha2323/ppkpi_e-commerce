<?php
include "koneksi.php";
//tampilkan semua data dari table user urutkan berdasarkan
//dari yang terbesar ke yang terkecil
$query= mysqli_query($koneksi,"SELECT * FROM fay_db ORDER BY id DESC");
// $query = mysqli_fetch_assoc($query);
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi,"DELETE FROM fay_db WHERE id='$id'");
    header('location:user.php?notif=hapus-berhasil');

}
// if (isset($_POST['save'])){
//      $nama_lengkap = $_POST['nama_lengkap'];
//      $email = $_POST['email'];
//      $insert = mysqli_query($koneksi, "INSERT INTO user (nama_lengkap, email) VALUES ('$nama_lengkap','$email')");
//      if ($insert) {
//           echo "insert berhasil";
//      }else {
//           echo "gagal";

//      }
//      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ujicoba PHP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <div class="container">
     <div class="row">
          <div class="col-12 mt-5">
               <div class="table-responsive">
               <div align ="right" class="mb-3">
                <a href="7.php" class="btn btn-primary">Tambah User</a>
               </div>     
               <table class="table table-bordered">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Nama</th>
                                   <th>Email</th>
                                   <th>Aksi</th>
                              </tr>
                         </thead>
                         <tbody>
<?php $no = 1;
while ($row = mysqli_fetch_assoc($query)) : ?>

                              <tr>
                                   <td><?php echo $no++ ?></td>
                                   <td><?= $row['nama_lengkap']?></td>
                                   <td><?= $row['email']?></td>
                                   <td><a href="7.php?edit=<?php echo $row ['id'];?>" class="btn btn-sm btn-success">Edit</a> |
                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                     href="user.php?delete=<?php echo $row['id']?>" class="btn btn-sm btn-danger">Delete </a></td>
                              </tr>
                              <?php endwhile ?>
                         </tbody>
                    </table>
               </div>
               
     
     </div>
</body>
</html>
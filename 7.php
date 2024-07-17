<?php
include "koneksi.php";

if (isset($_POST['save'])){
     $nama_lengkap = $_POST['nama_lengkap'];
     $email = $_POST['email'];
     $insert = mysqli_query($koneksi, "INSERT INTO fay_db (nama_lengkap, email) VALUES ('$nama_lengkap','$email')");
     if ($insert) {
          header("location:user.php?notif=tambah-success");
     }else {
          echo "gagal";

     }
     }
// jika parameter edit itu "ADA",ambil nilai parameter edit
if (isset($_GET['edit'])) {
     $id = $_GET['edit'];
     //tampilkan sebuah data dari tabel user yang bernilai id dari nilai parameter
     $edit = mysqli_query($koneksi,"SELECT * FROM fay_db WHERE id= '$id'");
     $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
     $nama_lengkap = $_POST['nama_lengkap'];
     $email = $_POST['email'];
     $id = $_GET ['edit'];

     $update = mysqli_query($koneksi,"UPDATE fay_db SET nama_lengkap='$nama_lengkap', email='$email' WHERE id ='$id'");
     header ("location:user.php?notif=update-berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ujicoba PHP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

                         <!-- <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Nama</th>
                                   <th>Email</th>
                                   <th>Aksi</th>
                              </tr>
                         </thead> -->
                         <!-- <tbody>
                              <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                              </tr>
                         </tbody> -->
                    </table>
               </div>
               <body>
     <div class="container">
     <div class="row">
          <div class="col-10">
               <?php if (isset($_GET['edit'])):?>
               <h3>Edit</h3>
               <form action="" method="post">
                    <div class="form-group">
                         <label for="" class="form-label">Nama Lengkap</label>
                         <input value="<?php echo $rowEdit['nama_lengkap']?>" type="text" class="form-control"placeholder="ketik nama" name="nama_lengkap">
                         <!-- name="nama_lengkap" placeholder="ketik nama"> -->
                    </div>
                    <div class="form-group">
                         <label for="" class="form-label">Email</label>
                         <input value="<?php echo $rowEdit['email']?>" type="email" class="form-control" 
                         name="email" placeholder="ketik email" >
                    </div>
                    <div class="form-group mb-3">
                         <input type="submit" class="btn btn-primary" 
                         name="edit" value="simpan">
               </form>
               <?php else:?>
               <h3>Tambah</h3>
              
               <form action="" method="post">
                    <div class="form-group">
                         <label for="" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control" 
                         name="nama_lengkap" placeholder="ketik nama">
                    </div>
                    <div class="form-group">
                         <label for="" class="form-label">Email</label>
                         <input type="email" class="form-control" 
                         name="email" placeholder="ketik email">
                    </div>
                    <div class="form-group mb-3">
                         <input type="submit" class="btn btn-primary" 
                         name="save" value="simpan">
               </form>
               <?php endif;?>
     </div>
</body>
</html>
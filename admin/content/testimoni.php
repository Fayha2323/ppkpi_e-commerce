<?php
$query = mysqli_query($koneksi, "SELECT * FROM testimoni ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM testimoni ORDER BY id='$id'");
    header("location:?pg=testimoni&hapus=berhasil");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $edit = mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
?>
<div align="right" class="mb-3">
    <a href="?pg=tambah_testimoni" class="btn btn-primary">Tambah testimoni</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Deskripsi</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_testi'] ?></td>
                <td><?php echo $row['jabatan'] ?></td>
                <td><?php echo $row['deskripsi'] ?></td>
                <td><a href="?pg=tambah_testimoni&edit=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Edit</a> |
                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="?pg=testimoni&delete=<?php echo $row['id'] ?>" class=" btn btn-xs btn-success">Delete</a>
                </td>
                </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>
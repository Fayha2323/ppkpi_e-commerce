<?php
if (isset($_POST['simpan'])) {
    $email_web = $_POST['email_web'];
    $hp_web = $_POST['hp_web'];
    $alamat = $_POST['alamat'];
    $ig_web = $_POST['ig_web'];
    $x_web = $_POST['x_web'];
    $fb_web = $_POST['fb_web'];
    $linkedIn = $_POST['linkedIn'];

    $querySetting = mysqli_query($koneksi, "SELECT * FROM setting ORDER BY id DESC");
    if (mysqli_num_rows($querySetting) > 0) {
        //updated    
    } else {
        //insert
        $insert = mysqli_query($koneksi, "INSERT INTO setting(email_web,hp_web, alamat, ig_web, x_web, fb_web, linkedIn)
VALUES ('$email_web', '$hp_web','$alamat','$ig_web','$x_web','$fb_web','$linkedIn')");
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Email Web</label>
        <input type="email" class="form-control" name="email_web" placeholder="Email Web">
    </div>
    <div class="mb-3">
        <label for="">No.Hp Web</label>
        <input type="text" class="form-control" name="hp_web" placeholder="No_hp Web">
    </div>
    <div class="mb-3">
        <label for="">Alamat Website</label>
        <textarea name="alamat" id="" class="form-control">Alamat</textarea>
    </div>
    <div class="mb-3">
        <label for="">Instagram</label>
        <input type="url" class="form-control" name="ig_web" placeholder="Ig link">
    </div>
    <div class="mb-3">
        <label for="">X </label>
        <input type="url" class="form-control" name="x_web" placeholder="X Link">
    </div>
    <div class="mb-3">
        <label for="">Facebook Web</label>
        <input type="url" class="form-control" name="fb_web" placeholder="Fb Link">
    </div>
    <div class="mb-3">
        <label for="">LinkedIn</label>
        <input type="url" class="form-control" name="linkedIn" placeholder="LinkedIn Link">
    </div>
    <div class="mb-3">
        <label for="">Logo</label>
        <input type="file" class="form-control" name="logo">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>

</form>
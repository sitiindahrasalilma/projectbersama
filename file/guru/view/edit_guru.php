<?php
$db = __database();
$where = [
    'kd_prodi' => $_GET['id']
];
$query  = __ambil($db, "prodi", "*", $where);


$rows      = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Guru</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=guru&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->kd_guru; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Guru
                </label>
                <div class="col-md-6 col-sm6 col-lg-12">
                    <input type="text" id="kd_guru" name="nama_guru" value="<?php echo $rows->nama_guru; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=guru">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
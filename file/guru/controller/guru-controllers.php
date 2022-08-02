<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'kd_guru' => $_POST['guru'],
        'nama_guru' => $_POST['nama_guru']
    ];
    $simpan = _simpan($db, "prodi", $data);
    if ($simpan) {
?>
         <script>
            window.location.href ='admin.php?target=guru';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'kd_guru' => $_GET['id']
    ];
    $delete = __delete($db, "prodi", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=guru';
        </script>
    <?php
    } else {
        echo "gagal hapus " . $db->error;
    }
}
// end kondisi delete
// start kondisi update
elseif ($opsi == "update") {
    $data = [
        'nama_guru' => $_POST['nama_guru']
    ];
    $where = [
        'kd_guru' => $_POST['id']
    ];
    $update = __update($db, "prodi", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=guru';
        </script>
<?php 
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>
<div class="card">
    <div class="card-header">
        <h4>Form Guru</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=guru&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label colmd-3 colsm-3 col-lg-12" for="first-name">
                    Kode Guru
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_guru" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Guru
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama_guru" class="form-control" />
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
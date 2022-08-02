<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $id_siswa=$_POST['id_siswa'];
    $nama=$_POST['nama'];
    $mapel=$_POST['mapel'];
    $nilai=$_POST['nilai'];

    $sql="insert into 'crud' (id_siswa,nama,mapel,nilai) values('$id_siswa', '$nama', '$mapel', '$nilai')";
    $result=mysql_query($con,$sql);
    $con=new mysqli('localhost', 'root', '', 'crudoperation');
    if($result){
      echo "data inserted successfully";
    }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>data siswa</title>
  </head>
  <body>
      <div class="container">
      <form method="post">
    <div class="form-group">
    <label >id_siswa</label>
    <input type="text" class="form-control" placeholder="Enter your id_siswa" name="id_siswa">

  </div>

    <div class="form-group">
      <label >nama</label>
      <input type="text" class="form-control" placeholder="Enter your mapel" name="nama">

    </div>
    <div class="form-group">
      <label >mapel</label>
      <input type="text" class="form-control" placeholder="Enter your mapel" name="mapel">

    </div>
    <div class="form-group">
      <label >nilai</label>
      <input type="text" class="form-control" placeholder="Enter your nilai" name="nilai">

    </div>
    <div class="form-group">
      <label >opperations</label>
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      </div>



  </body>
</html>
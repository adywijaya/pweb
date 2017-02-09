<section id="services">

<div class="container">
<div class="col-md-10 col-md-push-1">
  <center><h1>Informasi Anggota</h1><center>
  <br><br>

<table class="table table-striped">
    <thead>
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Jenis Kelamin</th>
      <th>Email</th>
      <th>Angkatan</th>
      <th>Point</th>
    </tr>
    </thead>

    <tbody>
      <?php $no = 1; foreach ($users as $u) { ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nim ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->jurusan ?></td>
            <td><?php echo $u->jenis_kelamin ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->angkatan ?></td>
            <td><?php echo $u->point ?></td>
          </tr>
       <?php } ?>

    </tbody>
    </table>
  </div>
</div>
</section>

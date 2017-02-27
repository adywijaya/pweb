<section id="services">
<div class="container">
  <div class="col-md-10 col-md-push-1">
    <center><h2 class="section-heading">Informasi Anggota</h2><center>
    <br><br>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
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
</div>
</section>

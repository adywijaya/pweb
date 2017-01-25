<section id="services">

<div class="container">
<div class="col-md-10 col-md-push-1">
  <h1>Reward Point</h1>
  <hr>

<table class="table">
    <thead>
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Reward Point</th>
    </tr>
    </thead>

    <tbody>
      <?php foreach ($reward as $d) { ?>
          <tr>
             <th><?= $d['nim']; ?></th>
             <th><?= $d['nama']; ?></th>
             <th><?= $d['jurusan']; ?></th>
             <th><?= $d['poin']; ?></th>
          </tr>
       <?php } ?>

    </tbody>
</table>
    </div>
  </div>
</section>
